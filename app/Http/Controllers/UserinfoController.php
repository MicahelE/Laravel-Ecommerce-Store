<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Order;
use App\Wishlist;
use Auth;
use App\Product;
class UserinfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cartItems=Cart::content();
        $user=Auth::user();
        // $wishlist=Wishlist::where('user_id', $user->id);
        $productsid=Wishlist::where('user_id', $user->id)->pluck('product_id');
        $products=Product::find($productsid);
        return view('front.info',compact('cartItems', 'user', 'products'));
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $orderInput['delivery']=$request->delivery;
        $orderInput['payment']=$request->payment;
        $orderInput['method']=$request->method;
        // $orderInput=$request->only('delivery','payment','method');
        $formInput=$request->except('delivery','payment','method');
        Auth::user()->userInfo()->create($formInput);
        $orderInput['total']=intval(Cart::subtotal(2,'.',''));
        $orderInput['items']=Cart::count();
        $orderInput['name']=Auth::user()->name;
        $orderInput['email']=Auth::user()->email;
        return redirect('/payform');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
