<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\back;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\Expense;
use Illuminate\Support\Facades\URL;

class ExpenseController extends Controller
{
    public function index()
    {
        $expenses = Expense::all();

        return view('back.expenses.index', compact('expenses'));
    }

    public function create()
    {
        return view('back.expenses.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        Expense::create($validatedData);

        return redirect()->route('expense.index')->with('success', 'Expense created successfully.');
    }

    public function edit($id)
    {
        $expense = Expense::findOrFail($id);   
        return view('back.expenses.edit', compact('expense'));
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'description' => 'required',
            'amount' => 'required|numeric',
            'date' => 'required|date',
        ]);

        $expense = Expense::findOrFail($id);   
        $expense->amount = $request->amount;
        $expense->date = $request->date;
        $expense->description = $request->description;
        $expense->save();


        return redirect()->route('expense.index')->with('success', 'Expense updated successfully.');
    }

    public function destroy(Expense $expense)
    {
        $expense->delete();

        return redirect()->route('expense.index')->with('success', 'Expense deleted successfully.');
    }
}
