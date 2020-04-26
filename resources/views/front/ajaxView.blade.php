{{-- <li class="dropdown"> --}}
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
  {{-- </li> --}}
  <!-- / Cart -->