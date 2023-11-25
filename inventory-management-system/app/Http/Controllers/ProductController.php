<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product(){
        return view('admin.product.add-product');

    }

    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
        $product->save();
        // return back()->with('notification' , 'product added successfully');
        return redirect()->route('product.manage')->with('notification', 'Product added successfully');
    }

    public function index(){
        $products = Product::latest()->get();
        return view('admin.product.manage-product', compact('products'));
    }

    public function edit($id){
        $product = Product::find($id);
        return view('admin.product.edit-product' , compact('product'));
    }

    public function update(Request $request, $id){
        $product = Product::find($id);
        $product->name = $request->name;
        $product->quantity = $request->quantity;
        $product->price = $request->price;
       
        $product->save();
        return back()->with('notification', 'Product has been Updated');
    }

    public function delete($id){
        $product = Product::find($id);
        
        $product->delete();
        return back()->with('notification', 'Product has been deleted');
    }
}
