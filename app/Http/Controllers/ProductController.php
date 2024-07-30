<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($store_id)
    {
        $products = Product::where('store_id', $store_id)
            ->orderBy('id', 'desc')
            ->paginate(5);

        return view('painel.products.index', compact('products'));
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
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $products = Product::limit(5)->get();
        $product = Product::with('store')->findOrFail($id);

        return view('products.show', compact('products', 'product'));
    }
}
