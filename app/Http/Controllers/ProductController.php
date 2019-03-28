<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Http\Requests\StoreProductsRequest;
use Illuminate\Http\Response;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::all();
        return view('Views/products', compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('FormViews/newProducts');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductsRequest $request)
    { 
        $path = $request->file('image')->store('images', 'public');   
        $items = Product::create($request->all());
        return redirect('/products')->with('success', "Product Create");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        if (isset($product)) {
            return view('FormViews/editProducts', compact('product'));
        }
        return redirect('/products');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreProductsRequest $request, $id)
    {
        $product = Product::find($id);
        if (isset($product)) {
            $path = $request->file('image')->store('images', 'public');
            $product->title = $request->input('title');
            $product->description = $request->input('description');
            $product->price = $request->input('price');
            $product->image = $path;
            $product->save();
        }
        return redirect('/products')->with('warning', "{$product->title} - was Modified");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if (isset($product)) {
            $image = $product->image;
            Storage::disk('public')->delete($image);
            $product->delete();
            return redirect('/products')->with('success', "{$product->title} - was Deleted");
        }
        return response("Product not found", 404);
    } 
}