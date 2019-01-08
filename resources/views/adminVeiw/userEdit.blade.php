@extends('layouts.app')
@section('content')


<div class="card "  style="width: 50rem;">
  <div class="card-header ">
    <h1> EDIT USER</h1>
  </div>
  <div class="card-body">

<form action="/userEdit/{{$users->id}}" method="POST">
{{ csrf_field() }}
<input type="text" name="id" value="{{$users->id}}" class="form-control" placeholder="ID" />
</br>
 <input type="text" name="name" value="{{$users->name}}" class="form-control" placeholder="NAME" />
</br>
 <input type="text" name="email" value="{{$users->email}}" class="form-control" placeholder="EMAIL" />
</br>
 <input type="text" name="password" value="{{$users->password}}" class="form-control" placeholder="PASSWORD" />
</br>
<input type="text" name="phone" value="{{$users->phone}}" class="form-control" placeholder="PHONE" />
</br>
<a  class="btn btn-warning" href="/users"> Returne without Saving  </a>
<input class="btn btn-success"  type="submit" value="Confirm changes">

</form>


  </div>
</div>

@endsection('content')
