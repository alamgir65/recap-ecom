<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    public $categories;
    public function index(){
        $this->categories = Category::all();
        return view('admin.category.index',['categories' => $this->categories]);
    }
    public function addCategory(){
        return view('admin.category.add_category');
    }
    public function addCategoryToTable(Request $request){
//        return $request;
        $category = new Category();
        $category->category_name = $request->category_name;
        $category->save();
        return redirect()->back()->with('message','Category added successfully.');
    }
}
