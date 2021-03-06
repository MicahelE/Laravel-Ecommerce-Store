<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $products=Product::all();
        $shirts=Product::all();
        $cartItems=Cart::content();
        return view('cart.index',compact('cartItems','shirts','products')); 
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
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    public function addItems($id)
    {
        $product=Product::find($id);
        Cart::add($id,$product->name,1,$product->price,0,['size'=>'medium']);
        $products=Product::all();
        $shirts=Product::all();
        $cartItems=Cart::content();
        $view = view('front.ajaxView',compact('cartItems','shirts','products'))->render(); 
        return response()->json(['html'=>$view]);
        // $NewCart = [];
        // array_push($NewCart, $id, $product->name,1,$product->price,0,'medium' );

        // return $NewCart;
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
        Cart::update($id,['qty'=>$request->qty,"options"=>['size'=>$request->size]]);
        $products=Product::all();
        $shirts=Product::all();
        $cartItems=Cart::content();
        $view = view('front.ajaxView',compact('cartItems','shirts','products'))->render(); 
        $view2 = view('front.cartPage',compact('cartItems','shirts','products'))->render();
        return response()->json(['html'=>$view, 'cart'=>$view2]);
        // return back();
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
        Cart::remove($id);
        $products=Product::all();
        $shirts=Product::all();
        $cartItems=Cart::content();
        $view = view('front.ajaxView',compact('cartItems','shirts','products'))->render(); 
        $view2 = view('front.cartPage',compact('cartItems','shirts','products'))->render();
        return response()->json(['html'=>$view, 'cart'=>$view2]);
        // return back();
    }
}
