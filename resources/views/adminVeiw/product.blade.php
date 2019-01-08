@extends('layouts.app')

@section('content')

<div class="container">
  <a class="btn btn-outline-secondary navbar-brand nav-link   navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/admin') }}">Go Home</a>

    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Products</div>

                <div class="card-body">
<a  class="btn btn-outline-success btn-lg btn-block" href="/productAdd">Add new product   </a>

                 <table class="table table-striped">
                   <thead>
                     <tr>
                       <th scope="col">ID</th>
                       <th scope="col">Name</th>
                       <th scope="col">Description</th>
                       <th scope="col">Price</th>
                       <th scope="col">Image1</th>
                       <th scope="col">Image2</th>
                       <th scope="col">Delete</th>
                       <th scope="col">Edit</th>
                     </tr>
                   </thead>
                   <tbody>
                     @foreach($products as $c)
                    <tr>
                      <th scope="row">{{$c->id}}</th>
                      <td> {{$c->name}}</td>
                      <td> {{$c->description}}</td>
                      <td> {{$c->price}}</td>
                      <td>
                         <img src="{{$c->file}}" alt="" style="width: 7rem;">

                      </td>
                      <td>
                      <img src="{{$c->fil}}" alt="" style="width: 7rem;">
                    </td>
                      <td>

                      <a class="btn btn-outline-primary" href="productEdit/{{$c->id}}">EDIT</a>
                      </td>
                      <td>
                      <a class="btn btn-outline-danger" href="productAdd/{{$c->id}}">Delete</a>
                      </td>
                    </tr>
                      @endforeach

                  </tbody>
                </table>
<div class="paginations col-lg-12">
  {!! $products->render() !!}
</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
