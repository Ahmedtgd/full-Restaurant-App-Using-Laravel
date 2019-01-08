@extends('layouts.app')
@section('content')


<div class="card "  style="width: 50rem;">
  <div class="card-header ">
    <h1> EDIT CUSTOMER </h1>
  </div>
  <div class="card-body">

<form action="/customerEdit/{{$customers->id}}" method="POST">
{{ csrf_field() }}
<input type="text" name="id" value="{{$customers->id}}" class="form-control" placeholder="ID" />
</br>
 <input type="text" name="name" value="{{$customers->name}}" class="form-control" placeholder="NAME" />
</br>
 <input type="text" name="email" value="{{$customers->email}}" class="form-control" placeholder="EMAIL" />
</br>
 <input type="text" name="password" value="{{$customers->password}}" class="form-control" placeholder="PASSWORD" />
</br>
<input type="text" name="phone" value="{{$customers->phone}}" class="form-control" placeholder="PHONE" />
</br>

<input type="text" name="address" value="{{$customers->address}}" class="form-control" placeholder="ADDRESS" />
</br>
<a  class="btn btn-warning" href="/customers"> Returne without Saving  </a>
<input class="btn btn-success"  type="submit" value="Confirm changes">

</form>







  </div>
</div>

@endsection('content')
