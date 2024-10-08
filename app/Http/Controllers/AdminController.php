<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

class AdminController{
    public function view_category(){
        $data=Category::all();
        return view('admin.category',compact('data'));
    }

    public function add_category(Request $request){
        $data=new category;
        $data->category_name = $request->category;
        $data->save();
        return redirect()->back()->with('message','Category Added Successfully');
    }

    public function delete_category($id){
        $data=category::find($id);
        $data->delete();
        return redirect()->back()->with('message','Category Deleted Successfully');
    }
    public function product(){
        $category=category::all();
        return view('admin.product' ,compact('category'));
    }

    public function add_product(Request $request){
        $product=new product;
        $product->title=$request->title;
        $product->description=$request->description;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->category=$request->category;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('productimage',$imagename);

        $product->image=$imagename;

        $product->save();
        return redirect()->back()->with('message','Product Added Successfully');
    }

    public function display_product(){

        $product=product::all();
        return view('admin.displayproduct',compact('product')) ;
    }

    public function delete_product($id){
        $product=product::find($id);
        $product->delete();
        return redirect()->back()->with('message','Product Deleted Successfully');
    }

    public function edit_product($id){
        $product=product::find($id);
        $category=category::all();
        return view('admin.editproduct',compact('product','category'));
    }

    public function edit_product_confirm(Request $request,$id){
        $product=product::find($id);
        $product->title=$request->title;
        $product->description=$request->description;
        $product->quantity=$request->quantity;
        $product->price=$request->price;
        $product->discount_price=$request->discount_price;
        $product->category=$request->category;

        $image=$request->image;
        if ($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
            $request->image->move('productimage',$imagename);
            $product->image=$imagename;
        }


        $product->save();

        return redirect()->back()->with('message','Product Updated Successfully');

    }
}
