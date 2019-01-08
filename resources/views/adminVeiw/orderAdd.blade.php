
@extends('layouts.app')
@section('content')


<html>
<head>
<h1> ADD Order </h1>
</head>
<body>


<form action="orderAdd" method="POST">
{{ csrf_field() }}

<div class="form-group{{$errors -> has('id') ? 'has-error' : ''}}">
 <input type="text" name="id" value="{{Request::old('id')}}" class="form-control"  placeholder="ID" />
</div>
</br>
<div class="form-group{{$errors -> has('quantity') ? 'has-error' : ''}}">
 <input type="text" name="quantity" value="{{Request::old('quantity')}}"  class="form-control" placeholder="QUANTITY" />
</div>
<div class="form-group{{$errors -> has('deliveryStatus') ? 'has-error' : ''}}">
 <input type="text" name="deliveryStatus" value="{{Request::old('deliveryStatus')}}" class="form-control"  placeholder="DELIVERYSTATUS" />
</div>
</br>
<div class="form-group{{$errors -> has('vehicle') ? 'has-error' : ''}}">
 <input type="text" name="vehicle" value="{{Request::old('vehicle')}}" class="form-control"  placeholder="vehicle" />
</div>
</br>
<div class="form-group{{$errors -> has('cid') ? 'has-error' : ''}}">
 <input type="text" name="cid" value="{{Request::old('cid')}}" class="form-control"  placeholder="CUSTOMER_ID" />
</div>
</br>
<div class="form-group{{$errors -> has('pid') ? 'has-error' : ''}}">
 <input type="text" name="pid" value="{{Request::old('pid')}}" class="form-control"  placeholder="PRODUCT_ID" />
</div>
</br>
<div class="form-group{{$errors -> has('uid') ? 'has-error' : ''}}">
 <input type="text" name="uid" value="{{Request::old('uid')}}" class="form-control"  placeholder="USER_ID" />
</div>
</br>
<input type="submit" name="" value="Add Order"  class="btn btn-primary" >

<a  class="btn btn-primary" href="/orders"> Returne to  Orders list  </a>

</form>

</body>
</html>
@endsection
