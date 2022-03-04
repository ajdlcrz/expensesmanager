<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Expense;
use App\Models\Category;

class ExpenseController extends Controller
{
    public function index(){

        $expense = Expense::all();
        $category = Category::all();
        
        return view('expensesmanagement.expenses', ['expense'=>$expense, 'category'=>$category]);
    }

    public function store(Request $request)
    {   
        $expense = new expense();

        $expense->expense_category = $request->expenseCategory;
        $expense->expense_amount = $request->expenseAmount;
        $expense->expense_date = $request->expenseDate;

        $expense->save();
        
        return redirect('/expenses');
    }        

    public function edit($id)
    {
        $expense = Expense::find($id);
        $category = Category::all();
        
        return view('modals.editexpense', ['expense'=>$expense, 'category'=>$category]);
    }
    public function update($id, Request $request)
    {   
        $expense = Expense::find($id);


        $expense->expense_category = $request->expenseCategory;
        $expense->expense_amount = $request->expenseAmount;
        $expense->expense_date = $request->expenseDate;

        $expense->save();
        
        return redirect('/expenses');
    }      

    public function destroy($id){
        $users = Expense::find($id);
        $users->delete();

        return redirect('/expenses');
}
}
