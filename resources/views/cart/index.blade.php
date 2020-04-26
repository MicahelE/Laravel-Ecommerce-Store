<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Total IT Nigeria Ltd. - The complete ICT solution place</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Favicon -->
        {{-- <link rel="shortcut icon" href="../favicon.ico"> --}}
        <!-- Bootstrap -->
        <link rel="stylesheet" href="../assets/styles/vendor/bootstrap.min.css">
        <!-- Fonts -->
        <link rel="stylesheet" href="../assets/fonts/et-lineicons/css/style.css">
        <link rel="stylesheet" href="../assets/fonts/linea-font/css/linea-font.css">
        <link rel="stylesheet" href="../assets/fonts/fontawesome/css/font-awesome.min.css">
        <!-- Slider -->
        <link rel="stylesheet" href="../assets/styles/vendor/slick.css">
        <!-- Lightbox -->
        <link rel="stylesheet" href="../assets/styles/vendor/magnific-popup.css">
        <!-- Animate.css -->
        <link rel="stylesheet" href="../assets/styles/vendor/animate.css">


        <!-- Definity CSS -->
        <link rel="stylesheet" href="../assets/styles/main1.css">
        <link rel="stylesheet" href="../assets/styles/responsive.css">

        <!-- JS -->
        <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar">
        
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->


        <!-- ========== Preloader ========== -->

        <div class="preloader">
          <img src="../assets/images/loader.svg" alt="Loading...">
        </div>
        
        
        
                <!-- ========== Navigation ========== -->

    <nav class="navbar navbar-default navbar-fixed-top mega navbar-inverse navbar-trans navbar-fw ">
      <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"
              aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <!-- Logo -->
          <a class="navbar-brand" href="index.html">
              <img class="navbar-logo" src="../assets/images/logo.png" alt="Logo">
          </a>
      </div>

      <!-- Navbar Links -->
      <div id="navbar" class="navbar-collapse collapse page-scroll navbar-right">
          <ul class="nav navbar-nav">
              <li>
                  <a href="index.html#home">Home
                      <span class="sr-only"></span>
                  </a>
              </li>
              <li>
                  <a href="index.html#about">About
                      <span class="sr-only"></span>
                  </a>
              </li>
              <!-- <li>
                  <a href="#services">WE-DO
                      <span class="sr-only"></span>
                  </a>
              </li> -->
              <li class="dropdown  ">
                  <a class="dropdown-toggle " data-toggle="dropdown" href="#">WE-DO
                  <span class="caret"></span></a>
                  <ul class=" dropdown-menu-left dropdown-menu ">
                    <li><a class="dropdown-item" href="wedo.html#sales">Gadget Sales</a></li>
                    <li><a class="dropdown-item" href="wedo.html#repairs">Gadget Repairs </a></li>
                    <li><a class="dropdown-item" href="wedo.html#consultancy">IT Consultancy</a></li> 
                    <li><a class="dropdown-item" href="wedo.html#training">IT Training </a></li>
                   <li><a class="dropdown-item" href="wedo.html#support">Business IT Support </a></li>
                  <li><a class="dropdown-item" href="wedo.html#process">Business Process Development </a></li>
              <li><a class="dropdown-item" href="wedo.html#mobile">Mobile App Development</a></li>
              <li><a class="dropdown-item" href="wedo.html#web">Web Design &amp;  App Development</a></li>                           
               <li><a class="dropdown-item" href="wedo.html#software">Software Development</a></li>
                 <li><a class="dropdown-item" href="wedo.html#data">Data Recovery &amp; BackUp</a></li>
                 <li><a class="dropdown-item" href="wedo.html#intelligence">Business Intelligence </a></li>
                  <li><a class="dropdown-item" href="wedo.html#networking"> Networking</a></li>
                   <li><a class="dropdown-item" href="wedo.html#cloud"> Cloud computing</a></li>
                  </ul>
                </li>
              <li>
                  <a href="index.html#portfolio">Projects
                      <span class="sr-only"></span>
                  </a>
              </li>
              <li>
                  <a href="index.html#testimonials">Clients
                      <span class="sr-only"></span>
                  </a>
              </li>
              <li>
                  <a href="{{url('/category/3')}}">Store
                      <span class="sr-only"></span>
                  </a>
              </li>
              <li>
                  <a href="index.html#contact">Contact
                      <span class="sr-only"></span>
                  </a>
              </li>
              @if (Auth::check())
              <li>
                 
              <a href="{{url('/userinfo')}}"> <i class="fa fa-users"></i>User
                      
                  </a>
              </li>
              @endif
               <!-- Cart -->
               <li id="ajaxView" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-shopping-cart"></i> Cart({{Cart::count()}})</a>
                <ul class="dropdown-menu cart-dropdown">
                  <li class="dropdown-header">Cart  </li>
                  <li role="separator" class="divider cart-sep-top"></li>
                  @foreach($cartItems as $cartItem )
                  <li>
                    <div class="cart-item">
                      <a href="{{route('cart.index')}}"><img class="cartthumb" src="{{url('images',$shirts->find($cartItem->id)->image)}}" alt="Product Name" class="p-thumb"></a>
                      <a href="{{route('cart.index')}}" class="cart-remove-btn"><span class="linea-arrows-square-remove"></span></a>
                      <a href="{{route('cart.index')}}" class="cp-name">{{$cartItem->name}}</a>
                      <p class="cp-price">{{$cartItem->qty}} x ₦{{$cartItem->price}}</p>
                    </div>

                   
                  </li>
                  @endforeach
                  <li role="separator" class="divider cart-sep-bot"></li>
                  <li>
                    <h6 class="item-totals">Items Total: <span>₦{{Cart::subtotal()}}</span></h6>
                  </li>
                  <li class="cart-btns">
                    <a href="{{route('cart.index')}}" class="btn-ghost-light btn-block">View Cart</a>
                    <a href="{{url('/order')}}" class="btn btn-light btn-block">Checkout</a>
                  </li>

                </ul>
              </li><!-- / Cart -->
          </ul>
          <!-- / .nav .navbar-nav -->
      </div>
      <!--/.navbar-collapse -->
  </nav>
  <!-- / .navbar -->



        <!-- ========== Page Title ========== -->

        <header class="page-title pt-large pt-dark pt-plax-lg-dark"
        data-stellar-background-ratio="0.4">
          <div class="container">
              <div class="row">

                <div class="col-sm-6">
                  <h1>Cart</h1>
                  <span class="subheading">Your shopping cart</span>
                </div>
                <ol class="col-sm-6 text-right breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li><a href="#">Elements</a></li>
                  <li class="active">Cart</li>
                </ol>

              </div>
            </div>
        </header>


        
        <!-- ========== Cart Items - (checkout table) ========== -->

        <div id="cartpage" class="container section">
          <div class="row">

            <!-- Checkout Table -->
            <div class="col-lg-9">
              <div class="table-responsive">
                <table class="table checkout-table">
                  <thead>
                    <tr>
                      <th></th>
                      <th>Preview</th>
                      <th>Product</th>
                      
                      <th>Q-ty</th>
                      <th>Total</th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                      @foreach($cartItems as $cartItem )
                      @php $product=$products->find($cartItem->id)
                      @endphp
                    <tr>
                      <td>1</td>
                      <td><img class="cartthumb" src="{{url('images',$product->image)}}" alt="Thumb product image"></td>
                      <td>{{$cartItem->name}}</td>
                     
                      <td width="50px">
                      {!!Form::open(['route'=> ['cart.update',$cartItem->rowId], 'data-value'=> $cartItem->rowId ,'method' =>'put'])!!}
                      <input name="qty" type="text" value="{{$cartItem->qty}}" data-value="{{$cartItem->rowId}}">
                      
                      </td>
                      <td>
                      {{-- {{$cartItem->options->has('size')?$cartItem->options->size:''}} --}}
                      {{-- <div>{{Form::select('size', ['small' => 'Small', 'medium' => 'Medium', 'large' => 'Large'],$cartItem->options->has('size')?$cartItem->options->size:'') }}</div> --}}
                      {{$cartItem->price}}
                      </td>
                 <td>
            <input style="float:left" data-value="{{$cartItem->rowId}}"class="button success small" type="button" value="Ok" onclick="doSomething('{{$cartItem->rowId}}')">
            {!! Form::close() !!}
            
                 <form action="{{route('cart.destroy',$cartItem->rowId)}}" method="POST" data-delete="{{$cartItem->rowId}}">
                {{csrf_field()}}
                {{method_field('DELETE')}}
                <input class="button small " type="button" value="Delete" onclick="takeSomething('{{$cartItem->rowId}}')">
                 </form>
                 </td>
                 </tr>
                @endforeach
                   
                  </tbody>
                </table><!-- / .checkout-table -->
              </div><!-- / .table-responsive -->







              <!-- Coupon Form -->
              {{-- <form action="#" class="checkout-coupon-form ws-m">
                <div class="col-lg-4 no-gap-left">
                  <input type="text" class="form-control" placeholder="Coupon code">
                </div>
                <button class="btn btn-ghost">Apply Coupon</button>
                <button class="btn pull-right">Update Cart</button>
              </form> --}}
              <!-- / .checkout-coupon-form -->
              <hr>


              <!-- Calculate Shipping -->
              {{-- <div class="calc-shipping" id="calc-shipping">
                <h4>Calculate Shipping</h4>
                <p>Shipping costs will be calculated once you have provided your address.</p>
                <form action="#" class="calc-form">
                  <div class="form-group col-lg-4 no-gap-left">
                    <select class="form-control" id="calc-country-select">
                      <option selected>United Kingdom (UK)</option>
                      <option>Germany (DE)</option>
                      <option>France (FR)</option>
                      <option>Australia (AU)</option>
                    </select>
                    <label for="calc-country-select">Select Country</label>
                  </div>

                  <div class="form-group col-lg-4">
                    <input type="text" class="form-control" id="calc-state" placeholder="State / country">
                    <label for="calc-state">Your State</label>
                  </div>

                  <div class="form-group col-lg-4 no-gap-right">
                    <input type="number" class="form-control" id="calc-zip" placeholder="Postcode / ZIP">
                    <label for="calc-zip">Your ZIP</label>
                  </div>

                  <div class="col-lg-12 no-gap btn-totals">
                    <input type="submit" class="btn" value="Update Totals">
                  </div>

                </form>
              </div> --}}
              <!-- / .calc-shipping -->

            </div><!-- / .col-lg-9 -->
            

            <!-- Totals Table -->
            <div class="col-lg-3 totals-group">
              <div class="totals-heading">
                <h6>Card Totals</h6>
              </div>
              <div class="totals-content">
                <div class="subtotal-group">
                  <h6>Subtotal:</h6>
                  <p>₦{{Cart::subtotal()}}</p>
                </div>
                <div class="shipping-group">
                  <h6>Extra costs:</h6>
                  <a href="#">₦0</a>
                </div>
                <div class="total-group">
                  <h5>Total:</h5>
                  <p>₦{{Cart::subtotal()}}</p>
                </div>
                <div class="checkout-btn-wrapper">
                  <a href="{{url('/order')}}" class="btn checkout-btn">Go to checkout</a>
                </div>
              </div><!-- / .totals-content -->
            </div><!-- / .col-md-3 -->

          </div><!-- / .row -->
        </div><!-- / .container -->
        <script>
           function doSomething($value){
           var form= $('form[data-value={{$cartItem->rowId}}]');
           var fordata= $('form[data-value={{$cartItem->rowId}}]').serialize();

           $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('form[data-value={{$cartItem->rowId}}] [name="_token"]').val()
    }
});

                    $.ajax({
                      type: 'POST',
                      url: '/cart/'    + $value,
                      data: $('form[data-value='+$value+']').serialize(),
                      success:function(data){
                        $('#ajaxView').html(data.html);
                        $('#cartpage').html(data.cart);
                        alert('done');
                
                      }
                    });
                }
                function takeSomething($value){
           var form= $('form[data-value={{$cartItem->rowId}}]');
           var fordata= $('form[data-value={{$cartItem->rowId}}]').serialize();

           $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('form[data-delete={{$cartItem->rowId}}] [name="_token"]').val()
    }
});

                    $.ajax({
                      type: 'POST',
                      url: '/cart/'    + $value,
                      data: $('form[data-delete='+$value+']').serialize(),
                      success:function(data){
                        $('#ajaxView').html(data.html);
                        $('#cartpage').html(data.cart);
                        alert('done');
                
                      }
                    });
                }
          // function doSomething(e, $value){
          //   var post_url = $(this).attr("href");
          //       e.preventDefault();
          //     $.ajax({
          //       type: 'post',
          //       url: $value,
          //       data: $('[action ='$value']').serialize(),
          //       success:function(data){
          //         $('#ajaxView').html(data.html);
          //         $('#cartpage').html(data.cart);
          //         alert('done');
          //       }
          //     });
          // }
          // $( document ).ready(function() {
          // $('form[data-value={{$cartItem->rowId}}]').submit(function(event){
          //  event.preventDefault();
          //   var input  = this;
          //   var form= this.parent();
          //   // form.preventDefault();
          //   $.ajax({
          //       type: 'post',
          //       url: this.getAttribute('action'),
          //       data: this.serialize(),
          //       success:function(data){
          //         $('#ajaxView').html(data.html);
          //         $('#cartpage').html(data.cart);
          //         alert('done');
          //       }
          //     });
          // });
        // });
        
        </script>

