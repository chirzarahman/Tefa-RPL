@extends('layouts.nav')

@section('title', 'Home')

@section('content')
<!-- Card Form -->
<div class="row m-3">
    @foreach ($orders as $order)     
    <div class="col-sm-3 mt-2 mb-2">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $order->name }}</h5>
                <p class="card-text">{{ $order->alamat }}</p>
                <div class="modal-footer">
                    <a href="/detail-order/{{ $order->id }}" class="btn btn-primary">Show more</a>
                    <form action="/trash/{{ $order->id }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i> Trash</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="index.html"> Trash</a>
            </div>
        </div>
    </div>
</div>
@endsection