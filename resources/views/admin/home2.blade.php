@extends('layouts.nav2')

@section('title', 'Home')

@section('content')
<!-- Card Form -->
<div class="row m-3">
    @foreach ($orders as $order) 
    <div class="col-sm-3">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $order->name }}</h5>
                <p class="card-text">{{ $order->alamat }}</p>
                <div class="modal-footer">
                    <a href="/detail-order/{{ $order->id }}" class="btn btn-primary">Show more</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection