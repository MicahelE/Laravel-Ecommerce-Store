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
         <a class="navbar-brand" href="http://www.totalitnigeria.com">
              <img class="navbar-logo" src="../assets/images/logo.png" alt="Logo">
          </a>
      </div>

      <!-- Navbar Links -->
      <div id="navbar" class="navbar-collapse collapse page-scroll navbar-right">
          <ul class="nav navbar-nav">
              <li>
                  <a href="http://www.totalitnigeria.com/">Home
                      <span class="sr-only"></span>
                  </a>
              </li>
              <li>
                  <a href="http://www.totalitnigeria.com/">About
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
                    <li><a class="dropdown-item" href="http://www.totalitnigeria.com/">Gadget Sales</a></li>
                    <li><a class="dropdown-item" href="http://www.totalitnigeria.com/">Gadget Repairs </a></li>
                    <li><a class="dropdown-item" href="http://www.totalitnigeria.com/">IT Consultancy</a></li> 
                    <li><a class="dropdown-item" href="http://www.totalitnigeria.com/">IT Training </a></li>
                   <li><a class="dropdown-item" href="http://www.totalitnigeria.com/">Business IT Support </a></li>
                  <li><a class="dropdown-item" href="http://www.totalitnigeria.com/">Business Process Development </a></li>
              <li><a class="dropdown-item" href="http://www.totalitnigeria.com/">Mobile App Development</a></li>
              <li><a class="dropdown-item" href="http://www.totalitnigeria.com/ &amp;  App Development</a></li>                           
               <li><a class="dropdown-item" href="http://www.totalitnigeria.com/">Software Development</a></li>
                 <li><a class="dropdown-item" href="http://www.totalitnigeria.com/">Data Recovery &amp; BackUp</a></li>
                 <li><a class="dropdown-item" href="http://www.totalitnigeria.com/">Business Intelligence </a></li>
                  <li><a class="dropdown-item" href="http://www.totalitnigeria.com/"> Networking</a></li>
                   <li><a class="dropdown-item" href="http://www.totalitnigeria.com/"> Cloud computing</a></li>
                  </ul>
                </li>
              <li>
                  <a href="http://www.totalitnigeria.com/">Projects
                      <span class="sr-only"></span>
                  </a>
              </li>
              <li>
                  <a href="http://www.totalitnigeria.com/">Clients
                      <span class="sr-only"></span>
                  </a>
              </li>
              <li>
                  <a href="{{url('/category/3')}}">Store
                      <span class="sr-only"></span>
                  </a>
              </li>
              <li>
                  <a href="http://www.totalitnigeria.com/">Contact
                      <span class="sr-only"></span>
                  </a>
              </li>

               <!-- Cart -->
               <li id="ajaxView" class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false" id="change-count"><i class="fa fa-shopping-cart"></i> Cart({{Cart::count()}})</a>
                <ul class="dropdown-menu cart-dropdown">
                  <li class="dropdown-header">Cart</li>
                  <li role="separator" class="divider cart-sep-top"></li>
                  @foreach($cartItems as $cartItem )
                  <li class="custom-drop">
                    <div class="cart-item">
                      <a href="{{route('cart.index')}}"><img class="cartthumb" src="{{url('images',$products->find($cartItem->id)->image)}}" alt="Product Name" class="p-thumb"></a>
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
{{-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> --}}
<!------ Include the above in your HEAD tag ---------->

