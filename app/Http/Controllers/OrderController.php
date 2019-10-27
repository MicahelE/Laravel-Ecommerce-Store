<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Product;
use App\Userinfo;
use Gloudemans\Shoppingcart\Facades\Cart;
use Auth;
class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { if (Auth::check()){
        $cartItems=Cart::content();
        $shirts=Product::all();
        $user=Auth::user();
        return view('front.order',compact('cartItems','shirts', 'user')); 
        // return view('front.order');
    }
    return redirect('login');
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
        // Order::create($request->all());

        //former way
        // $cartItems=Cart::content();
        // $formInput=$request->all();
        // $formInput['total']=intval(Cart::subtotal(2,'.',''));
        // $formInput['items']=Cart::count();
        // Order::create($formInput);
        // return redirect('/payform');
        //***** */
        // $orderInput=null;
        $orderInput['delivery']=$request->delivery;
        $orderInput['payment']=$request->payment;
        $orderInput['method']=$request->method;
        $orderInput['address']=$request->address;
        // $orderInput=$request->only('delivery','payment','method');
        $formInput['user_id']= Auth::user()->id;
        $formInput['phone']= $request->phone;
        $formInput['address']=$request->address;
        $formInput['DOB']=$request->DOB;
        $formInput['city']=$request->city;
        $formInput['state']=$request->state;
        // $formInput$request->except('_token','delivery','payment','method');
        UserInfo::updateOrCreate($formInput);
        
        $orderInput['name']=Auth::user()->name;
        $orderInput['email']=Auth::user()->email;
        $orderInput['total']=intval(Cart::subtotal(2,'.',''));
        $orderInput['items']=Cart::count();
        $orderInput['user_id']=Auth::user()->id;
        Order::create($orderInput);
       
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
