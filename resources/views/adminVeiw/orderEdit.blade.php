
@extends('layouts.app')
@section('content')


<div class="card "  style="width: 50rem;">
  <div class="card-header ">
    <h1> EDIT ORDER</h1>
  </div>
  <div class="card-body">

<form action="/orderEdit/{{$orders->id}}" method="POST">
{{ csrf_field() }}
<input type="text" name="id" value="{{$orders->id}}" class="form-control" placeholder="ID" />
</br>
 <input type="text" name="quantity" value="{{$orders->quantity}}" class="form-control" placeholder="Quantity" />
</br>
 <input type="text" name="deliveryStatus" value="{{$orders->deliveryStatus}}" class="form-control" placeholder="DeliveryStatus" />
</br>
 <input type="text" name="vehicle" value="{{$orders->vehicle}}" class="form-control" placeholder="Vehicle" />
</br>
<input type="text" name="cid" value="{{$orders->cid}}" class="form-control" placeholder="CUSTOMER_ID" />
</br>
<input type="text" name="pid" value="{{$orders->pid}}" class="form-control" placeholder="PRODUCT_ID" />
</br>
<input type="text" name="uid" value="{{$orders->uid}}" class="form-control" placeholder="USER_ID" />
</br>
<a  class="btn btn-warning" href="/orders"> Returne without Saving  </a>
<input class="btn btn-success"  type="submit" value="Confirm changes">

</form>


  </div>
</div>

@endsection('content')
