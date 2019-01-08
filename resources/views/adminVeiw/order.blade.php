@extends('layouts.app')

@section('content')
  <a class="btn btn-outline-secondary navbar-brand nav-link   navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/admin') }}">Go Home</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Orders</div>

                <div class="card-body">
 <a  class="btn btn-outline-success btn-lg btn-block" href="/orderAdd"> Add new Order   </a>
                 <table class="table table-striped">
                   <thead>
                     <tr>
                       <th scope="col">ID</th>
                       <th scope="col">quantity</th>
                       <th scope="col">deliveryStatus</th>
                       <th scope="col">vehicle</th>
                       <th scope="col">cid</th>
                       <th scope="col">pid</th>
                        <th scope="col">uid</th>
                       <th scope="col">Delete</th>
                       <th scope="col">Edit</th>
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($orders as $or)
                    <tr>
                      <th scope="row">{{$or->id}}</th>
                      <td> {{$or->quantity}}</td>
                      <td> {{$or->deliveryStatus}}</td>
                      <td> {{$or->vehicle}}</td>
                      <td> {{$or->cid}}</td>
                      <td> {{$or->pid}}</td>
                      <td> {{$or->uid}}</td>
                      <td> <a class="btn btn-outline-primary" href="orderEdit/{{$or->id}}">EDIT</a></td>
                      <td> <a class="btn btn-outline-danger" href="orderDelete/{{$or->id}}">Delete</a></td>
                    </tr>
                      @endforeach

                  </tbody>
                </table>
                <div class="paginations col-lg-12">
                  {!! $orders->render() !!}
                </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
