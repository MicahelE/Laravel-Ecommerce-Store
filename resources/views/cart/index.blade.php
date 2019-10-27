@extends('layout.main')


@section('content')
<div class="breadcrumb parallax-container">
     <div class="parallax"><img src="image/prlx.jpg" alt="#"></div>
     <h1>Shopping Cart</h1>
     <ul>
       <li><a href="index.html">Home</a></li>
       <li><a href="cart.html">Shopping Cart</a></li>
     </ul>
   </div>
   <div class="container">
     <div class="row">
       <div id="column-left" class="col-sm-3 hidden-xs column-left">
         <div class="Categories left-sidebar-widget">
           <div class="columnblock-title">Top Categories</div>
           <div class="category_block">
             <ul class="box-category treeview-list treeview">
               <li><a href="#" class="activSub">Desktops</a>
                 <ul>
                   <li><a href="#">PC</a></li>
                   <li><a href="#">MAC</a></li>
                 </ul>
               </li>
               <li><a href="#" class="activSub">Laptops &amp; Notebooks</a>
                 <ul>
                   <li><a href="#">Macs</a></li>
                   <li><a href="#">Windows</a></li>
                 </ul>
               </li>
               <li><a href="#" class="activSub">Components</a>
                 <ul>
                   <li><a href="#">Mice and Trackballs</a></li>
                   <li><a href="#" class="activSub" >Monitors</a>
                     <ul>
                       <li><a href="#"  >test 1</a></li>
                       <li><a href="#"  >test 2</a></li>
                     </ul>
                   </li>
                   <li><a href="#">Windows</a></li>
                 </ul>
               </li>
               <li><a href="#">Tablets</a></li>
               <li><a href="#">Software</a></li>
               <li><a href="#">Phones & PDAs</a></li>
               <li><a href="#">Cameras</a></li>
               <li><a href="#">MP3 Players</a></li>
             </ul>
           </div>
         </div>
         <div class="special left-sidebar-widget">
           <div class="columnblock-title">Special Product</div>
           <ul class="row ">
             <li class="product-layout">
               <div class="product-list col-xs-4">
                 <div class="product-thumb">
                   <div class="image product-imageblock"> <a href="product.html">
                   <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-01.jpg">
                   <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-01-1.jpg">
                   </a> </div>
                 </div>
               </div>
               <div class="col-xs-8">
                 <div class="caption product-detail">
                   <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle Hem</a></h4>
                   <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> </p>
                   <div class="addto-cart"><a href="#">Add to Cart</a></div>
                 </div>
               </div>
             </li>
             <li class="product-layout">
               <div class="product-list col-xs-4">
                 <div class="product-thumb">
                   <div class="image product-imageblock"> <a href="product.html">
                   <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-03.jpg">
                   <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-03-1.jpg">
                   </a> </div>
                 </div>
               </div>
               <div class="col-xs-8">
                 <div class="caption product-detail">
                   <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle Hem</a></h4>
                   <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> </p>
                   <div class="addto-cart"><a href="#">Add to Cart</a></div>
                 </div>
               </div>
             </li>
             <li class="product-layout">
               <div class="product-list col-xs-4">
                 <div class="product-thumb">
                   <div class="image product-imageblock"> <a href="product.html">
                   <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-05.jpg">
                   <img class="img-responsive" title="iPod Classic" alt="iPod Classic" src="image/product/Pro-05-1.jpg">
                   </a> </div>
                 </div>
               </div>
               <div class="col-xs-8">
                 <div class="caption product-detail">
                   <h4 class="product-name"><a title="Casual Shirt With Ruffle Hem" href="#">Casual Shirt With Ruffle Hem</a></h4>
                   <p class="price product-price"> <span class="price-new">$254.00</span> <span class="price-old">$272.00</span> </p>
                   <div class="addto-cart"><a href="#">Add to Cart</a></div>
                 </div>
               </div>
             </li>
           </ul>
         </div>
       </div>
       <div class="col-sm-9" id="content">
               <h3> Cart Item </h3>

               <table class="table table-hover">
                 <thead>
                 <tr>
                    <th>Image</th>
                    <th>Name</th>
                     <th>Price</th>
                     <th>Qty</th>
                     <th>Size</th>
                     <th></th>
                </tr> </thead>
                 <tbody>
                  @foreach($cartItems as $cartItem )
                  @php $product=$products->find($cartItem->id)
                  
                   @endphp
                 <tr>
                    <td>
                      
                          <div class="image-additional"><a class="thumbnail fancybox" href="{{url('images',$product->image)}}" title="iPod Classic"> <img src="{{url('images',$product->image)}}" title="iPod Classic" alt="iPod Classic" /></a></div>
                        
                    </td>
                    <td>{{$cartItem->name}}</td>
                     <td>{{$cartItem->price}}</td>
                     <td width="50px">
                     {!!Form::open(['route'=> ['cart.update',$cartItem->rowId], 'method' =>'put'])!!}
                     <input name="qty" type="text" value="{{$cartItem->qty}}">
                     
                     </td>
                     <td>
                     {{-- {{$cartItem->options->has('size')?$cartItem->options->size:''}} --}}
                     <div>{{Form::select('size', ['small' => 'Small', 'medium' => 'Medium', 'large' => 'Large'],$cartItem->options->has('size')?$cartItem->options->size:'') }}</div>
                     
                     </td>
                <td>
           <input style="float:left" class="button success small" type="submit" value="Ok">
           {!! Form::close() !!}
           
                <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST">
               {{csrf_field()}}
               {{method_field('DELETE')}}
               <input class="button small alert" type="submit" value="Delete">
                </form>
                </td>
                </tr>
                @endforeach
           <tr>
                    <td></td>
                     <td>Grand Total {{Cart::subtotal()}}</td>
                     <td>Items {{Cart::count()}}</td>
                     <td></td>
                     <td></td>
                </tr>
                      </tbody>
               </table>
           <a href="{{url('/order')}}" class="button">Checkout</a>
        
           
       
        
         <div class="row">
           <div class="col-sm-4 col-sm-offset-8">
             <table class="table table-bordered">
               <tbody>
                 
                 <tr>
                   <td class="text-right"><strong>Total:</strong></td>
                   <td class="text-right">{{Cart::subtotal()}}</td>
                 </tr>
               </tbody>
             </table>
           </div>
         </div>
         <div class="buttons">
           <div class="pull-left"><a class="btn btn-default" href="{{url('/')}}">Continue Shopping</a></div>
           <div class="pull-right"><a class="btn btn-primary" href="{{url('/order')}}">Checkout</a></div>
         </div>
       </div>
     </div>
   </div>
   
   <div class="container">
     <h3 class="client-title">Favourite Brands</h3>
     <h4 class="title-subline">The High Quality Products</h4>
     <div id="brand_carouse" class="owl-carousel brand-logo">
       <div class="item text-center"> <a href="#"><img src="image/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
       <div class="item text-center"> <a href="#"><img src="image/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
       <div class="item text-center"> <a href="#"><img src="image/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
       <div class="item text-center"> <a href="#"><img src="image/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
       <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
       <div class="item text-center"> <a href="#"><img src="image/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
       <div class="item text-center"> <a href="#"><img src="image/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
       <div class="item text-center"> <a href="#"><img src="image/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
       <div class="item text-center"> <a href="#"><img src="image/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
       <div class="item text-center"> <a href="#"><img src="image/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
     </div>
   </div>
   
   <script src="javascript/jquery.parallax.js"></script> 
<script>
    jQuery(document).ready(function ($) {
        $('.parallax').parallax();
    });
</script>
 @yield('footer')
    @endsection