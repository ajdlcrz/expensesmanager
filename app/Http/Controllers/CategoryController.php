<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index(){

        $category = Category::all();

        return view('expensesmanagement.expensecategory')->with('category', $category);
    }

    public function store(Request $request)
    {   
        $category = new category();

        $category->category_name = $request->categoryName;
        $category->category_desc = $request->categoryDesc;
        
        $category->save();
        
        return redirect('/expensescategories');
    }        

    public function edit($id){

        $category = Category::find($id);

        return view('modals.editcategory')->with('category', $category);
    }
    public function update($id, Request $request)
    {   
        $category = Category::find($id);

        $category->category_name = $request->categoryName;
        $category->category_desc = $request->categoryDesc;
        
        $category->save();
        
        return redirect('/expensescategories');
    }        
    public function destroy($id){
        $category = Category::find($id);
        $category->delete();

        return redirect('/expensescategories');
}
}
