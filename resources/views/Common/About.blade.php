<!-- USING ANOTHER .blade.php to this file -->
@extends('Layout/main-master')

<!-- Encapsulate the data and yield to another file -->
@section('content')
    <h1> {{$about}}</h1>

@endsection