@extends('layouts.master')
@section('title')
Laravel Shopping-Cart
@endsection

@section('content')
<style>
    strong { 
      font-weight: bold;
      font-size: 130%;
   }

    </style>
    
    @if (Session::has('cart'))
        <div class="row">
            <div class="col-md-6">
                <ul class="list-group">
                    @foreach ($products as $product)
                        <li class="list-group-item">     
                            <span class="badge badge-pill badge-primary"> {{ $product['qty'] }} kpl </span>
                            <span> {{ $product['item']['title']}} </span>
                            <br>
                            <strong class="label label-success"> {{ $product['price'] }} €</strong>
                            <br>
                            <div class="btn-group">
                                <button type="dropdown" class="btn btn-success dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                Edit
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#"> + Add</a></li>
                                    <li><a class="dropdown-item" href="#"> - Reduce</a></li>
                                    <li><hr class="dropdown-divider"></li>
                                    <li><a class="dropdown-item" href="#">Empty</a></li>
                                </ul>
                                </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong> Total: {{ $totalPrice}}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{route('checkout') }}" type="button" class="btn btn-success">CheckOut </a>
            </div>
        </div>
    @else

    <div class="row">
        <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
            <h2>No Items In Cart!</h2>
        </div>
    </div>

    @endif
@endsection