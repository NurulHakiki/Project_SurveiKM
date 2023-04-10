@extends('layouts.app-admin')

@section('title')
    Admin - Dashboard 
@endsection

@section('content')
    <marquee behavior="alternate" bgcolor ="#DBFFD6"><H3>WELCOME TO ADMINISTRATOR</H3></marquee>

    <div class="d-flex justify-content-center mt-5">
        <img src="{{ asset('assets/images/dashboard.svg') }}" style="max-width: 650px;">
    </div>

    
   
@endsection

