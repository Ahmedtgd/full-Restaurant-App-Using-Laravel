@extends('layouts.app')

@section('content')
  <a class="btn btn-outline-secondary navbar-brand nav-link   navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/admin') }}">Go Home</a>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-20  ">
            <div class="card">
                <div class="card-header">Vehicles</div>

                <div class="card-body">
             <a  class="btn btn-outline-success btn-lg btn-block" href="/vehicleAdd"> Add new vehicles   </a>

          
                 <table class="table table-striped">
                   <thead>
                     <tr>
                       <th scope="col">ID</th>
                       <th scope="col">status</th>
                       <th scope="col">vehicle_number</th>
                       <th scope="col">uid</th>
                       <th scope="col">oid</th>
                       <th scope="col">Delete</th>
                       <th scope="col">Edit</th>
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($vehicles as $v)
                    <tr>
                      <th scope="row">{{$v->id}}</th>
                      <td> {{$v->status}}</td>
                      <td> {{$v->vehicle_number}}</td>
                      <td> {{$v->uid}}</td>
                      <td> {{$v->oid}}</td>
                      <td> <a class="btn btn-outline-primary" href="vehicleEdit/{{$v->id}}">EDIT</a></td>
                      <td> <a class="btn btn-outline-danger" href="vehicleDelete/{{$v->id}}">Delete</a></td>
                    </tr>
                      @endforeach

                  </tbody>
                </table>
                <div class="paginations col-lg-12">
                  {!! $vehicles->render() !!}
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
