<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Http\Requests\StoreProduct;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('layouts.list-products', compact('products', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
            $categories=Category::all();
            return view('layouts.create-products', compact('categories'));
    }

    public function listProduct($id)
    {
        $categories = Category::all();
        // $categories = Category::with('products')->find($id);
        $products = Product::where('categories_id', $id)->get();
        return view('layouts.list-products', compact('products', 'categories'));
        dd($categories->toArray());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate(
            [
                'name'=>'required|unique:products',
                'price'=>'required',
                'description'=>'required',
                'category'=>'required'
    
            ]
            );

        // dd($request->all());
        $product = new Product();
        $product->name = request('name');
        $product->price = request('price');
        $product->description = request('description');
        $product->categories_id = request('category_id');
        if($product->save()){
            return redirect('/');
        }  
        // dd(request('category_id'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //  $products = Product::where('categories_id', $id)->get();
        $categories = Category::all();
        $products = Product::find($id);
         return view('layouts.edit-products', compact('products','categories'));
        dd($products->toArray());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories = Category::all();
        $products = Product::find($id);
        $products->name = request('name');
        $products->price = request('price');
        $products->description = request('description');
        $products->categories_id = request('categories_id');
       if($products->update()){
            return redirect('/');
       }
        // return view('layouts.list-products', compact('products', 'categories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $product=Product::find($id);
        $product->delete();
        return redirect('/');
    }
}
