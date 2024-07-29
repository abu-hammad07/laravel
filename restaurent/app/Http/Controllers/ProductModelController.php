<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductModelController extends Controller
{
    //
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'overview' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);
        product::create($validateData);
        // return view('products.create');
        return response()->json([
            'message' => 'Product added successfully',
        ]);
    }

    public function show($id)
    {
        $product = product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        $product = product::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'overview' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);
        $product = product::findOrFail($id);
        $product->update($validateData);
        return redirect()->route('products.index');
    }

    public function destroy($id)
    {
        $product = product::findOrFail($id);
        $product->delete();
        return redirect()->route('products.index');
    }


}
