@extends('layouts.app')

@section('content')
<nav class="navbar navbar-expand-lg">
  <div class="container-fluid" style="background-color: #b9dbbd;">
  <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
      <div class="navbar-nav ">
        <a class="nav-link active" aria-current="page" href="/home">Home</a>
        <a class="nav-link" href="cart">Cart</a>
        <a class="nav-link" href="profile">Profile</a>
      </div>
    </div>
  </div>
</nav>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
