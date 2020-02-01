@extends('layouts.nav3')

@section('content')

<div class="col-md-6 my-5 mx-auto">
    <div class="card" >    
    <div class="card-body">
        <h2 class="card-title">{{ $order->name }}</h2>
        <h3 class="card-title">{{ $order->email }}</h3>
        <p class="card-title">{{ $order->notelp }}</p>
        <p class="card-title">{{ $order->alamat }}</p>
        <h4 class="card-title">{{ $order->name_product }}</h4>
        <p class="card-text">{{ $order->platform }}</p>
        <p class="card-text">{{ $order->description }}</p>
        <p class="card-text">{{ $order->created_at }}</p>
        <a href="/home" button class="btn btn-primary">Kembali</a></button>
    </div>
</div>

@endsection