<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('products.MainPage', ['products'=> $products]);
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'detail' => 'required',
            'publish' => 'required'
        ]);

        $newData = Product::create($data);
        return redirect(route('products.MainPage'));
    }

    public function edit(Product $product){
        return view('products.edit', ['product' => $product]);
    }

    public function view(Product $product){
        return view('products.view', ['product' => $product]);
    }


    public function update(Product $product, Request $request){
        $data = $request->validate([
            'name' => 'required',
            'price' => 'required|decimal:0,2',
            'detail' => 'required',
            'publish' => 'required'
        ]);

        $product->update($data);

        return redirect(route('products.MainPage'));
    }

    public function delete(Product $product){
        $product->delete();
        return redirect(route('products.MainPage'));
    }


    public function search(Request $request){

        $search = $request->search;

        $products = Product::where(function($query) use ($search) {
            $query->whereRaw("BINARY id LIKE '%$search%'")
                ->orWhereRaw("BINARY name LIKE '%$search%'")
                ->orWhereRaw("BINARY detail LIKE '%$search%'")
                ->orWhereRaw("BINARY publish LIKE '%$search%'");
})
        ->orWhereRaw("BINARY price LIKE '%$search%'")
        ->get();
        return view('products.MainPage', ['products'=> $products]);
    }

}
