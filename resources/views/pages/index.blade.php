@extends('layouts.app')

@section('content')

<div class="jumbotron text-center">
    <div class="container">
        <h1>{{$title}}</h1>
        <p>This is the Laravel application from the Laravel From Scratch.</p>
        <p><a class="btn btn-primary btn-lg" href="/login" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
    </div>
  </div>
</div>

@endsection