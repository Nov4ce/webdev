@extends('Layout/main-master')

@section ('content')

<main class = "container">
    <div class="row">
        <!-- For each Loop -->
        @foreach($blogs as $blog)
            <!-- IF-ELSE STATEMENT -->
            @if($blog['status'] == 1)
                <div class="card" style="width: 18rem;">
                    <img src="images/stoppls.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$blog['title']}}</h5>
                            <p class="card-text">{{$blog['body']}}</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                </div>
            @else  
                <div class="card" style="width: 18rem;">
                    <img src="images/stoppls.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$blog['title']}}</h5>
                            <p class="card-text">{{$blog['body']}}</p>
                        </div>
                </div>
            @endif
        @endforeach

        <!-- For LOOP -->
        <!-- @for($count = 0; $count < count($blogs); $count++)
        <div class="card" style="width: 18rem;">
            <img src="images/stoppls.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">{{$blogs[$count]['title']}}</h5>
                    <p class="card-text">{{$blogs[$count]['body']}}</p>
                </div>
        </div>
        @endfor -->
    </div>
</main>
@endsection
<style>
    .card:hover {
        transform: scale(1.1);
    }
    .card {
        transition: transform 0.3s; 
    }
</style>