<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-img">
                            <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBwgHBgkIBwgKCgkLDRYPDQwMDRsUFRAWIB0iIiAdHx8kKDQsJCYxJx8fLT0tMTU3Ojo6Iys/RD84QzQ5OjcBCgoKDQwNGg8PGjclHyU3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3Nzc3N//AABEIAHoAegMBIgACEQEDEQH/xAAbAAEBAQADAQEAAAAAAAAAAAAABQQBAwYCB//EADMQAAICAAMGBAQFBQEAAAAAAAABAgMEESEFFDFTYZISQVFxEyKRoUJScsHRIzIzYoEV/8QAFAEBAAAAAAAAAAAAAAAAAAAAAP/EABQRAQAAAAAAAAAAAAAAAAAAAAD/2gAMAwEAAhEDEQA/AP3EAAAAAOu26umOdklFeXUz43GKhOEMnY19CTOcrJuU2235sClZtSKeVdbfVvI6f/Ttz0hD7mEAUobUf46u1mujFU3aQl835XoyEAPSAmYLHPNV3yz9JfyUwAAAAAAAAB04q5UUym+PkvVncStrWZ2xr8orN+4GGUnKTlJ5tvVs4AAAAAAABW2ZiHZW65vOUOHVEk7sJZ8LE1y8m8n7MC8AAAAAAAAQ9oPPGW9Gl9kXCLtKPhxc2+Ekn9sv2AygAAAAAAABvJNry1BzGPjkori3kB6JHIAAAAAAAJ+1qvFCNq/Do/YoHEoqUXGSzT0aA84DvxeHlh7MnrF/2v1OgAAAAAAGvZtTsxCm18sNf++RnrhKyajBZtlvC0RopUFq+LfqwO4AAAAAAD04gDFisfCtuNfzy+yM+NxzszrpeUODl6mACrRiasXX8K9JSf0ft1M+I2fZDN1Zzj04oxGujHW1ZKT8cfSX8gZWmnk1k+pwVFjsNasroNfqjmPFs165Q+jAlmijB3XcI+GP5pLI271gqta4rP8A1gdF20py0qj4er1YGn+hs+vjnOX1kdVG0s5ZXxSX5o+ROlJybcm235s4A9HGSkk4tNPg0ckPCYqeHlprB8YlmqyNsFODzi+AH2AABN2litXRW/1v9jXjL1RQ5/i4R9yG3m82836sDgAAAAAAAAAAAAANOCxLw9mv+OT+ZenUzHIHo081mgYNlXeKt1SeseHsbwJO1LfFcq09IL7swn3dPx3Tn6ybPgAAAAAAAAAAAAAAAADtw1rpvhPyT19i9p6nnCrVjoxqgpcVFZgYbMHfCXh+HKXWKzTPndr+TPtZfAEDdr+TPtY3a/kz7WXwBA3a/kz7WN2v5M+1l8AQN2v5M+1jdr+TPtZfAEDdr+TPtY3a/kz7WXwBA3a/kz7WN2v5M+1l8AQN2v5M+1jdr+TPtZfAEDdr80vgz16GhbLsazcoJ+xXOAP/2Q==" alt=""/>
                            
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h3 class="bold">
                                        Shopper
                                    </h3>
                                    <br>
                                    <h3>
                                        {{$user->name}}
                                    </h3>
                                    {{-- <p class="proile-rating">RANKINGS : <span>8/10</span></p> --}}
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">User Details</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->name}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->email}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Phone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->userInfo->phone}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->userInfo->address}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->userInfo->city}}</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <label>State</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>{{$user->userInfo->state}}</p>
                                            </div>
                                        </div>
                                </div>
                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="gray-bg">
                                        <div class="container section">
                                  <div class="row mb-30">

                                        <!-- Shop Product -->
                                        @foreach ($products as $product)
                                        <div class="col-xs-12 col-sm-6 col-lg-3 m-5">
                                          <div class="shop-product-card">
                          
                                            <!-- Image/Slider -->
                                            <div class="product-image-wrapper">
                                                <span class="label label-red sale-label">FLASH SALES</span>
                          
                                              <!-- Product Actions (hover) -->
                                              <a href="{{route('cart.addItem',$product->id)}}" class="buy-btn"><span class="linea-ecommerce-bag"></span></a>
                                              <a href="{{route('wishlist.create',$product->id)}}" class="fav-btn"><span class="linea-basic-star"></span></a>
                                              
                                              <!-- Product Main Image -->
                                              <div class="shop-p-slider">
                                                <a href="{{route('shirt',$product->id)}}"><img src="{{url('images',$product->image)}}" alt="Product Image 1"></a>
                                                <a href="{{route('shirt',$product->id)}}"><img src="{{url('images',$product->image)}}" alt="Product Image 1"></a>
                                                <a href="{{route('shirt',$product->id)}}"><img src="{{url('images',$product->image)}}" alt="Product Image 1"></a>
                                              </div>
                                            </div>
                          
                                            <!-- Product Meta -->
                                            <div class="product-meta">
                                              <a href="{{route('shirt',$product->id)}}"><h4 class="product-name">{{$product->name}}</h4></a>
                                              <span class="product-sep"></span>
                                              <p class="product-price">₦{{$product->price}}</p>
                                            </div>
                          
                                          </div><!-- / .shop-product-card -->
                                        </div><!-- / .col-sm-3 -->
                          @endforeach
                          
                                       
                          
                                      </div><!-- / .row -->
                                      <div class="row mb-30"></div>
                                        </div></div>
                                         
                                          
                                       
                                      
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
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
    