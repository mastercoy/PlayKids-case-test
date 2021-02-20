<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller {

    public function index() {
        return Product::with(['categories' => function ($query) {
            $query->select('id', 'name');
        }])
                      ->get();
    }

    public function show(Product $product) {
        $product->load('categories:id,name');

        return $product;
    }

    public function createProduct(Request $request) {
        // return 'teste';



        $product              = new Product;
        $product->name        = $request['name'];
        $product->slug        = $request['slug'];
        $product->description = $request['description'];
        $product->price       = $request['price'];


        if ($request->file()) {

            $request->validate([
                                   'image' => 'required|mimes:jpg,jpeg,png,csv,txt,xlx,xls,pdf|max:2048'
                               ]);


            $file_name = time() . '_' . $request->file->getClientOriginalName();
            $file_path = $request->file('file')->storeAs('uploads', $file_name, 'public');

            $product->image = time() . '_' . $request->file->getClientOriginalName();
            $product->path  = '/storage/' . $file_path;


        }
        $product->save();
        return $product;
    }

}
