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
<div class="text-center container py-5">
<div class="row">
    @foreach($product as $p)
      <div class="col-lg-2 col-md-15 mb-4">
        <div class="card">
        <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            <img src = "{{url($p->photo)}}"
              class="" Style="width:150px" />
          </div>
          <div class="card-body">
          <h4 class="card-title mb-3">{{ $p->name }}</h4>
            <h6 class="mb-3">RP {{ $p->price }}</h6>
            <a href="#" class="text-reset">
              <h6 class="mb-3">Detail</h6>
            </a>
          </div>
        </div>
      </div>
        @endforeach
@endsection
