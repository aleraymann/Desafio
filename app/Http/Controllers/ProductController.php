<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Product;
use App\Http\Requests\StoreProductsRequest;
use Illuminate\Http\Response;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('products/products', compact(['products']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products/new-products');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRepository $repository, StoreProductsRequest $request)
    {
      $data = $request->all();
      $data['image'] = $request->file('image')->store('images','public');
      $product = $repository->create($data);
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
        $product = Product::find($id);
        if (isset($product)) {
            return view('products/edit-products', compact('product'));
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
    public function update(ProductRepository $repository, StoreProductsRequest $request, $id)
    {
        $product = Product::find($id);
        if (isset($product)) {
            $data = $request->all();
            $data['image'] = $request->file('image')->store('images','public');
            $product = $repository->update($data,$id);
        }
        return redirect('/products')->with('warning', "Product Modified");
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

    public function search(Request $request, Product $product){
        $dataForm = $request->all();
        $products = $product->search($dataForm);
        return view('products/products', compact(['products']));
    }
}