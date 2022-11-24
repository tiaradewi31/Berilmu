@extends('main')

@section('container')
    <div class = "text-center" style="margin: 100px;">
    <style>
        body{
            background-color: #E8F2FD;
            background-image: url(bgberilmu.png);
            background-size: cover;
        }
    </style>    
    <h1>BERILMU<h1>
        <h5>Berbagi perangkat pembelajaran dari sekolah negeri dan swasta di Indonesia<h5>
        <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>

    @endsection