@extends('theme.default')

@section('content')

<style>
    body {
        /* font-family: Arial, sans-serif; */
        margin: 0;
        padding: 0;
        background-color: #f4f6f9;
    }
    .content-wrapper {
        padding: 20px;
    }
    .card {
        background-color: #ffffff;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        padding: 10px;
        text-align: center;
        margin-bottom: 20px;
        transition: transform 0.3s;
        width: 150px; /* Adjust width as needed */
        height: 150px; /* Adjust height as needed */
    }
    .card:hover {
        transform: translateY(-5px);
        text-decoration: none;
    }
    .card h3 {
        margin: 0;
        font-size: 24px;
        color: #ffffff;
    }
    .card p {
        margin: 5px 0 0;
        font-size: 14px;
        color: #ffffff;
        font-weight: bold
    }
    .card .icon {
        font-size: 36px;
        color: #ffffff;
        margin-bottom: 5px;
    }
    .card a {
        display: inline-block;
        margin-top: 5px;
        font-size: 14px;
        color: #ffffff;
        text-decoration: none;
    }
    .card a:hover {
        text-decoration: underline;
    }
</style>

<div class="content-wrapper">
    <div class="content">
        <a href="/dosen" class="card" style="background-color: #DFC100;">
            <div class="icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <h3>{{ $tdosen }}</h3>
            <p>Dosen</p>
            {{-- <a href="/dosen">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
        </a>
    </div>
</div>

@endsection
