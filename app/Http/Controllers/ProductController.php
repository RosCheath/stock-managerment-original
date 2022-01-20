<?php

namespace App\Http\Controllers;

use App\Models\ProductStock;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {

        $products = Product::get();
        return view('products.index',compact('products'));
    }

    public function create()
    {
        $product_stocks = ProductStock::get();
        $categories = Category::get();
        return view('products.create',[
        '$product_stocks' => $product_stocks,
            'categories' => $categories,
            ]);
    }
    public function store(Request $request)
    {
        $product = new Product();
        $product -> user_id = Auth::id();
        $product -> name = $request->name;
        $product -> category_id = $request->category_id;
        $product -> unit_price = $request->unit_price;
        $product -> selling_price = $request->selling_price;
        $product->location = $request->location;
        $product -> year = $request->year;

        if($request->hasFile('photo')){
            $photo = $request->photo;
            $name = date('YmdHis') . "." . $photo->getClientOriginalExtension();
            $photo->storeAs('public/product_image',$name);
            $product->photo = $photo;

        }
        $product->save();
        $product_stocks = new ProductStock();
        $product_stocks->product_id = $product->id;
        $product_stocks->quantity = $request->quantity;
        $product_stocks->save();

        $product->stock_id = $product_stocks->id;
        $product->save();
        Toastr::success('Successfully', 'Create', ["positionClass" => "toast-top-right"]);
        return redirect(route('products.index'));
    }


    public function show(Product $product)
    {
        return view('product.show',
        [
            'product' => $product
        ]);
    }
    public function edit(Product $product)
    {
        $categories = Category::get();
        $product_stocks = ProductStock::get();
        return view('products.edit',
        [
            'product' => $product,
            'categories' => $categories,
            'product_stocks' => $product_stocks
        ]);
    }
    public function update(Request $request ,Product $product)
    {
        $product->update($request->all());
        Toastr::success('Successfully', 'Update', ["positionClass" => "toast-top-right"]);
        return redirect(route('products.index'));
    }

    public function destroy(Product $product)
    {
        $product->delete();
        Toastr::error('Successfully', 'Delete', ["positionClass" => "toast-top-right"]);
        return redirect(route('products.index'));
    }
}
