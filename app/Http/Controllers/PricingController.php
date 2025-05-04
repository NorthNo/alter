<?php

namespace App\Http\Controllers;

use Iyzipay\Model\Address;
use Iyzipay\Model\BasketItem;
use Iyzipay\Model\BasketItemType;
use Iyzipay\Model\Buyer;
use Iyzipay\Model\CheckoutFormInitialize;
use Iyzipay\Model\Currency;
use Iyzipay\Model\Locale;
use Iyzipay\Model\PaymentGroup;
use Iyzipay\Model\PaymentChannel;
use Iyzipay\Request\CreatePaymentRequest;
use Iyzipay\Options;
use Iyzipay\Request\CreateCheckoutFormInitializeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Iyzipay\Model\PaymentCard;

use App\Models\product;
use App\Models\User;
use App\Models\Transactions;

class PricingController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();

        if($user){
            if(!$user->email_verified){
                return redirect('/verify-email')->withErrors('Lütfen email adresinizi doğrulayın.');
            }
            if(!$user->mobile_verified){
                return redirect('/mobile/enter')->withErrors('Lütfen telefon numaranızı doğrulayın.');    
            }
        }else{
            return redirect('/user')->withErrors('Lütfen öncelikle giriş yapın veya hesabınız yok ise kayıt olun.');
        }

        return view('main/payment_form')->with([
            'id' => $request->product_id,
            'product' => product::where('id',$request->product_id)->first()
        ]);
    }
    public function checkout(Request $request)
    {
        $name = $request->get('name');
        $card_no = $request->get('card_no');
        $expire_month = $request->get('expire_month');
        $expire_year = $request->get('expire_year');
        $cvc = $request->get('cvc');

        $user = Auth::user();

        $product = product::where('id', $request->id)->first();

        $request = new CreatePaymentRequest();
        $request->setLocale(Locale::TR);
        $request->setConversationId(str($product->id));
        $request->setPrice(str($product->price));
        $request->setPaidPrice(str($product->price));
        $request->setCurrency(Currency::TL);
        $request->setInstallment(1);
        $request->setBasketId("B67832");
        $request->setPaymentChannel(PaymentChannel::WEB);
        $request->setPaymentGroup(PaymentGroup::PRODUCT);

        $paymentCard = new PaymentCard();
        $paymentCard->setCardHolderName($name);
        $paymentCard->setCardNumber($card_no);
        $paymentCard->setExpireMonth($expire_month);
        $paymentCard->setExpireYear($expire_year);
        $paymentCard->setCvc($cvc);
        $paymentCard->setRegisterCard(0);
        $request->setPaymentCard($paymentCard);

        $buyer = new Buyer();
        $buyer->setId(str($user->id));
        $buyer->setName(str($request->first_name ?? 'Doe'));
        $buyer->setSurname(str($request->last_name ?? 'Doe'));
        $buyer->setGsmNumber(str($user->phone_number));
        $buyer->setEmail(str($user->email));
        $buyer->setIdentityNumber("11111111111");
        $buyer->setLastLoginDate(str($user->updated_at));
        $buyer->setRegistrationDate(str($user->created_at));
        $buyer->setRegistrationAddress("Sanal Satış nedeni ile adres bulunmamaktadır.");
        $buyer->setIp(\request()->ip());
        $buyer->setCity("Istanbul");
        $buyer->setCountry("Turkey");
        $buyer->setZipCode("34732");
        $request->setBuyer($buyer);

        $billingAddress = new Address();
        $billingAddress->setContactName(str($user->first_name ?? 'Doe')." ".str($user->last_name ?? 'Doe'));
        $billingAddress->setCity("Istanbul");
        $billingAddress->setCountry("Turkey");
        $billingAddress->setAddress("Sanal Satış nedeni ile adres bulunmamaktadır.");
        $billingAddress->setZipCode("34742");
        $request->setBillingAddress($billingAddress);

        $basketItems = array();
        $firstBasketItem = new BasketItem();
        $firstBasketItem->setId(str($product->id));
        $firstBasketItem->setName(str($product->name));
        $firstBasketItem->setCategory1("SCRIPT");
        $firstBasketItem->setItemType(BasketItemType::VIRTUAL);
        $firstBasketItem->setPrice(str($product->price));
        $basketItems[0] = $firstBasketItem;

        $request->setBasketItems($basketItems);

        $options = new Options();
        $options->setApiKey(env("IYZI_PUBLIC_KEY"));
        $options->setSecretKey(env("IYZI_SECRET_KEY"));
        $options->setBaseUrl(env("IYZI_BASE_URL"));

        $payment = \Iyzipay\Model\Payment::create($request, $options);

        if ($payment->getStatus() == 'success') {
            Transactions::insert([
                'product_name' => $product->name,
                'type' => 'buy',
                'email' => $user->email,
                'price' => $product->price,
                'credit_card' => '',
                'created_at' => now(),
                'updated_at' => now()
            ]);

            return redirect('/account')->with('success', 'Ürün başarılı bir şekilde satın alındı.');
        } else {
            dd($payment);
            return back()->withErrors(['fail' => 'Satın alma işlemi başarısız.']);
        }
    }
}