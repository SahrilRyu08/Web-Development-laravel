<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        if (Product::count() == 0) {

            for ($i = 1; $i <= 20; $i++) {

                Product::create([
                    'name' => "Product $i",
                    'description' => "Description Product $i",
                    'price' => rand(10000, 50000),
                ]);
            }
        }

        $products = Product::all();

        return view('products.list', compact('products'));
    }

    public function create()
    {
        return view('products.form');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);

        return view('products.form', compact('product'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);

        return view('products.show', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
        ]);

        Product::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('products');
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->update([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
        ]);

        return redirect()->route('products');
    }
}
