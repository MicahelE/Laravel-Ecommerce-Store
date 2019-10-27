@extends('layout.main')

@section('content')
<div class="mainbanner">
        <div id="main-banner" class="owl-carousel home-slider">
          <div class="item"> <a href="#"><img src="image/banners/ecommerce-banner.jpg" alt="main-banner1" class="img-responsive" /></a> </div>
          <div class="item"> <a href="#"><img src="image/banners/ecommerce-banner1.jpg" alt="main-banner2" class="img-responsive" /></a> </div>
          <div class="item"> <a href="#"><img src="image/banners/ecommerce-banner2.jpg" alt="main-banner3" class="img-responsive" /></a> </div>
          <div class="item"> <a href="#"><img src="image/banners/1.png" alt="main-banner3" class="img-responsive" /></a> </div>
          <div class="item"> <a href="#"><img src="image/banners/2.png" alt="main-banner3" class="img-responsive" /></a> </div>
          <div class="item"> <a href="#"><img src="image/banners/3.png" alt="main-banner3" class="img-responsive" /></a> </div>
          <div class="item"> <a href="#"><img src="image/banners/4.png" alt="main-banner3" class="img-responsive" /></a> </div>
          <div class="item"> <a href="#"><img src="image/banners/5.png" alt="main-banner3" class="img-responsive" /></a> </div>
          {{-- <div class="item"> <a href="#"><img src="image/banners/6.png" alt="main-banner3" class="img-responsive" /></a> </div> --}}
          <div class="item"> <a href="#"><img src="image/banners/6i.png" alt="main-banner3" class="img-responsive" /></a> </div>
        </div>
      </div>
      <div class="container">
        <div class="cms_banner">
          <div class="row">
                <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="banner sub-hover">
                  <a href="#"><img src="image/banners/sub1.jpg" alt="Sub Banner1" class="img-responsive"></a>
                  <div class="bannertext">
                  <h2>Computers </h2>
                  <p>From Top Brands</p>
                  <button class="btn">Shop Now</button>
                  </div>        
              </div>
            </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="banner sub-hover">
                  <a href="#"><img src="image/banners/sub2.jpg" alt="Sub Banner2" class="img-responsive"></a>
                  <div class="bannertext">
                  <h2>Gadgets </h2>
                  <p>High Quality</p>
                  <button class="btn">Shop Now</button>
                  </div>            
              </div>
            </div>
                <div class="col-xs-12 col-sm-4 col-md-4">
                  <div class="banner sub-hover">
                  <a href="#"><img src="image/banners/sub3.jpg" alt="Sub Banner3" class="img-responsive"></a>
                  <div class="bannertext">
                  <h2>Phones </h2>
                  <p>All brands</p>
                  <button class="btn">Shop Now</button>
                  </div>        
                </div>
            </div>
          </div>
        </div>
      </div>
      <div id="center">
        <div class="container">
          <div class="row">
            <div class="content col-sm-12">
              <div class="customtab">
                <h3 class="productblock-title">Our Collection</h3>
                <div id="tabs" class="customtab-wrapper">
                  <ul class='customtab-inner'>
                    <li class='tab'><a href="#tab-furnitur">Popular</a></li>
                    <li class='tab'><a href="#tab-livin">Best Sellers</a></li>
                    <li class='tab'><a href="#tab-kitche">Specials</a></li>
                    <li class='tab'><a href="#tab-outdoo">New product</a></li>
                  </ul>
                </div>
              </div>
              <!-- tab-furniture-->
              <div id="tab-furnitur" class="tab-content">
                    @forelse($shirts->chunk(8) as $chunk)
                <div class="row">
                        @foreach ($chunk as $shirt)
                  <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <div class="item">
                      <div class="product-thumb">
                        <div class="image product-imageblock"> <a href="{{route('shirt',$shirt->id)}}"> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                          <ul class="button-group">
                            <li>
                              <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><a href="{{route('wishlist.create',$shirt->id)}}"><i class="fa fa-heart-o"></i></a></button>
                            </li>
                            <li>
                              <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                            </li>
                            <li>
                              <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                            </li>
                            <li>
                              <button type="button" class="addtocart-btn" title="Add to Cart"  > <a href="{{route('cart.addItem',$shirt->id)}}">Add to Cart</a></button>
                            </li>
                          </ul>
                        </div>
                        <div class="caption product-detail">
                          <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                          <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$shirt->name}}</a></h4>
                          <p class="price product-price">₦{{$shirt->price}}<span class="price-tax">Ex Tax: ₦100.00</span></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  @endforeach
                  
                  
                  <div class="viewmore">
                    <div class="btn">View More All Products</div>
                  </div>
                  
                </div>
              </div>
              <!-- tab-living-->
              <div id="tab-livin" class="tab-content">
                    {{-- @forelse($shirts->chunk(4) as $chunk) --}}
                    <div class="row">
                            @foreach ($chunk as $shirt)
                      <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                          <div class="product-thumb">
                            <div class="image product-imageblock"> <a href="{{route('shirt',$shirt->id)}}"> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{url('images',$shirt->image)}} alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                              <ul class="button-group">
                                <li>
                                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                </li>
                                <li>
                                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                </li>
                                <li>
                                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                                </li>
                                <li>
                                  <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                                </li>
                              </ul>
                            </div>
                            <div class="caption product-detail">
                              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                              <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$shirt->name}}</a></h4>
                              <p class="price product-price">₦{{$shirt->price}}<span class="price-tax">Ex Tax: ₦100.00</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                  <div class="viewmore">
                    <div class="btn">View More All Products</div>
                  </div>
                </div>
              </div>
              <!-- tab-living-->
              <div id="tab-kitche" class="tab-content">
                    {{-- @forelse($shirts->chunk(4) as $chunk) --}}
                    <div class="row">
                            @foreach ($chunk as $shirt)
                      <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                          <div class="product-thumb">
                            <div class="image product-imageblock"> <a href="{{route('shirt',$shirt->id)}}"> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                              <ul class="button-group">
                                <li>
                                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                </li>
                                <li>
                                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                </li>
                                <li>
                                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                                </li>
                                <li>
                                  <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                                </li>
                              </ul>
                            </div>
                            <div class="caption product-detail">
                              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                              <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$shirt->name}}</a></h4>
                              <p class="price product-price">₦{{$shirt->price}}<span class="price-tax">Ex Tax: ₦100.00</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                  <div class="viewmore">
                    <div class="btn">View More All Products</div>
                  </div>
                </div>
              </div>
              <!-- tab-decor-->
              <div id="tab-outdoo" class="tab-content">
                    {{-- @forelse($shirts->chunk(4) as $chunk) --}}
                    <div class="row">
                            @foreach ($chunk as $shirt)
                      <div class="product-layout  product-grid  col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="item">
                          <div class="product-thumb">
                            <div class="image product-imageblock"> <a href="{{route('shirt',$shirt->id)}}"> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="image/product/product1-1.jpg" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                              <ul class="button-group">
                                <li>
                                  <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                                </li>
                                <li>
                                  <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                                </li>
                                <li>
                                  <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                                </li>
                                <li>
                                  <button type="button" class="addtocart-btn" title="Add to Cart"  > <a href="{{route('cart.addItem',$shirt->id)}}">Add to Cart</a> </button>
                                </li>
                              </ul>
                            </div>
                            <div class="caption product-detail">
                              <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                              <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$shirt->name}}</a></h4>
                              <p class="price product-price">₦{{$shirt->price}}<span class="price-tax">Ex Tax: ₦100.00</span></p>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
                  <div class="viewmore">
                        @empty
                        <h3>No items</h3>
                        
                        @endforelse
                    <div class="btn">View More All Products</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <div class="parallax-container">
        <div class="parallax"><img src="image/prlx.jpg" alt="#"></div>
        <div class="container">
          <ul id="testimonial" class="row owl-carousel product-slider">
            <li class="item">
              <div class="panel-default">
                <div class="testimonial-image z-depth-5"><img src="image/t1.png" alt="#"></div>
                <div class="testimonial-name">
                  <h2>Janet Wilson</h2>
                </div>
                <div class="testimonial-designation">
                  <p>Web Designer</p>
                </div>
                <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum  ut labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>
              </div>
            </li>
            <li class="item">
              <div class="panel-default">
                <div class="testimonial-image"><img src="image/t2.png" alt="#"></div>
                <div class="testimonial-name">
                  <h2>Linda Howard</h2>
                </div>
                <div class="testimonial-designation">
                  <p>Web Deweloper</p>
                </div>
                <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum  ut labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>
              </div>
            </li>
            <li class="item">
              <div class="panel-default">
                <div class="testimonial-image"><img src="image/t3.png" alt="#"></div>
                <div class="testimonial-name">
                  <h2>Janet Wilson</h2>
                </div>
                <div class="testimonial-designation">
                  <p>Web Designer</p>
                </div>
                <div class="testimonial-desc">Rem ipsum doLoremRem ipsum doLorem ipsum ipsum doLorem ipsum  ut labore et dolore ma ipsum ut labore etdolore ipsum doLorem ipsum ut labore et dolore mamagna. Lorem ipsumut labore et dolore mamagna. Lorem ipsum doLorem ipsum dolor sit amet, consectetur adipisicing.</div>
              </div>
            </li>
          </ul>
        </div>
      </div> --}}
      @php $shirt=$shirts->find(6) @endphp
      <div class="container">
          <div class="content">
            <div class="customtab">
              <h3 class="productblock-title">Featured Products</h3>
              <h4 class="title-subline">What’s so special? Check it out!</h4>
            </div>
            <div id="tab-furniture" class="tab-content">
              <div class="box">
                <div id="special-slidertab" class="row owl-carousel product-slider">
                  <div class="item">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product.html"> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                        <ul class="button-group">
                          <li>
                            <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                          </li>
                          <li>
                            <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                          </li>
                          <li>
                            <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                          </li>
                          <li>
                            <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                          </li>
                        </ul>
                      </div>
                      <div class="caption product-detail">
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$shirt->name}}</a></h4>
                        <p class="price product-price">₦{{$shirt->price}}<span class="price-tax">Ex Tax: $100.00</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product.html"> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                        <ul class="button-group">
                          <li>
                            <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                          </li>
                          <li>
                            <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                          </li>
                          <li>
                            <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                          </li>
                          <li>
                            <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                          </li>
                        </ul>
                      </div>
                      <div class="caption product-detail">
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$shirt->name}}</a></h4>
                        <p class="price product-price">₦{{$shirt->price}}<span class="price-tax">Ex Tax: $100.00</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product.html"> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                        <ul class="button-group">
                          <li>
                            <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                          </li>
                          <li>
                            <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                          </li>
                          <li>
                            <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                          </li>
                          <li>
                            <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                          </li>
                        </ul>
                      </div>
                      <div class="caption product-detail">
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$shirt->name}}</a></h4>
                        <p class="price product-price">₦{{$shirt->price}}<span class="price-tax">Ex Tax: $100.00</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product.html"> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                        <ul class="button-group">
                          <li>
                            <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                          </li>
                          <li>
                            <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                          </li>
                          <li>
                            <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                          </li>
                          <li>
                            <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                          </li>
                        </ul>
                      </div>
                      <div class="caption product-detail">
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$shirt->name}}</a></h4>
                        <p class="price product-price">₦{{$shirt->price}}<span class="price-tax">Ex Tax: $100.00</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product.html"> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                        <ul class="button-group">
                          <li>
                            <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                          </li>
                          <li>
                            <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                          </li>
                          <li>
                            <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                          </li>
                          <li>
                            <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                          </li>
                        </ul>
                      </div>
                      <div class="caption product-detail">
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                        <p class="price product-price">₦{{$shirt->price}}<span class="price-tax">Ex Tax: $100.00</span></p>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="product-thumb">
                      <div class="image product-imageblock"> <a href="product.html"> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> <img src="{{url('images',$shirt->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" /> </a>
                        <ul class="button-group">
                          <li>
                            <button type="button" class="wishlist" data-toggle="tooltip" data-placement="top" title="Add to Wish List" ><i class="fa fa-heart-o"></i></button>
                          </li>
                          <li>
                            <button type="button" class="compare" data-toggle="tooltip" data-placement="top" title="Compare this Product" ><i class="fa fa-exchange"></i></button>
                          </li>
                          <li>
                            <button type="button" class="quick-view" data-toggle="tooltip" data-placement="top" title="Quick View" ><i class="fa fa-eye"></i></button>
                          </li>
                          <li>
                            <button type="button" class="addtocart-btn" title="Add to Cart"  > Add to Cart </button>
                          </li>
                        </ul>
                      </div>
                      <div class="caption product-detail">
                        <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                        <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">Casual Shirt With Ruffle Hem</a></h4>
                        <p class="price product-price">₦{{$shirt->price}}<span class="price-tax">Ex Tax: $100.00</span></p>
                      </div>
                    </div>
                  </div>
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
      @yield('footer')
@endsection