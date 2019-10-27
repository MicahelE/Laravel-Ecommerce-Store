@extends('layout.main')


@section('content')
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
                                    {{-- <div class=" content row"> --}}
                                        {{-- <div class="category-page-wrapper"> --}}
                                          <div class="col-md-2 text-right sort-wrapper">
                                            <label class="control-label" for="input-sort">Sort By :</label>
                                            <div class="sort-inner">
                                               
                                            </div>
                                          </div>
                                          {{-- <div class="col-md-1 text-right page-wrapper">
                                            <label class="control-label" for="input-limit">Show :</label>
                                            <div class="limit">
                                              <select id="input-limit" class="form-control">
                                                <option value="8" selected="selected">08</option>
                                                <option value="25">25</option>
                                                <option value="50">50</option>
                                                <option value="75">75</option>
                                                <option value="100">100</option>
                                              </select>
                                            </div>
                                          </div>  --}}
                                           <div class="col-md-6 list-grid-wrapper">
                                              {{-- <a href="#" id="compare-total">Product Compare (0)</a> --}}
                                            <div class="btn-group btn-list-grid">
                                              <button type="button" id="list-view" class="btn btn-default list" data-toggle="tooltip" title="List"></button>
                                              <button type="button" id="grid-view" class="btn btn-default grid" data-toggle="tooltip" title="Grid"></button>
                                            </div>
                                          </div> 
                                        {{-- </div> --}}
                                        <br />
                                        <div class="grid-list-wrapper">
                                                @foreach ($products as $product)
                                          <div class="product-layout product-list col-xs-12">
                                            <div class="product-thumb">
                                              <div class="image product-imageblock">
                                              <a href="{{route('shirt',$product->id)}}">
                                              <img src="{{url('images',$product->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                              <img src="{{url('images',$product->image)}}" alt="iPod Classic" title="iPod Classic" class="img-responsive" />
                                              </a>
                                                <ul class="button-group grid-btn">
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
                                                    <button type="button" class="addtocart-btn" title="Add to Cart"><a href="{{route('cart.addItem',$product->id)}}">Add to Cart</a></button>
                                                  </li>
                                                </ul>
                                              </div>
                                              <div class="caption product-detail">
                                                <div class="rating"> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i><i class="fa fa-star fa-stack-2x"></i></span> <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-2x"></i></span> </div>
                                                <h4 class="product-name"><a href="#" title="Casual Shirt With Ruffle Hem">{{$product->name}}</a></h4>
                                                <p class="price product-price">₦{{$product->price}}</p>
                                                <p class="product-desc"> {{$product->description}}</p>
                                                <ul class="button-group list-btn">
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
                                                    <button type="button" class="addtocart-btn" data-toggle="tooltip" data-placement="top" title="Add to Cart"  ><i class="fa fa-shopping-bag"></i></button>
                                                  </li>
                                                </ul>
                                              </div>
                                            </div>
                                          </div>
                                          @endforeach
                                          
                                        </div>
                                       
                                      {{-- </div> --}}
                                {{-- </div> --}}
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </form>           
        </div>
@endsection