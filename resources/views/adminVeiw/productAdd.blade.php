@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html>
<head>
<h1> ADD PRODUCT </h1>
</head>
<body>


<form action="productAdd" method="POST">
{{ csrf_field() }}

<div class="form-group{{$errors -> has('id') ? 'has-error' : ''}}">
 <input type="text" name="id" value="{{Request::old('id')}}" class="form-control"  placeholder="ID" />
</div>
</br>
<div class="form-group{{$errors -> has('name') ? 'has-error' : ''}}">
 <input type="text" name="name" value="{{Request::old('name')}}"  class="form-control" placeholder="NAME" />
</div>
<div class="form-group{{$errors -> has('description') ? 'has-error' : ''}}">
 <input type="text" name="description" value="{{Request::old('description')}}" class="form-control"  placeholder="DESCRIPTION" />
</div>
</br>
<div class="form-group{{$errors -> has('price') ? 'has-error' : ''}}">
 <input type="text" name="price" value="{{Request::old('price')}}" class="form-control"  placeholder="PRICE" />
</div>
</br>
<div class="form-group{{$errors -> has('file') ? 'has-error' : ''}}">
 <input type="text" name="file" value="{{Request::old('file')}}" class="form-control"  placeholder="IMG/URL" />
</div>
</br>
<div class="form-group{{$errors -> has('fil') ? 'has-error' : ''}}">
 <input type="text" name="fil" value="{{Request::old('fil')}}" class="form-control"  placeholder="IMG/URL" />
</div>
<input type="submit" name="" value="Add  Product "  class="btn btn-primary" >

<a  class="btn btn-primary" href="/products"> Returne to  Product list  </a>

</form>

</body>
</html>
@endsection
