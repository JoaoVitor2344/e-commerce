<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Store;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($store_id)
    {
        $store = Store::findOrFail($store_id);
        $products = $store->products->get();

        return view('painel.products.index', compact('store', 'products', 'store'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create($store_id)
    {
        $store = Store::findOrFail($store_id);

        return view('painel.products.create', compact('store'));
    }

    /**
     * stores a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required',
            'quantity' => 'required|numeric',
            'store_id' => 'required|numeric',
            'about' => 'required|string',
        ]);

        $validated['price'] = str_replace(['R$', ' '], '', $validated['price']);
        $validated['price'] = str_replace(',', '.', $validated['price']);

        Product::create($validated);

        return redirect()->route('painel.products.index', $validated['store_id']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        $products = Product::limit(5)->get();

        return view('products.show', compact('product', 'products'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit($store_id, $id)
    {
        $product = Product::findOrFail($id);

        return view('painel.products.edit', compact('product', 'store_id'));
    }

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, $store_id, $id)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'about' => 'required|string',
        ]);

        $product = Product::findOrFail($id);

        $product->update($validated);

        return redirect()->route('painel.products.index', $store_id);
    }
}
