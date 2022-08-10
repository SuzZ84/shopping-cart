@extends('layouts.master')
@section('title')
Laravel Shopping-Cart
@endsection
@section('content')
    @foreach ($products->chunk(3) as $productChunk)
        <div class="row">
        @foreach ($productChunk as $product)
            <div class="col-md-3 col-md-4">
                <div class="thumbnail">
                    <img src={{ $product->imagePath }} alt="...">
                        <div class="caption">
                            <h5> {{ $product->title }} </h5>
                                <p class="description">{{ $product->description }}</p>
                                <div class="clearfix">
                                <div class="pull-left price"> {{ $product->price }} € </div>
                                
                                <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success pull-right" role="button">Add to cart</a> 
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endforeach 
  @endsection
