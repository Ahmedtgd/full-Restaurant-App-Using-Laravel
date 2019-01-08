@extends('layouts.app')
@section('content')


<html>
<head>
<h1> ADD Vehicle </h1>
</head>
<body>


<form action="vehicleAdd" method="POST">
{{ csrf_field() }}

<div class="form-group{{$errors -> has('id') ? 'has-error' : ''}}">
 <input type="text" name="id" value="{{Request::old('id')}}" class="form-control"  placeholder="ID" />
</div>
</br>
<div class="form-group{{$errors -> has('status') ? 'has-error' : ''}}">
 <input type="text" name="status" value="{{Request::old('status')}}"  class="form-control" placeholder="Status" />
</div>
<div class="form-group{{$errors -> has('vehicle_number') ? 'has-error' : ''}}">
 <input type="text" name="vehicle_number" value="{{Request::old('vehicle_number')}}" class="form-control"  placeholder="Vehicle_Number" />
</div>
</br>
<div class="form-group{{$errors -> has('uid') ? 'has-error' : ''}}">
 <input type="text" name="uid" value="{{Request::old('uid')}}" class="form-control"  placeholder="USER_ID" />
</div>
</br>
<div class="form-group{{$errors -> has('oid') ? 'has-error' : ''}}">
 <input type="text" name="oid" value="{{Request::old('oid')}}" class="form-control"  placeholder="ORDER_ID" />
</div>
</br>
<input type="submit" name="" value="Add Vehicle"  class="btn btn-primary" >

<a  class="btn btn-primary" href="/vehicles"> Returne to  Vehicles list  </a>

</form>

</body>
</html>
@endsection
