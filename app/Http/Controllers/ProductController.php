<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view("products.index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("products.create", ["page_title" => "Create Page"]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer'
        ]);

        Product::create($request->all());

        return redirect()->route("index");
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $productItem = Product::find($id);
        $page_title = "Show | Page";

        return view("products.show", ["page_title" => $page_title, "productItem" => $productItem]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $productItem = Product::find($id);

        return view("products.edit", ["productItem" => $productItem]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $productItem = Product::find($id);

        $productItem->update($request->all());

        return redirect()->route("index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $product = Product::find($id);

        $product->delete();
        return redirect()->route("index");
    }
}
