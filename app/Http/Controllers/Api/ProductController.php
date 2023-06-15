<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\Product\StoreRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends BaseApiController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::get();

        if ($products) {
            return $this->handleSuccess($products, 'Success');
        }

        return $this->handleFailure(null, 'Something went wrong');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRequest $request)
    {
        $product = Product::create($request->all());

        if ($product) {
            return $this->handleSuccess($product, 'Success');
        }

        $this->handleFailure($product, 'Product has been created');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return $this->handleSuccess(null, 'Success');
    }
}
