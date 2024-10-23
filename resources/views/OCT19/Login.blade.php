<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel = "dns-prefetch" href = "//fonts.bunny.net">
    <link href = "https://fonts.bunny.net/css?Family=Nunito" rel = "stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body body style = "min-height: 100vh; display: flex; flex-direction: column; background-color: #F4EDED">
    <div class="container" style="width: 700px; display: flex; align-items: center; justify-content: center;height: 100vh;">
    <div class="row" style = "border: 1px solid black; padding: 20px; border-radius: 10px; background-color: #877666; box-shadow: 0 20px 50px rgb(0 0 0 / 0.5)">
        <h1 class ="mb-4"style="color:aliceblue; font-family: Helvetica;">Log In Form</h1>
        <form>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="color:aliceblue">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text" style="color:aliceblue">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color:aliceblue">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" style="color:aliceblue">Check me out</label>
            </div>
            <button type="submit" class="btn btn-outline-light">Log In</button>
        </form>
    </div>
</div>
</body>
</html> -->
    

@extends('Layout/main-master')

@section('content')
<div class="container" style="width: 700px; display: flex; align-items: center; justify-content: center;height: 80vh;">
    <div class="row" style = "border: 0px solid black; padding: 20px; border-radius: 10px; background-color: #877666; box-shadow: 0 20px 50px rgb(0 0 0 / 0.5)">
        <h1 class ="mb-4"style="color:aliceblue; font-family: Helvetica;">Log In Form</h1>
        <form action = "{{route('login.submit')}}" method = "POST">
            @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label" style="color:aliceblue">Email address</label>
                <input type="email" name = "email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text" style="color:aliceblue">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label" style="color:aliceblue">Password</label>
                <input type="password" name = "password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1" style="color:aliceblue">Check me out</label>
            </div>
            <button type="submit" class="btn btn-outline-light">Log In</button>
        </form>
    </div>
</div>
@endsection