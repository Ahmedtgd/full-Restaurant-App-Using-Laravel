@extends('layouts.app')
@section('content')


<div class="card "  style="width: 50rem;">
  <div class="card-header ">
    <h1> EDIT PRODUCT </h1>
  </div>
  <div class="card-body">

<form action="/productEdit/{{$products->id}}" method="POST">
{{ csrf_field() }}
<input type="text" name="id" value="{{$products->id}}" class="form-control" placeholder="ID" />
</br>
 <input type="text" name="name" value="{{$products->name}}" class="form-control" placeholder="NAME" />
</br>
 <input type="text" name="description" value="{{$products->description}}" class="form-control" placeholder="DESCRIPTION" />
</br>
 <input type="text" name="price" value="{{$products->price}}" class="form-control" placeholder="PRICE" />
</br>
<input type="text" name="file" value="{{$products->file}}" class="form-control" placeholder="IMG/URL" />
</br>

<input type="text" name="fil" value="{{$products->fil}}" class="form-control" placeholder="IMG/URL" />
</br>
<a  class="btn btn-warning" href="/products"> Returne without Saving  </a>
<input class="btn btn-success"  type="submit" value="Confirm changes">

</form>


  </div>
</div>

@endsection('content')
