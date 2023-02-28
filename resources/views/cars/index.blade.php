<!-- resources/views/cars/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Cars for Sale</h1>
    <div class="row">
        @foreach ($cars as $car)
        <div class="col-md-4 mb-4">

            <div class="card">
                <!-- Card content... -->
                <div id="carousel-{{ $car->id }}" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @foreach ($car->carImages as $index => $carImage)
                            <li data-target="#carousel-{{ $car->id }}" data-slide-to="{{ $index }}" class="{{ $index == 0 ? 'active' : '' }}"></li>
                        @endforeach
                    </ol>
                    <div class="carousel-inner">
                        @foreach ($car->carImages as $index => $carImage)
                            <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                <img class="d-block w-100 car-image" src="{{ asset('storage/'.$carImage->image_path) }}" alt="{{ $car->car_name }}">
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carousel-{{ $car->id }}" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-{{ $car->id }}" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="card-body">
                    <h5 class="card-title">{{ $car->name }}</h5>
                    <p class="card-text">Type: {{ $car->type }}</p>
                    <p class="card-text">Price: {{ $car->price }}</p>
                    <p class="card-text">Top Speed: {{ $car->top_speed }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

@section('styles')
<!-- CSS -->

@endsection

@section('javascript')
<script type="text/javascript">
    $(document).ready(function(){
        $('.carousel').carousel();
    });
</script>
@endsection