{{-- <script></script> --}}

        <!-- ========== Related Items - (products section) ========== -->

        <div class="gray-bg">
          <div class="container section">

            <div class="row">
              <header class="sec-heading">
                <h2>Top Rated Products</h2>
              </header>

              <!-- Shop Product -->
             
              <div class="col-xs-12 col-sm-6 col-lg-3 ">
                <div class="shop-product-card">

                  <!-- Image/Slider -->
                  <div class="product-image-wrapper">
                      <span class="label label-red sale-label">FLASH SALES</span>

                    <!-- Product Actions (hover) -->
                    <a href="{{route('cart.addItem',$products[2]->id)}}" class="buy-btn"><span class="linea-ecommerce-bag"></span></a>
                    <a href="{{route('wishlist.create',$products[2]->id)}}" class="fav-btn"><span class="linea-basic-star"></span></a>
                    
                    <!-- Product Main Image -->
                    <div class="shop-p-slider">
                      <a href="{{route('shirt',$products[2]->id)}}"><img src="{{url('images',$products[2]->image)}}" alt="Product Image 1"></a>
                      <a href="{{route('shirt',$products[2]->id)}}"><img src="{{url('images',$products[2]->image)}}" alt="Product Image 1"></a>
                      <a href="{{route('shirt',$products[2]->id)}}"><img src="{{url('images',$products[2]->image)}}" alt="Product Image 1"></a>
                    </div>
                  </div>

                  <!-- Product Meta -->
                  <div class="product-meta">
                    <a href="levelu.html"><h4 class="product-name">{{$products[2]->name}}</h4></a>
                    <span class="product-sep"></span>
                    <p class="product-price">₦{{$products[2]->price}}</p>
                    <a href="{{route('cart.addItem',$products[2]->id)}}" class="btn-ghost btn-small btn-round">Add To Cart</a>
                  </div>

                </div><!-- / .shop-product-card -->
              </div><!-- / .col-sm-3 -->


              <!-- Shop Product -->
               <div class="col-xs-12 col-sm-6 col-lg-3 ">
                <div class="shop-product-card">

                  <!-- Image/Slider -->
                  <div class="product-image-wrapper">
                      <span class="label label-red sale-label">FLASH SALES</span>

                    <!-- Product Actions (hover) -->
                    <a href="{{route('cart.addItem',$products[3]->id)}}" class="buy-btn"><span class="linea-ecommerce-bag"></span></a>
                    <a href="{{route('wishlist.create',$products[3]->id)}}" class="fav-btn"><span class="linea-basic-star"></span></a>
                    
                    <!-- Product Main Image -->
                    <div class="shop-p-slider">
                      <a href="{{route('shirt',$products[3]->id)}}"><img src="{{url('images',$products[3]->image)}}" alt="Product Image 1"></a>
                      <a href="{{route('shirt',$products[3]->id)}}"><img src="{{url('images',$products[3]->image)}}" alt="Product Image 1"></a>
                      <a href="{{route('shirt',$products[3]->id)}}"><img src="{{url('images',$products[3]->image)}}" alt="Product Image 1"></a>
                    </div>
                  </div>

                  <!-- Product Meta -->
                  <div class="product-meta">
                    <a href="levelu.html"><h4 class="product-name">{{$products[3]->name}}</h4></a>
                    <span class="product-sep"></span>
                    <p class="product-price">₦{{$products[3]->price}}</p>
                    <a href="{{route('cart.addItem',$products[3]->id)}}" class="btn-ghost btn-small btn-round">Add To Cart</a>
                  </div>

                </div><!-- / .shop-product-card -->
              </div><!-- / .col-sm-3 -->


              <!-- Shop Product -->
              <div class="col-xs-12 col-sm-6 col-lg-3 ">
                  <div class="shop-product-card">
  
                    <!-- Image/Slider -->
                    <div class="product-image-wrapper">
                        <span class="label label-red sale-label">FLASH SALES</span>
  
                      <!-- Product Actions (hover) -->
                      <a href="{{route('cart.addItem',$products[4]->id)}}" class="buy-btn"><span class="linea-ecommerce-bag"></span></a>
                      <a href="{{route('wishlist.create',$products[4]->id)}}" class="fav-btn"><span class="linea-basic-star"></span></a>
                      
                      <!-- Product Main Image -->
                      <div class="shop-p-slider">
                        <a href="{{route('shirt',$products[4]->id)}}"><img src="{{url('images',$products[4]->image)}}" alt="Product Image 1"></a>
                        <a href="{{route('shirt',$products[4]->id)}}"><img src="{{url('images',$products[4]->image)}}" alt="Product Image 1"></a>
                        <a href="{{route('shirt',$products[4]->id)}}"><img src="{{url('images',$products[4]->image)}}" alt="Product Image 1"></a>
                      </div>
                    </div>
  
                    <!-- Product Meta -->
                    <div class="product-meta">
                      <a href="levelu.html"><h4 class="product-name">{{$products[4]->name}}</h4></a>
                      <span class="product-sep"></span>
                      <p class="product-price">₦{{$products[4]->price}}</p>
                      <a href="{{route('cart.addItem',$products[4]->id)}}" class="btn-ghost btn-small btn-round">Add To Cart</a>
                    </div>
  
                  </div><!-- / .shop-product-card -->
                </div><!-- / .col-sm-3 -->


              <!-- Shop Product -->
              <div class="col-xs-12 col-sm-6 col-lg-3 ">
                  <div class="shop-product-card">
  
                    <!-- Image/Slider -->
                    <div class="product-image-wrapper">
                        <span class="label label-red sale-label">FLASH SALES</span>
  
                      <!-- Product Actions (hover) -->
                      <a href="{{route('cart.addItem',$products[5]->id)}}" class="buy-btn"><span class="linea-ecommerce-bag"></span></a>
                      <a href="{{route('wishlist.create',$products[5]->id)}}" class="fav-btn"><span class="linea-basic-star"></span></a>
                      
                      <!-- Product Main Image -->
                      <div class="shop-p-slider">
                        <a href="{{route('shirt',$products[5]->id)}}"><img src="{{url('images',$products[5]->image)}}" alt="Product Image 1"></a>
                        <a href="{{route('shirt',$products[5]->id)}}"><img src="{{url('images',$products[5]->image)}}" alt="Product Image 1"></a>
                        <a href="{{route('shirt',$products[5]->id)}}"><img src="{{url('images',$products[5]->image)}}" alt="Product Image 1"></a>
                      </div>
                    </div>
  
                    <!-- Product Meta -->
                    <div class="product-meta">
                      <a href="levelu.html"><h4 class="product-name">{{$products[5]->name}}</h4></a>
                      <span class="product-sep"></span>
                      <p class="product-price">₦{{$products[5]->price}}</p>
                      <a href="{{route('cart.addItem',$products[5]->id)}}" class="btn-ghost btn-small btn-round">Add To Cart</a>
                    </div>
  
                  </div><!-- / .shop-product-card -->
                </div><!-- / .col-sm-3 -->
            </div><!-- / .row -->
          </div><!-- / .container -->
        </div><!-- / .gray-bg -->



        <!-- ========== Footer Contact ========== -->
  
      <footer id="contact" class="footer-contact">
        <div class="container-fluid">
            <div class="row">

                <!-- Map and address -->
                <div class="col-lg-6 no-gap contact-info">

                    <!-- Show Info Button -->
                    <a href="#" class="show-info-link">
                        <i class="fa fa-info"></i>Show info</a>

                    <div id="map-canvas" class="footer-map"></div>

                    <address class="contact-info-wrapper">
                        <ul>
                            <!-- Address -->
                            <li class="contact-group">
                                <span class="adr-heading">Address</span>
                                <span class="adr-info">12 Oshitelu Street, Computer Village, Ikeja, Lagos.</span>
                            </li>
                            <!-- Email -->
                            <li class="contact-group">
                                <span class="adr-heading">Email</span>
                                <span class="adr-info">info@totalitnigeria.com</span>
                            </li>
                        </ul>
                        <ul>
                            <!-- Mobile -->
                            <li class="contact-group">
                                <span class="adr-heading">Mobile</span>
                                <span class="adr-info">+ 234 - 8025321238</span>
                            </li> 
                            <!-- Phone -->
                            <li class="contact-group">
                                <span class="adr-heading">Phone</span>
                                <span class="adr-info">+ 234 - 7055178355</span>
                            </li>
                        </ul>

                        <a href="#" class="show-map">
                            <span class="linea-basic-geolocalize-05"></span>show on map</a>
                    </address>

                </div>
                <!-- / .col-lg-6 -->


                <!-- Contact Form -->
                <div class="col-lg-6 no-gap section contact-form">
                    <header class="sec-heading">
                        <h2>Contact</h2>
                        <span class="subheading">Feel free to drop in on us, we are happy to listen.</span>
                    </header>

                    <form action="../assets/contact-form/contact-form.php" method="POST" class="form-ajax wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s">

                        <!-- Name -->
                        <div class="form-group">
                            <input type="text" name="name" id="name-contact-1" class="form-control validate-locally" placeholder="Enter your name">
                            <label for="name-contact-1">Name</label>
                            <span class="pull-right alert-error"></span>
                        </div>

                        <!-- Email -->
                        <div class="form-group">
                            <input type="email" name="email" id="email-contact-1" class="form-control validate-locally" placeholder="Enter your email">
                            <label for="email-contact-1">Email</label>
                            <span class="pull-right alert-error"></span>
                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <textarea class="form-control" name="message" id="message-contact-1" rows="5" placeholder="Your Message"></textarea>
                            <label for="message-contact-1">Message</label>
                        </div>
                        <input type="submit" class="btn pull-right" value="Send Message">

                        <!-- Ajax Message -->
                        <div class="ajax-message col-md-12 no-gap"></div>

                    </form>
                </div>
                <!-- / .col-lg-6 -->

            </div>
            <!-- / .row -->
        </div>
        <!-- / .container-fluid -->


        <!-- Social Links -->
        <div class="dark-bg">
            <div class="container footer-social-links">
                <div class="row">

                    <ul>
                        <li>
                            <a href="https://www.facebook.com/Total.IT.Nigeria.Ltd/" target="_blank">facebook</a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/totalitnigerialimited/" target="_blank">Instagram</a>
                        </li>
                        <li>
                            <a href="#">LinkedIn</a>
                        </li>
                    </ul>

                </div>
            </div>
            <!-- / .container -->
        </div>
        <!-- / .dark-bg -->


        <!-- Copyright -->
        <div class="copyright">
            <div class="container">
                <div class="row">

                    <div class="col-md-6">
                        <small>&copy; 2018 Total IT Nigeria Ltd. 
                        </small>
                    </div>

                    <div class="col-md-6">
                        <small>
                            <a href="#page-top" class="pull-right to-the-top">To the top
                                <i class="fa fa-angle-up"></i>
                            </a>
                        </small>
                    </div>

                </div>
                <!-- / .row -->
            </div>
            <!-- / .container -->
        </div>
        <!-- / .copyright -->
    </footer>
    <!-- / .footer-contact -->
    

        <!-- ========== Scripts ========== -->

        <script src="../assets/js/vendor/jquery-2.1.4.min.js"></script>
        <script src="../assets/js/vendor/google-fonts.js"></script>
        <script src="../assets/js/vendor/jquery.easing.js"></script>
        <script src="../assets/js/vendor/jquery.waypoints.min.js"></script>
        <script src="../assets/js/vendor/bootstrap.min.js"></script>
        <script src="../assets/js/vendor/bootstrap-hover-dropdown.min.js"></script>
        <script src="../assets/js/vendor/smoothscroll.js"></script>
        <script src="../assets/js/vendor/jquery.localScroll.min.js"></script>
        <script src="../assets/js/vendor/jquery.scrollTo.min.js"></script>
        <script src="../assets/js/vendor/jquery.stellar.min.js"></script>
        <script src="../assets/js/vendor/jquery.parallax.js"></script>
        <script src="../assets/js/vendor/slick.min.js"></script>
        <script src="../assets/js/vendor/jquery.easypiechart.min.js"></script>
        <script src="../assets/js/vendor/countup.min.js"></script>
        <script src="../assets/js/vendor/isotope.min.js"></script>
        <script src="../assets/js/vendor/jquery.magnific-popup.min.js"></script>
        <script src="../assets/js/vendor/wow.min.js"></script>

        <!-- Definity JS -->
        <script src="../assets/js/main.js"></script>
    </body>
</html>
