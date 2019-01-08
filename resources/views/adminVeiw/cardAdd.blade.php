@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
<h1> ADD PRODUCT </h1>
</head>
<body>


<form action="cardAdd" method="POST">
{{ csrf_field() }}

<div class="form-group{{$errors -> has('id') ? 'has-error' : ''}}">
 <input type="text" name="id" value="{{Request::old('id')}}" class="form-control"  placeholder="ID" />
</div>
</br>
<div class="form-group{{$errors -> has('quantity') ? 'has-error' : ''}}">
 <input type="text" name="quantity" value="{{Request::old('quantity')}}"  class="form-control" placeholder="Quantity" />
</div>
<div class="form-group{{$errors -> has('status') ? 'has-error' : ''}}">
 <input type="text" name="status" value="{{Request::old('status')}}" class="form-control"  placeholder="Status" />
</div>
</br>
<div class="form-group{{$errors -> has('pid') ? 'has-error' : ''}}">
 <input type="text" name="pid" value="{{Request::old('pid')}}" class="form-control"  placeholder="PID" />
</div>
</br>
<div class="form-group{{$errors -> has('cid') ? 'has-error' : ''}}">
 <input type="text" name="cid" value="{{Request::old('cid')}}" class="form-control"  placeholder="CID" />
</div>
</br>
<input type="submit" name="" value="Add Card"  class="btn btn-primary" >

<a  class="btn btn-primary" href="/cards"> Returne to  Card list  </a>

</form>

</body>
</html>
@endsection
