<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Category;


class CategoriesController extends Controller
{
    
    public function create_category()
    {
      
        $categories  = Category::where('status', 1)->orderBy('id', 'ASC')->get();
       
        return view('admin.categories.create_category', compact('categories'));
    }
    public function category_list(){
        $categories  = Category::where('status', 1)->orderBy('id', 'ASC')->get();
        
            return view('admin.categories.category_list',compact('categories'));
        }
    
    public function add_category_details(Request $request)
    {
        // echo Auth::id();die;
        if (isset($request->id)) {
            $categories = Category::Find($request->id);
        } else {
            $this->validate($request, [
                'cat_name' => ['required', 'string', 'max:255'],
            ]);
            $categories = new Category();
        }
        $categories->cat_name = $request->cat_name;
        // $categories->created_by =$request->created_by;
        // $categories->updated_by =$request->updated_by;
        $categories->save();
        return redirect()->route('admin.category_list')->with('success', 'Category detail added successfully!');
    }
    public function  edit_category($id)
    {
        $categories = Category::Find($id);
       
        return view('admin.categories.create_category', compact('categories'));
    }
    public function  destroy_category($id)
    {
        $categories =  Category::where('id', $id)->delete();
        return redirect()->back();
    }
}
