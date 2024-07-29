<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function getProductView()
    {
        // $products = DB::table('product')->get();
        // $products = DB::table("product")->select('title', 'price', 'description')->get();
        // $products = DB::table("product")->where('price',999.00)->orWhere('id',2)->get();
        // $products = DB::table("product")->whereIn('id',[2,1])->get();
        // $products = DB::table('product')->orderBy('id','desc')->get();
        $products = DB::table('products')->limit(20)->get();

        if(!$products){
            abort(404, 'Product Not Found');
        }


        // return response()->json($products);
        // return view('Product', compact('products'));
        return view('admin/ProductDetails', compact('products'));
    }


    public function store(Request $request)
    {

        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'overview' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        DB::table('products')->insert([
            'title' => $validateData['title'],
            'description' => $validateData['description'],
            'overview' => $validateData['overview'],
            'price' => $validateData['price'],
            'created_at' => now(),
        ]);

        return response()->json([
            'message' => 'Product added successfully',
        ], 201);


        // return view('addProduct');

    }


    public function singal($id){

        $product = DB::table('products')->where('id', $id)->first();

        if(!$product){
            abort(404, 'Product Not Found');
        }

        return view('admin/singalProduct', compact('product'));
    }


    public function edit($id){

        $product = DB::table('products')->where('id', $id)->first();

        if(!$product){
            abort(404, 'Product Not Found');
        }

        return view('admin/editProduct', compact('product'));
    }


    public function update(Request $request, $id){

        $validateData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'overview' => 'required|string',
            'price' => 'required|numeric|min:0',
        ]);

        DB::table('products')->where('id',$id)->update([
            'title'=> $validateData['title'],
            'description'=> $validateData['description'],
            'overview'=> $validateData['overview'],
            'price'=> $validateData['price'],
            'updated_at' => now(),
        ]);

        return response()->json([
            'message'=> 'Product Update Successfully',
        ], 201);
    }


    public function destroy($id){

        DB::table('products')->where('id', $id)->delete();

        return redirect()->route('view-product');

        // return response()->json([
        //     'message'=> 'Product Deleted Successfully',
        // ], 201);

    }



}
