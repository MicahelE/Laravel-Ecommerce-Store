<?php

namespace App\Http\Controllers;
use App\Product;
use App\Category;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    //
    public function index() {
        //$shirts=Category::find(3)->products;
        $shirts=Product::all(); 
        $cartItems=Cart::content();
        return view('front.home',compact('shirts','cartItems'));
    }
    public function category($id) {
        $products=Category::find($id)->products;
        $shirts=Product::all(); 
        $cartItems=Cart::content();
        return view('front.category',compact('products','shirts','cartItems'));
    }
    public function shirts() {
        $shirts=Product::all(); 
        return view('front.shirts',compact('shirts'));
    }
    public function shirt($id) {
        $products=Product::all();
        $shirts=Product::all(); 
        $shirt=Product::find($id);
        $cartItems=Cart::content();
        return view('front.shirt',compact('shirt','shirts','cartItems','products'));
    }
    public function search(Request $request) {
       $search=$request->get('search');
       $posts=Product::where('name', 'like','%'.$search.'%')->get();
       $products=Product::all();
       $shirts=Product::all();
        $cartItems=Cart::content();
        return view('front.search',compact('shirts','products','posts','cartItems'));
    }
    public function productOrder(Request $request, $id) {
        $search=$request->get('input-sort');
        // $products=Category::find($id)->products;
        $products= Product::where('category_id', '=', $id)->orderByRaw('ABS(price)'.$search)->get();
        // $products=$products->orderBy('name', $search)->get();
        $shirts=Product::all();
         $cartItems=Cart::content();
         return view('front.search',compact('shirts','products','cartItems'));
     }
    public function payform() {
        return view('front.payform');
    }
}
