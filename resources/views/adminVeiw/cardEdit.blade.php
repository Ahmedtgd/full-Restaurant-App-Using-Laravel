@extends('layouts.app')
@section('content')


<div class="card "  style="width: 50rem;">
  <div class="card-header ">
    <h1> EDIT CARD </h1>
  </div>
  <div class="card-body">

<form action="/cardEdit/{{$cards->id}}" method="POST">
{{ csrf_field() }}
<input type="text" name="id" value="{{$cards->id}}" class="form-control" placeholder="ID" />
</br>
 <input type="text" name="quantity" value="{{$cards->quantity}}" class="form-control" placeholder="Quantity" />
</br>
 <input type="text" name="status" value="{{$cards->status}}" class="form-control" placeholder="Status" />
</br>
 <input type="text" name="pid" value="{{$cards->pid}}" class="form-control" placeholder="PID" />
</br>
<input type="text" name="cid" value="{{$cards->cid}}" class="form-control" placeholder="CID" />
</br>
<a  class="btn btn-warning" href="/cards"> Returne without Saving  </a>
<input class="btn btn-success"  type="submit" value="Confirm changes">

</form>


  </div>
</div>

@endsection('content')
