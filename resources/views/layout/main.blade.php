<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta http-equiv="x-ua-compatible" content="ie=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <title>
            @yield('title','TotalItNigeria')
        </title>
       
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}"/>
        <link rel="stylesheet" href="{{asset('javascript/font-awesome/css/font-awesome.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/stylesheet.css')}}"/>
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}"/>
        <link rel="stylesheet" href="{{asset('javascript/owl-carousel/owl.carousel.css')}}"/>
        <link rel="stylesheet" href="{{asset('javascript/owl-carousel/owl.transitions.css')}}"/>
        <link href="{{asset('image/favicon-16x16.png')}}" rel="icon" type="image/png" >
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet"/>
            
    </head>
    <body class="index">
        <div class="preloader loader" style="display: block;"> <img src="{{asset('image/totalgif.gif')}}"  alt="#"/></div>
        <header class="fixedheader">
            <div class="header-top">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="top-left pull-left">
                      <div class="language">
                        {{-- <form action="#" method="post" enctype="multipart/form-data" id="language">
                          <div class="btn-group">
                            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> English <span class="caret"></span></button>
                            <ul class="dropdown-menu">
                              <li><a href="#">Arabic</a></li>
                              <li><a href="#"> English</a></li>
                              <li><a href="#"> French</a></li>
                            </ul>
                          </div>
                        </form> --}}
                      </div>
                      <div class="currency">
                        {{-- <form action="#" method="post" enctype="multipart/form-data" id="currency">
                          <div class="btn-group">
                            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown"> <strong>USD</strong> <span class="caret"></span> </button>
                            <ul class="dropdown-menu">
                              <li><a href="#">Euro</a></li>
                              <li><a href="#">Pound</a></li>
                              <li><a href="#">USD</a></li>
                            </ul>
                          </div>
                        </form> --}}
                      </div>
                      <div class="wel-come-msg"> Welcome to our online store! </div>
                    </div>
                    <div class="top-right pull-right">
                      <div id="top-links" class="nav pull-right">
                        @if (Auth::check())
                        <ul class="list-inline">
                            <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>{{Auth::user()->name}}</span> <span class="caret"></span></a>
                              <ul class="dropdown-menu dropdown-menu-right">
                                <li><a href="/userinfo">Profile</a></li>
                                <li><a href="/logout">Logout</a></li>
                              </ul>
                            </li>
                            <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart" aria-hidden="true"></i><span>Wish List</span><span> (0)</span></a></li>
                          </ul>
                           @else
                           <ul class="list-inline">
                              <li class="dropdown"><a href="#" title="My Account" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span>My Account</span> <span class="caret"></span></a>
                                <ul class="dropdown-menu dropdown-menu-right">
                                  <li><a href="/register">Register</a></li>
                                  <li><a href="/login">Login</a></li>
                                </ul>
                              </li>
                              {{-- <li><a href="#" id="wishlist-total" title="Wish List (0)"><i class="fa fa-heart" aria-hidden="true"></i><span>Wish List</span><span> (0)</span></a></li> --}}
                            </ul>
                        @endif
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container headsize ">
              <div class="header-inner">
                <div class="col-sm-3 col-xs-3 header-left">
                  <div id="logo"> <a href="{{url('/')}}"><img src="{{asset('image/logo2.png')}}" title="E-Commerce" alt="E-Commerce" class="img-responsive" /></a> </div>
                </div>
                <div class="col-sm-9 col-xs-9 header-right">
                  <div id="search" class="input-group">
                    <form action="/search" method="GET">
                    <input type="search" name="search" value="" placeholder="Enter your keyword ..." class="form-control input-lg" />
                    <span class="input-group-btn">
                    <button type="submit" class="btn btn-default btn-lg"><span>Search</span></button>
                    </span> </form></div>
                  <div id="cart" class="btn-group btn-block">
                    <button type="button" class="btn btn-inverse btn-block btn-lg dropdown-toggle cart-dropdown-button"> <span id="cart-total">
                    <span>Shopping Cart</span><br>
                    {{Cart::count()}} item(s) - ₦{{Cart::subtotal()}}</span></button>
                    <ul class="dropdown-menu pull-right cart-dropdown-menu">
                        @foreach($cartItems as $cartItem )
                        {{-- @php
                         $cartId=$cartItem->id;
                        @endphp --}}
                        <li>
                          <table class="table table-striped">
                            <tbody>
                              <tr>
                                <td class="text-center"><a href="#"><img class="img-thumbnail cartthumb" title="lorem ippsum dolor dummy" alt="lorem ippsum dolor dummy" src="{{url('images',$shirts->find($cartItem->id)->image)}}"></a></td>
                                <td class="text-left"><a href="#">{{$cartItem->name}}</a></td>
                                <td class="text-right">{{$cartItem->qty}}</td>
                                <td class="text-right">{{$cartItem->price}}</td>
                                <td class="text-center"><button class="btn btn-danger btn-xs" title="Remove" type="button"><i class="fa fa-times"></i></button></td>
                              </tr>
                            </tbody>
                          </table>
                        </li>
                        @endforeach
                      <li>
                        <div>
                          <table class="table table-bordered">
                            <tbody>
                              
                              <tr>
                                <td class="text-right"><strong>Total</strong></td>
                                <td class="text-right">₦{{Cart::subtotal()}}</td>
                              </tr>
                            </tbody>
                          </table>
                          <p class="text-right"> <span class="btn-viewcart"><a href="{{route('cart.index')}}"><strong><i class="fa fa-shopping-cart"></i> View Cart</strong></a></span> <span class="btn-checkout"><a href="{{url('/order')}}"><strong><i class="fa fa-share"></i> Checkout</strong></a></span> </p>
                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </header>
          <nav id="menu" class="navbar">
            <div class="nav-inner">
              <div class="navbar-header"><span id="category" class="visible-xs">Categories</span>
                <button type="button" class="btn btn-navbar navbar-toggle" ><i class="fa fa-bars"></i></button>
              </div>
              <div class="navbar-collapse navsize">
                <ul class="main-navigation">
                  <li><a href="{{url('/')}}"   class="parent"  >Home</a> </li>
                  <li><a href="{{url('/category/3')}}"   class="parent"  >Laptops</a> </li>
                  <li><a href="{{url('/category/4')}}"   class="parent"  >Gadgets</a> </li>
                  <li><a href="{{url('/category/5')}}"   class="parent"  >Accessories</a> </li>
                  {{-- <li><a href="#" class="active parent">Page</a>
                    <ul>
                      <li><a href="category.html">Category Page</a></li>
                      <li><a href="{{route('cart.index')}}">Cart Page</a></li>
                      <li><a href="{{url('/order')}}">Checkout Page</a></li>
                      <li><a href="blog.html" >Blog Page</a></li>
                      <li><a href="single-blog.html" >Singale Blog Page</a></li>
                      <li><a href="register.html">Register Page</a></li>
                      <li><a href="contact.html">Contact Page</a></li>
                      <li><a href="affiliate.html">Affiliate</a></li>
                      <li><a href="forgetpassword.html">Forget Password</a></li>
                    </ul>
                  </li> --}}
                  <li><a href="{{route('cart.index')}}" class="parent"  >Cart</a></li>
                  {{-- <li><a href="about-us.html" >About us</a></li>
                  <li><a href="contact.html" >Contact Us</a> </li> --}}
                </ul>
              </div>
            </div>
          </nav>
          
          @yield('content')

          {{-- @section('footer') --}}
          <footer>
            <div class="cms_searvice">
              <div class="container">
                <div class="row">
                  <div class="col-md-3 ">
                    <div class="cms-block1 z-depth-5">
                      <h4>Free Shipping</h4>
                      <p>All order over $150</p>
                    </div>
                  </div>
                  <div class="col-md-3 ">
                    <div class="cms-block2">
                      <h4>30 Days Returns</h4>
                      <p>Money Back Guarantee</p>
                    </div>
                  </div>
                  <div class="col-md-3 ">
                    <div class="cms-block3">
                      <h4>24/7 Support</h4>
                      <p>Feel free to Contact us</p>
                    </div>
                  </div>
                  <div class="col-md-3 ">
                    <div class="cms-block4">
                      <h4>Online Shopping </h4>
                      <p>Save Up to 70% on Store</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="container">
              <div class="row">
                <div class="col-sm-3 footer-block">
                  <h5 class="footer-title">INFORMATION</h5>
                  <ul class="list-unstyled ul-wrapper">
                    <li><a href="contact.html">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Wish List</a></li>
                    <li><a href="#">Gift Certificates</a></li>
                    <li><a href="#">View Cart</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="#">Specials</a></li>
                  </ul>
                </div>
                <div class="col-sm-3 footer-block">
                  <h5 class="footer-title">MY ACCOUNT</h5>
                  <ul class="list-unstyled ul-wrapper">
                    <li><a href="contact.html">Contact Us</a></li>
                    <li><a href="#">My Account</a></li>
                    <li><a href="#">Order History</a></li>
                    <li><a href="#">Wish List</a></li>
                    <li><a href="#">Newsletter</a></li>
                    <li><a href="#">Gift Certificates</a></li>
                    <li><a href="#">Brands</a></li>
                    <li><a href="#">Specials</a></li>
                    <li><a href="#">Affiliates</a></li>
                  </ul>
                </div>
                <div class="col-sm-3 footer-block">
                  <h5 class="footer-title">Extras</h5>
                  <ul class="list-unstyled ul-wrapper">
                    <li><a href="#">Delivery information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms & Conditions</a></li>
                    <li><a href="#">Contact us</a></li>
                    <li><a href="#">Sitemap</a></li>
                    <li><a href="#">Product Recall</a></li>
                    <li><a href="#">Gift Vouchers</a></li>
                    <li><a href="#">Help & FAQs</a></li>
                    <li><a href="#">Sale Only Today</a></li>
                  </ul>
                </div>
                <div class="col-sm-3 footer-block">
                  <div class="content_footercms_right">
                    <div class="footer-contact">
                      <h5 class="contact-title footer-title">Contact Us</h5>
                      <ul class="ul-wrapper">
                        <li><i class="fa fa-map-marker"></i><span class="location2">Offices Addresss:<br>
                          218,Drimlend Building<br>
                          Sarthana jakatnaka, Surat City <br>
                          Gujarat-395013  INDIA</span></li>
                        <li><i class="fa fa-envelope"></i><span class="mail2"><a href="#">info@localhost.com</a><br>
                          <a href="#">your@domain.com</a></span></li>
                        <li><i class="fa fa-mobile"></i><span class="phone2">+91 0987-654-321<br>
                          +91 0987-654-321</span></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="footer-bottom">
              <div id="bottom-footer">
                <ul class="footer-link">
                  <li><a href="{{url('/')}}">Home</a></li>
                  <li><a href="#">About</a></li>
                  <li><a href="#">Work</a></li>
                  <li><a href="#">Team</a></li>
                  <li><a href="#">Pricing</a></li>
                  <li><a href="#">Blog</a></li>
                  <li><a href="#">Contact</a></li>
                </ul>
                <div class="copyright"> Copyright - <a class="yourstore" href="http://www.lionode.com/"> Created by Lionode &copy; 2017 </a></div>
                <div class="footer-bottom-cms">
                  <div class="footer-payment">
                    <ul>
                      <li class="mastero"><a href="#"><img alt="" src="image/payment/mastero.jpg"></a></li>
                      <li class="visa"><a href="#"><img alt="" src="image/payment/visa.jpg"></a></li>
                      <li class="currus"><a href="#"><img alt="" src="image/payment/currus.jpg"></a></li>
                      <li class="discover"><a href="#"><img alt="" src="image/payment/discover.jpg"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <a id="scrollup">Scroll</a>
          </footer>
          {{-- @endsection --}}


    
    <script src="{{asset('javascript/jquery-2.1.1.min.js')}}" ></script>
    <script src="{{asset('javascript/bootstrap/js/bootstrap.min.js')}}" ></script>
    <script src="{{asset('javascript/template_js/jstree.min.js')}}"></script>
    <script src="{{asset('javascript/template_js/template.js')}}"></script>
    <script src="{{asset('javascript/common.js')}}" ></script>
    <script src="{{asset('javascript/global.js')}}" ></script>
    <script src="{{asset('javascript/owl-carousel/owl.carousel.min.js')}}" ></script>
    <script src="{{asset('javascript/jquery.parallax.js')}}" ></script>
    <script>
        jQuery(document).ready(function ($) {
            $('.parallax').parallax();
        });
    </script>
    </body>
</html>
