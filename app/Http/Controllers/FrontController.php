<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        $categories= Category::all(['slug','name']);
        return view('welcome',compact("categories"));
    }
    public function category(Category $category){
        return view('front.category',compact("category"));
    }
    public function product(Category $category, Product $product){
        return view('front.product',compact("category","product"));
    }   

}
