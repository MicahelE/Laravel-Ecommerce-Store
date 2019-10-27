@extends('layout.main')

@section('title','Product')
@section('content')
<div class="breadcrumb parallax-container">
        <div class="parallax"><img src="image/prlx.jpg" alt="#"></div>
        <h1>Product</h1>
        <ul>
          <li><a href="index.html">Home</a></li>
          <li><a href="category.html">{{ $shirt->category->name}}</a></li>
          <li><a href="#">{{$shirt->name}}</a></li>
        </ul>
      </div>
      <div class="container">
        <div class="row">
          <div class="content col-sm-12">
            <div class="row">
              <div class="col-sm-5">
                <div class="thumbnails">
                  <div><a class="thumbnail fancybox" href="{{url('images',$shirt->image)}}" title="Casual Shirt With Ruffle Hem"><img src="{{url('images',$shirt->image)}}" title="Casual Shirt With Ruffle Hem" alt="iPod Classic" /></a></div>
                  <div id="product-thumbnail" class="owl-carousel">
                    <div class="item">
                      <div class="image-additional"><a class="thumbnail fancybox" href="{{url('images',$shirt->image)}}" title="iPod Classic"> <img src="{{url('images',$shirt->image)}}" title="iPod Classic" alt="iPod Classic" /></a></div>
                    </div>
                    <div class="item">
                      <div class="image-additional"><a class="thumbnail fancybox" href="{{url('images',$shirt->image)}}" title="iPod Classic"> <img src="{{url('images',$shirt->image)}}" title="iPod Classic" alt="iPod Classic" /></a></div>
                    </div>
                    <div class="item">
                      <div class="image-additional"><a class="thumbnail fancybox" href="{{url('images',$shirt->image)}}" title="iPod Classic"> <img src="{{url('images',$shirt->image)}}" title="iPod Classic" alt="iPod Classic" /></a></div>
                    </div>
                    <div class="item">
                      <div class="image-additional"><a class="thumbnail fancybox" href="{{url('images',$shirt->image)}}" title="iPod Classic"> <img src="{{url('images',$shirt->image)}}" title="iPod Classic" alt="iPod Classic" /></a></div>
                    </div>
                    <div class="item">
                      <div class="image-additional"><a class="thumbnail fancybox" href="{{url('images',$shirt->image)}}" title="iPod Classic"> <img src="{{url('images',$shirt->image)}}" title="iPod Classic" alt="iPod Classic" /></a></div>
                    </div>
                    <div class="item">
                      <div class="image-additional"><a class="thumbnail fancybox" href="{{url('images',$shirt->image)}}" title="iPod Classic"> <img src="{{url('images',$shirt->image)}}" title="iPod Classic" alt="iPod Classic" /></a></div>
                    </div>
                    <div class="item">
                      <div class="image-additional"><a class="thumbnail fancybox" href="{{url('images',$shirt->image)}}" title="iPod Classic"> <img src="{{url('images',$shirt->image)}}" title="iPod Classic" alt="iPod Classic" /></a></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-sm-7 prodetail">
                <h1 class="productpage-title">{{$shirt->name}}</h1>
                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span><span class="riview"><a href="#">1 reviews</a> / <a href="#">Write a review</a></span> </div>
                <ul class="list-unstyled productinfo-details-top">
                  <li>
                    <h2 class="productpage-price">₦{{$shirt->price}}</h2>
                  </li>
                  <li><span class="productinfo-tax">Ex Tax: $100.00</span></li>
                </ul>
                <hr>
                <ul class="list-unstyled product_info">
                  <li>
                    <label>Brand:</label>
                    <span> <a href="#">{{$shirt->name}}</a></span></li>
                  <li>
                    <label>Product Code:</label>
                    <span> product 20</span></li>
                  <li>
                    <label>Availability:</label>
                    <span> In Stock</span></li>
                </ul>
                <hr>
                <p class="product-desc">{{$shirt->description}}</p>
                <div id="product">
                  <div class="form-group">
                    <div class="row">
                      <div class="Sort-by col-md-6">
                        <label>Sort by</label>
                        <select id="select-by-size" class="selectpicker form-control">
                          <option value="#" selected="selected">Small</option>
                          <option value="#">Medium</option>
                          <option value="#">Large</option>
                        </select>
                      </div>
                      <div class="Color col-md-6">
                        <label>Color</label>
                        <select id="select-by-color" class="selectpicker form-control">
                          <option value="#" selected="selected">Blue</option>
                          <option value="#">Green</option>
                          <option value="#">Orange</option>
                          <option value="#">White</option>
                        </select>
                      </div>
                    </div>
                    <div class="qty">
                      <label>Qty</label>
                      <input id="qty" placeholder="1" type="number">
                      <ul class="button-group list-btn">
                        <li>
                          <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                        </li>
                        <li>
                          <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                        </li>
                        <li>
                          <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                        </li>
                        <li>
                          <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="productinfo-tab">
              <ul class="nav nav-tabs">
                <li class="active"><a href="#tab-description" data-toggle="tab">Description</a></li>
                <li><a href="#tab-review" data-toggle="tab">Reviews (1)</a></li>
              </ul>
              <div class="tab-content">
                <div class="tab-pane active" id="tab-description">
                  <div class="cpt_product_description ">
                    <div>
               <p>       {{$shirt->description}}</p>
                    </div>
                  </div>
                  <!-- cpt_container_end --></div>
                <div class="tab-pane" id="tab-review">
                  <form class="form-horizontal">
                    <div id="review"></div>
                    <h2>Write a review</h2>
                    <div class="form-group required">
                      <div class="col-sm-12">
                        <label class="control-label" for="input-name">Your Name</label>
                        <input type="text" name="name" value="" id="input-name" class="form-control" />
                      </div>
                    </div>
                    <div class="form-group required">
                      <div class="col-sm-12">
                        <label class="control-label" for="input-review">Your Review</label>
                        <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>
                        <div class="help-block"><span class="text-danger">Note:</span> HTML is not translated!</div>
                      </div>
                    </div>
                    <div class="form-group required">
                      <div class="col-sm-12">
                        <label class="control-label">Rating</label>
                        &nbsp;&nbsp;&nbsp; Bad&nbsp;
                        <input type="radio" name="rating" value="1" />
                        &nbsp;
                        <input type="radio" name="rating" value="2" />
                        &nbsp;
                        <input type="radio" name="rating" value="3" />
                        &nbsp;
                        <input type="radio" name="rating" value="4" />
                        &nbsp;
                        <input type="radio" name="rating" value="5" />
                        &nbsp;Good</div>
                    </div>
                    <div class="buttons clearfix">
                      <div class="pull-right">
                        <button type="button" id="button-review" data-loading-text="Loading..." class="btn btn-primary">Continue</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <h3 class="productblock-title">Related Products</h3>
            <h4 class="title-subline">What’s so special? Check it out!</h4>
            <div class="box">
              <div id="related-slidertab" class="row owl-carousel product-slider">
                  @foreach ($products as $product)
                <div class="item">
                  <div class="product-thumb transition">
                    <div class="image product-imageblock"> <a href="{{route('shirt',$product->id)}}">
                      <img src="{{url('images',$product->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                      <img src="{{url('images',$product->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                      </a>
                      <ul class="button-group">
                        <li>
                          <button title="" data-placement="top" data-toggle="tooltip" class="wishlist" type="button" data-original-title="Add to Wish List"><i class="fa fa-heart-o"></i></button>
                        </li>
                        <li>
                          <button title="" data-placement="top" data-toggle="tooltip" class="compare" type="button" data-original-title="Compare this Product"><i class="fa fa-exchange"></i></button>
                        </li>
                        <li>
                          <button title="" data-placement="top" data-toggle="tooltip" class="quick-view" type="button" data-original-title="Quick View"><i class="fa fa-eye"></i></button>
                        </li>
                        <li>
                          <button title="Add to Cart" class="addtocart-btn" type="button">Add to Cart</button>
                        </li>
                      </ul>
                    </div>
                    <div class="caption product-detail">
                      <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                      <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">₦{{$product->name}}</a></h4>
                      <p class="price product-price">{{$product->price}}<span class="price-tax">Ex Tax: $100.00</span></p>
                    </div>
                  </div>
                </div>
              @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-top-cms parallax-container">
        <div class="parallax"><img src="image/prlx.jpg" alt="#"></div>
        <div class="container">
          <div class="row">
            <div class="newslatter">
              <form>
                <h5>SIGN UP FOR OUR DISCOUNTS TODAY!</h5>
                <h4 class="title-subline">Be sure to follow our blog and sign up for all of our mailing updates!</h4>
                <div class="input-group">
                  <input type="text" class=" form-control" placeholder="Your-email@website.com">
                  <button type="submit" value="Sign up" class="btn btn-large btn-primary">Subscribe</button>
                </div>
              </form>
            </div>
            <div class="footer-social">
              <ul>
                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li class="gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li class="youtube"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="container">
        <h3 class="client-title">Favourite Brands</h3>
        <h4 class="title-subline">The High Quality Products</h4>
        <div id="brand_carouse" class="owl-carousel brand-logo">
          <div class="item text-center"> <a href="#"><img src="{{asset('image/brand/brand1.png')}}" alt="Disney" class="img-responsive" /></a> </div>
          <div class="item text-center"> <a href="#"><img src="{{asset('image/brand/brand2.png')}}" alt="Dell" class="img-responsive" /></a> </div>
          <div class="item text-center"> <a href="#"><img src="{{asset('image/brand/brand3.png')}}" alt="Harley" class="img-responsive" /></a> </div>
          <div class="item text-center"> <a href="#"><img src="{{asset('image/brand/brand4.png')}}" alt="Canon" class="img-responsive" /></a> </div>
          <div class="item text-center"> <a href="#"><img src="{{asset('image/brand/brand5.png')}}" alt="Canon" class="img-responsive" /></a> </div>
          <div class="item text-center"> <a href="#"><img src="{{asset('image/brand/brand6.png')}}" alt="Canon" class="img-responsive" /></a> </div>
          <div class="item text-center"> <a href="#"><img src="{{asset('image/brand/brand7.png')}}" alt="Canon" class="img-responsive" /></a> </div>
          <div class="item text-center"> <a href="#"><img src="{{asset('image/brand/brand8.png')}}" alt="Canon" class="img-responsive" /></a> </div>
          <div class="item text-center"> <a href="#"><img src="{{asset('image/brand/brand9.png')}}" alt="Canon" class="img-responsive" /></a> </div>
          <div class="item text-center"> <a href="#"><img src="{{asset('image/brand/brand5.png')}}" alt="Canon" class="img-responsive" /></a> </div>
        </div>
      </div>
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
                  <li><a href="#">Home</a></li>
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
          
          
        @endsection
        