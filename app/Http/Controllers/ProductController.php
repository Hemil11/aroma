<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Error;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Throwable;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request){
        $categroies = Category::all();
        return view('product.create',compact('categroies'));
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $img = $request->img;
        $product_img = time().rand(100000,999999).$img->getClientOriginalName();
        $img->move('/public/admin/p_img/'.$product_img);
        dd(111);
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price ;
        $product->Availibility = $request->Availibility;
        $product->img = $product_img;
        $product->category_id= $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->about = $request->about;
        $product->user_id = $request->user_id;
        $product->save();

        // dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Auth::user()->id;
        $products = Product::where('user_id' ,$id)->get();
        return view('product.list',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    
    
    public function brand(Request $request){
        
        $id = $request->id;
        $brands= Brand::where('categroy_id',$id)->get();
        return response()->json(['brands'=>$brands]);

    }

}
