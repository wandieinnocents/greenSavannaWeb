<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // using a constructor exclude middleware from route


    public function __construct()
    {

        $this->middleware('auth')->except('create','store');
  
    }

    public function index()
    {
        $all_orders = Order::all();
        return view('back_end.pages_backend.orders_backend.view_orders',compact('all_orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('front_end.pages_frontend.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->fullname      = $request->fullname;
        $order->location      = $request->location;
        $order->email         = $request->email;
        $order->phone         = $request->phone;
        $order->description   = $request->description ;

        // save
        $order->save();
        // redirect
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        $order = Order::findOrFail($id);
        $order->delete();

        // redirect
        return redirect('/orders');
    }
}
