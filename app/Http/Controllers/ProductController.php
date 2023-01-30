<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct(){
        return view('addproducts');
    }

    public function product(Request $request){
        $products = new Product();
        $products->title = $request->title;
        $products->details = $request->details;
        $products->current_stock = $request->stock;
        $products->current_stock = $request->stock;
        $products->base_unit = $request->unit;
        $products->base_unit = $request->unit;
        $products->image = $request->image;
        $products->created_by = $request->created;
        $products->save();

        return $products;

        // return $products;
    }
}
