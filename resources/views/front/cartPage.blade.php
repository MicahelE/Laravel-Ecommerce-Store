{{-- <div id="cartpage" class="container section"> --}}
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
  {{-- </div> --}}
  <!-- / .container -->