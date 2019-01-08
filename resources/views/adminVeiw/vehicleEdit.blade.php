@extends('layouts.app')
@section('content')


<div class="card "  style="width: 50rem;">
  <div class="card-header ">
    <h1> EDIT VEHICLE </h1>
  </div>
  <div class="card-body">

<form action="/vehicleEdit/{{$vehicles->id}}" method="POST">
{{ csrf_field() }}
<input type="text" name="id" value="{{$vehicles->id}}" class="form-control" placeholder="ID" />
</br>
 <input type="text" name="status" value="{{$vehicles->status}}" class="form-control" placeholder="Status" />
</br>
 <input type="text" name="vehicle_number" value="{{$vehicles->vehicle_number}}" class="form-control" placeholder="Vehicle_Number" />
</br>
 <input type="text" name="uid" value="{{$vehicles->uid}}" class="form-control" placeholder="USER_ID" />
</br>
<input type="text" name="oid" value="{{$vehicles->oid}}" class="form-control" placeholder="ORDER_ID" />
</br>
<a  class="btn btn-warning" href="/vehicles"> Returne without Saving  </a>
<input class="btn btn-success"  type="submit" value="Confirm changes">

</form>


  </div>
</div>

@endsection('content')
