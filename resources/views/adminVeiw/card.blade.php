@extends('layouts.app')

@section('content')

<div class="container">
  <a class="btn btn-outline-secondary navbar-brand nav-link   navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/admin') }}">Go Home</a>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Cards</div>

                <div class="card-body">
<a  class="btn btn-outline-success btn-lg btn-block" href="/cardAdd">Add new card   </a>

                 <table class="table table-striped">
                   <thead>
                     <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Quantity</th>
                       <th scope="col">Status</th>
                       <th scope="col">Product_ID</th>
                       <th scope="col">Customer_ID</th>
                       <th scope="col">Delete</th>
                       <th scope="col">Edit</th>
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($cards as $c)
                    <tr>
                      <th scope="row">{{$c->id}}</th>
                      <td> {{$c->quantity}}</td>
                      <td> {{$c->status}}</td>
                      <td> {{$c->pid}}</td>
                      <td> {{$c->cid}}</td> 
                      <td>

                      <a class="btn btn-outline-primary" href="cardEdit/{{$c->id}}">EDIT</a>
                      </td>
                      <td>
                      <a class="btn btn-outline-danger" href="cardAdd/{{$c->id}}">Delete</a>
                      </td>
                    </tr>
                      @endforeach

                  </tbody>
                </table>
<div class="paginations col-lg-12">
  {!! $cards->render() !!}
</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
