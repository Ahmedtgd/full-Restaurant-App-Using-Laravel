@extends('layouts.app')

@section('content')
  <div class="container">
    <!-- Content here -->

  <ul class="nav justify-content-center">
                      <!--<a class="navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/admin') }}"> Home</a>
                      <a class="btn btn-outline-success navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/users') }}">Users</a>
                      <a class="btn btn-outline-success navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto d-flex p-2 bd-highlight" href="{{ url('/customers') }}">Customers</a>
                      <a class="btn btn-outline-success navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto d-flex p-2 bd-highlight" href="{{ url('/cards') }}"> Cards</a>
                      <a class="btn btn-outline-success navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto d-flex p-2 bd-highlight" href="{{ url('/orders') }}">Orders</a>
                      <a class="btn btn-outline-success navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto d-flex p-2 bd-highlight" href="{{ url('/products') }}">Products</a>
                      <a class="btn btn-outline-success navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/vehicles') }}">Vehicles</a>-->
                      <div class="card" style="width: 18rem;">
            <a  href="/users"><img class="card-img-top" src="pictures/Users.png" alt="Card image cap"  ></a>
                        <div class="card-body">
                          <a class="btn btn-info navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/users') }}">Users/Employees</a>
                        </div>
                      </div>

                      <div class="card" style="width: 18rem;">
                    <a href="/customers"><img class="card-img-top" src="pictures/Customers.png" alt="Card image cap"></a>
                      <div class="card-body">
                        <a class="btn btn-info navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/customers') }}">Customers</a>
                      </div>
                      </div>

                      <div class="card" style="width: 18rem;">
                    <a href="/cards"><img class="card-img-top" src="pictures/Visa.png" alt="Card image cap"></a>
                      <div class="card-body">
                        <a class="btn btn-info navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto d-flex p-2 bd-highlight" href="{{ url('/cards') }}"> Customer's Cards</a>
                      </div>
                      </div>

                      <div class="card" style="width: 18rem;">
              <a href="/orders"><img class="card-img-top" src="pictures/Orders.png" alt="Card image cap"></a>
                      <div class="card-body">
                        <a class="btn btn-info navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto d-flex p-2 bd-highlight" href="{{ url('/orders') }}">Orders</a>
                      </div>
                      </div>

                      <div class="card" style="width: 18rem;">
                  <a href="/products"><img class="card-img-top" src="pictures/Productes.jpg" alt="Card image cap"></a>
                      <div class="card-body">
                        <a class="btn btn-info navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto d-flex p-2 bd-highlight" href="{{ url('/products') }}">Products</a>
                      </div>
                      </div>


                      <div class="card" style="width: 18rem;">
                    <a href="/vehicles"><img class="card-img-top" src="pictures/Vehicles.png" alt="Card image cap"></a> 
                      <div class="card-body">
                          <a class="btn btn-info navbar-brand nav-link  collapse navbar-collapse navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/vehicles') }}">Vehicles</a>
                      </div>
                      </div>


                    </ul>
</div>

@endsection
