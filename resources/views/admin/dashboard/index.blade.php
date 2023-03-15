@extends('layouts.app-admin')

@section('title')
    Admin - Dashboard 
@endsection

@section('content')
    <h2>Welcome to Administrator</h2>

    <div class="d-flex justify-content-center mt-5">
        <img src="{{ asset('assets/images/dashboard.svg') }}" style="max-width: 650px;">
    </div>
@endsection