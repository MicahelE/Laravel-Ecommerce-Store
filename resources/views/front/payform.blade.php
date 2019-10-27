@extends('layout.main')


@section('content')
<form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" class="form-horizontal" role="form">
    <div class="row" style="margin-bottom:40px;">
      <div class="col-md-8 col-md-offset-2">
          @foreach($cartItems as $cartItem )
        <p>
            <div>
                {{$cartItem->name}}  {{$cartItem->price}} <br>
            </div>
 
        </p>
        @endforeach
        Total:{{$order->total}}
        <input type="hidden" name="email" value="{{$order->email}}"> {{-- required --}}
        <input type="hidden" name="orderID" value={{$order->id}}>
        <input type="hidden" name="amount" value="{{$order->total*100}}"> {{-- required in kobo --}}
        <input type="hidden" name="quantity" value="{{$order->items}}">
        {{-- <input type="hidden" name="metadata" value="{{ json_encode($array = ['key_name' => 'value',]) }}" > For other necessary things you want to add to your payload. it is optional though --}}
        <input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
        <input type="hidden" name="key" value="{{ config('paystack.secretKey') }}"> {{-- required --}}
        {{ csrf_field() }} {{-- works only when using laravel 5.1, 5.2 --}}

         <input type="hidden" name="_token" value="{{ csrf_token() }}"> {{-- employ this in place of csrf_field only in laravel 5.0 --}}


        <p>
          <button class="btn btn-success btn-lg btn-block" type="submit" value="Pay Now!">
          <i class="fa fa-plus-circle fa-lg"></i> Pay Now!
          </button>
        </p>
      </div>
    </div>
</form>
@endsection