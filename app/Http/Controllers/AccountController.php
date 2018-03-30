<?php

namespace App\Http\Controllers;

use App\Account;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = 0;
        $payment = 0;
        $expense = 0;
        $accs = Account::all();
        foreach ($accs as $acc) {
            if($acc->type=="Payment")
            {
                $total=$total+$acc->amount;
                $payment=$payment+$acc->amount;
            }
            if($acc->type=="Expense")
            {
                $total=$total-$acc->amount;
                $expense=$expense-$acc->amount;
            }
        }
        return view('account/details')->with('accs',$accs)->with('total',$total)->with('payment',$payment)->with('expense',$expense);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_payment()
    {
        return view('account/payment');
    }

    public function create_expense()
    {
        return view('account/expense');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_payment(Request $request)
    {
        $acc = new Account;
        $acc->description = $request->description;
        $acc->type = "Payment";
        $acc->amount = $request->amount;
        $acc->date = $request->date;
        $acc->save();
        return view('dashboard');
    }

    public function store_expense(Request $request)
    {
        $acc = new Account;
        $acc->description = $request->description;
        $acc->type = "Expense";
        $acc->amount = $request->amount;
        $acc->date = $request->date;
        $acc->save();
        return view('dashboard');
    }

    public function delete($id)
    {
        $acc = Account::find($id);
        $acc->delete();
        $total = 0;
        $payment = 0;
        $expense = 0;
        $accs = Account::all();
        foreach ($accs as $acc) {
            if($acc->type=="Payment")
            {
                $total=$total+$acc->amount;
                $payment=$payment+$acc->amount;
            }
            if($acc->type=="Expense")
            {
                $total=$total-$acc->amount;
                $expense=$expense-$acc->amount;
            }
        }
        return view('account/details')->with('accs',$accs)->with('total',$total)->with('payment',$payment)->with('expense',$expense);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
