<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
     public function index()
     {
         $customers = DB::table('payments')
            ->select('customerNumber', DB::raw('SUM(amount) as TotalSpent'))
            ->groupBy('customerNumber')
            ->orderBy('TotalSpent', 'desc')
            ->limit(1)
            ->get();

        $number = $customers->first()->customerNumber;
        $name = DB::table('customers')
          ->select('customerName')
          ->where('customerNumber', $number)
          ->get()->first()->customerName;
        $amount = $customers->first()->TotalSpent;
         return view('payments.index', ['number' => $number, 'amount' => $amount, 'name' => $name]);
     }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Payment $payment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Payment $payment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Payment $payment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Payment $payment)
    {
        //
    }
}
