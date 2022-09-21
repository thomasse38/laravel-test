@extends('layout')

@section('title')
    prod. det.
@endsection

@section('content')

        <div class="col-md-3 mb-5">
            <div class="product">
                <img src="{{$data->image}}" class="img-fluid" alt="">
                <h5 class="card-title">{{$data->name}}</h5>
                <h5 class="card-title">{{$data->description}}</h5>
                <h5 class="card-title">{{$data->weight}} g</h5>
                <p class="card-text">{{$data->price}} €</p>
                <laba>Quantity</laba>
                <input type="number" class="input-group w-1 mb-1" value="1">
                <input style="width: 200px" class="btn btn-primary" type="submit" value="Add to Cart">


            </div>
        </div>

@endsection
