<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;
use App\Models\Expense;


class DashboardController extends Controller
{
    public function index(){

        $category = Category::all();
        $expense = Expense::all();

        return view('welcome', ['category'=>$category, 'expense'=>$expense]);
    }
}
