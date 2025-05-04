<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\product;
use App\Models\Transactions;

class BuyMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            if (Auth::user()->role == 'user' || Auth::user()->role == 'admin') {
                $check_product = Product::where('id', $request->product_id)->first();

                if (!$check_product) {
                    return redirect()->back()->withErrors('Ürün bulunamadı.');
                } else {
                    $b = Transactions::where([
                        'email' => Auth::user()->email,
                        'product_name' => $check_product->name
                    ])->first();

                    if ($b) {
                        return redirect()->back()->withErrors('Ürünü zaten satın aldınız. Hesabım sekmesinden ulaşabilirsiniz.');
                    } else {

                        return $next($request);
                    }
                }

            }
        }
        return redirect('/user');
    }
}
