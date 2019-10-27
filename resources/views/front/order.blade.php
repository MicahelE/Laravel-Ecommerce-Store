@extends('layout.main')


@section('content')

<div>
<div class="row">
<div class="col-md-5 col-md-offset-3">
{!!Form::open(['route'=> 'order.store', 'method' =>'post'])!!}
<h2 class="center"> Add Order</h2>

<div class="form-group">
    {{Form::label('phone', 'phone') }}
    {{Form::text('phone', $user->userInfo->phone, array('class'=> 'form-control')) }}
    </div>
    
    <div class="form-group">
    {{Form::label('address', 'address') }}
    {{Form::text('address', $user->userInfo->address, array('class'=> 'form-control')) }}
    </div>
    <div class="form-group">
    {{Form::label('DOB', 'DOB') }}
    {{Form::text('DOB', $user->userInfo->DOB, array('class'=> 'form-control')) }}
    </div>
    <div class="form-group">
        {{Form::label('city', 'city') }}
        {{Form::text('city', $user->userInfo->city, array('class'=> 'form-control')) }}
        </div>
    
        <div class="form-group">
            {{Form::label('state', 'state') }}
            {{Form::text('state', $user->userInfo->state, array('class'=> 'form-control')) }}
            </div>
    
            <div class="form-group">
                {{Form::label('delivery', 'delivery') }}
                {{Form::text('delivery', null, array('class'=> 'form-control')) }}
                </div>
    
                <div class="form-group">
                    {{Form::label('payment', 'online payment') }}
                    {{Form::radio('payment', 'online payment') }}
                    {{Form::label('payment', 'offline payment') }}
                    {{Form::radio('payment', 'offline payment') }}
                    </div>
                    <div class="form-group">
                        {{Form::label('method', 'Pickup') }}
                        {{Form::radio('method', 'Pickup') }}
                        {{Form::label('method', 'Deliver to location') }}
                        {{Form::radio('method', 'Deliver to location') }}
                        </div>
    
    
                        {{Form::submit('Create',  array('class'=> 'btn btn-default')) }}
    </div>
        

{!! Form::close() !!}
</div> 
</div>
</div>
@endsection