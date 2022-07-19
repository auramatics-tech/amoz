<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;
use App\models\Product;

class ProductsController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:product-list|product-create|product-edit|product-delete', ['only' => ['index','show']]);
         $this->middleware('permission:product-create', ['only' => ['create','store']]);
         $this->middleware('permission:product-edit', ['only' => ['edit','update']]);
         $this->middleware('permission:product-delete', ['only' => ['destroy']]);
    }
    public function product_list()
    {
        
            $products= Product::where('status', 1)->orderBy('id', 'ASC')->get();
            return view('admin.products.product_list', compact('products'));
        }
    
    public function create_product()
    {
      
        $category= Category::where('status', 1)->orderBy('id', 'ASC')->get();
        $product= Product::where('status', 1)->orderBy('id', 'ASC')->get();
        return view('admin.products.create_product',compact('product','category'));
    }
    public function add_product_details(Request $request)
    {
        if (isset($request->id)) {
            $product = Product::Find($request->id);
        } else {
            $this->validate($request, [
                'pro_name' => ['required', 'string', 'max:255'],
            ]);
            $product = new Product();
        }
        $product->pro_name = $request->pro_name;
        $product->pro_price = $request->pro_price;
        $product->category = $request->category;
        $product->remarks = $request->remarks;
        // $categories->created_by =$request->created_by;
        // $categories->updated_by =$request->updated_by;
        $product->save();
        return redirect()->route('product_list')->with('success', 'Category detail added successfully!');
        
    }
    public function  edit_product($id)
    {
        
        $category= Category::where('status', 1)->orderBy('id', 'ASC')->get();
        $product = Product::Find($id);
        return view('admin.products.create_product', compact('product', 'category'));
    }
    public function  destroy_product_details($id)
    {
        $product = Product::where('id', $id)->delete();
        return redirect()->back();
    }
    public function create_category()
    {
        return view('admin.products.create_category');
    }
}
