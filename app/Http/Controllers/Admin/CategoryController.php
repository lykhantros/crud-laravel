<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    public function index(){
        //retornar una lista de registros de la table category
        $categories = Category::all(["id","name"]);
        return view('admin.category.index',compact("categories"));        
    }
    public function create(){        
        return view('admin.category.create');
    }

    public function store(Request $request){
        $validate = $request->validate([
            'name' => ['required','unique:categories', 'max:25']
        ]);
        $category = new Category();
        $category->slug = Str::slug($request->name);
        $category->name = $request->name;
        $category->save();
        return redirect('admin/category')->with('success','Category insert ok');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('admin.category.edit',compact("category"));
    }

    public function update(Request $request,$id){
        
        $validate = $request->validate([
            'name' => ['required','unique:categories', 'max:25']
        ]);

        $category = Category::findOrFail($id);        
        $category->fill($request->all());
        $category->slug = Str::slug($request->name);        
        $category->save();

        return redirect('admin/category')->with('success','Category update ok');

    }

    public function destroy($id){
        $category = Category::findOrFail($id); 
        $category->delete();
        return redirect('admin/category')->with('success','Category Delete ok');
    }

}
