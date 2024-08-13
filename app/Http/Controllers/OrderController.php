<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = DB::table('orders')
          ->select('customerNumber', DB::raw('COUNT(orderNumber) as NOOrders'))
          ->groupBy('customerNumber')
          ->orderBy('NOOrders', 'desc')
          ->limit(1)
          ->get();
       $number = $orders->first()->customerNumber;
       $name = DB::table('customers')
         ->select('customerName')
         ->where('customerNumber', $number)
         ->get()->first()->customerName;
      $noorders = $orders->first()->NOOrders;

      return view('orders.index', ['number' => $number, 'name' => $name, 'noorders' => $noorders]);
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
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
