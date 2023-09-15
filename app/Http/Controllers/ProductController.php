<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function add(Request $request){
        $categroies = Category::all();
        return view('admin.add_product',compact('categroies'));
    }
    public function brand(Request $request){
        
        $id = $request->id;
        $brands= Brand::where('categroy_id',$id)->get();
        return response()->json(['brands'=>$brands]);

    }
    public function store(Request $request){
        
        $img = $request->img;
        $product_img = time().rand().$img->getClintOriginalName();
        $product_img->move('/product'.$product_img);


        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price ;
        $product->Availibility = $request->Availibility;
        $product->img = $product_img;

        dd($request->all());
    }
    
}
