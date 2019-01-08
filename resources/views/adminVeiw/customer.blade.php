@extends('layouts.app')

@section('content')
  <a class="btn btn-outline-secondary navbar-brand nav-link   navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/admin') }}">Go Home</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Customers</div>

                <div class="card-body">
                 <a  class="btn btn-outline-success btn-lg btn-block" href="/customerAdd">Add new customer  </a>
                 <table class="table table-striped">
                   <thead>
                     <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Name</th>
                       <th scope="col">Email</th>
                       <th scope="col">Password</th>
                       <th scope="col">Phone</th>
                       <th scope="col">Address</th>
                       <th scope="col">Delete</th>
                       <th scope="col">Edit</th>
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($customers as $cu)
                    <tr>
                      <th scope="row">{{$cu->id}}</th>
                      <td> {{$cu->name}}</td>
                      <td> {{$cu->email}}</td>
                      <td> {{$cu->password}}</td>
                      <td> {{$cu->phone}}</td>
                      <td> {{$cu->address}}</td>
                      <td> <a class="btn btn-outline-primary" href="customerEdit/{{$cu->id}}">EDIT</a></td>
                      <td> <a class="btn btn-outline-danger" href="customerAdd/{{$cu->id}}">Delete</a></td>


                    </tr>
                      @endforeach

                  </tbody>
                </table>
                <div class="paginations col-lg-12">
                  {!! $customers->render() !!}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
