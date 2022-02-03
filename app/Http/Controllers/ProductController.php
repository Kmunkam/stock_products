<?php

namespace App\Http\Controllers;

use App\Models\products;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = products::first()->pagination(5);

        return view('product.index', compact('data'))
            ->with('i', (request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'ProductID' => 'required',
            'ProductName' => 'required',
            'ProductPrice' => 'required',
            'Quantity' => 'required',
            'ProductTypeID' => 'required',
        ]);


        products::created($request->all());

        return redirect()->route('products.index')
                         ->with('success', 'Products create successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(products $products)
    {
        //
        return view('products.show', compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(products $products)
    {
        //
        return view('products.show', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, products $products)
    {
        //
        $request->validate([
            'ProductID' => 'required',
            'ProductName' => 'required',
            'ProductPrice' => 'required',
            'Quantity' => 'required',
            'ProductTypeID' => 'required',
        ]);

        $products->update();
        return redirect()->route('products.index')
                         ->with('success', 'Products update successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(products $products)
    {
        //
        $products->delete();
        return redirect()->route('products.index')
                         ->with('success', 'Products update successfully');
    }
}
