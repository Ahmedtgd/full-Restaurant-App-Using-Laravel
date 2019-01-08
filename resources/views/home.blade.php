@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Thank you For Using Our App  </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                    <a class="btn btn-outline-secondary navbar-brand nav-link   navbar-nav ml-auto  d-flex p-2 bd-highlight" href="{{ url('/admin') }}">Go to Administration Control</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
