@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="d-flex py-2 text-light">
                <div class="card col shadow border-0 p-2 m-1">
                    <img src="{{ asset('img/img1.jpg') }}" class="w-100 img-responsive" alt="">
            </div>
            <div class="card col shadow border-0 p-2 m-1">
                <div class="card bg-info col shadow border-0 p-2 m-1">
                <h5>Kategori</h5>
                <div class="display-4"><i class="bi bi-folder2-open "></i></div>
            </div>
            <div class="card col shadow border-0 p-2 m-1">
                <div class="card bg-info col shadow border-0 p-2 m-1">
                <h5>Sub Kategori</h5>
                <div class="display-4"><i class="bi bi-folder2-open "></i></div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
