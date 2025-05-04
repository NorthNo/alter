<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\product;
use App\Models\Transactions;

class ProductController extends Controller
{
    public function show(Request $request)
    {
        $product = product::where("id", $request->query("product", 1))->first();

        if (!$product) {
            return redirect("/");
        }
        $bought = Transactions::where([
            "id" => $request->query("product", 1),
            "email" => Auth::user()->email ?? ''
        ])->first();

        return view('main/buy', [
            'page_name' => 'Servis',
            'product_id' => $product->id,
            'product_name' => $product->name,
            'product_image' => $product->image_path,
            'product_manager' => $product->creator,
            'sales_number' => $product->sales_number,
            'product_features' => $product->features,
            'last_update' => $product->last_update,
            'share_date' => $product->share_date,
            'product_price' => $product->price,
            'bought' => $bought
        ]);
    }
    public function delete(Request $request)
    {
        $deleted_data = product::where('id', $request->id)->delete();

        if ($deleted_data) {
            return redirect()->back();
        } else {
            return redirect()->back()->with('fail', 'Ürün kaldırılamadı, lütfen daha sonra deneyin.');
        }
    }
    public function update_product(Request $request)
    {
        $updated_product = product::where('id', $request->id)->update([
            'name' => $request->name,
            'content' => $request->_content,
            'price' => $request->price
        ]);

        if ($updated_product) {
            return redirect()->back();
        } else {
            return redirect()->back()->with('fail', 'Ürün bilgileri güncellenemedi.');
        }
    }
    public function product_update(Request $request)
    {
        $request->validate([
            'features' => 'required|array',
            'file' => 'nullable|file|mimes:jpg,jpeg,png'
        ]);

        $features = $request->input('features');

        $imagePath = null;
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('images', 'public');
        }

        $updateData = [
            'features' => $features,
            'image_path' => $imagePath,
            'last_update' => now()
        ];

        if ($imagePath) {
            $updateData['image_path'] = $imagePath;
        }

        product::where('id', $request->id)->update($updateData);

        return redirect()->back()->with('success', 'Ürün başarıyla güncellendi!');
    }
    public function new_product()
    {
        return view('admin/new_product', [
            'page_name' => 'Yeni Ürün'
        ]);
    }
    public function add_product(Request $request)
    {
        $imagePath = null;
        if ($request->hasFile('file')) {
            $imagePath = $request->file('file')->store('images', 'public');
        }

        product::updateOrInsert([
            'name' => $request->input('name'),
            'content' => $request->input('_content'),
            'image_path' => $imagePath,
            'creator' => 'Admin',
            'sales_number' => 0,
            'features' => json_encode($request->input('features', [])),
            'price' => $request->input('price'),
            'active' => 1,
            'last_update' => now(),
            'share_date' => now(),
        ]);

        return redirect()->back()->with('success', 'Ürün başarıyla eklendi!');
    }
    public function product_show(Request $request)
    {
        $list = product::where('active', 1)->get();

        return view('admin/products', [
            'page_name' => 'Ürünler',
            'item' => $list
        ]);
    }
    public function product_control(Request $request)
    {
        $list = product::where('id', $request->id ?? '1')->first();

        if ($list == '') {
            $list = product::first('product');
        }

        return view('admin/product_control', [
            'page_name' => $list->name,
            'item' => $list
        ]);
    }
}
