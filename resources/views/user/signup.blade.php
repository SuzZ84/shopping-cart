@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-md-6 col-md-offset-6">
        <br>
        <h1>Sign Up</h1>
        <br>
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error )
                    <p>{{$errors}}</p>
                @endforeach
            </div>    
        @endif
        <form action="{{ route('user.signup') }}" method="post">
            <div class="form-group">
                <label for="email">E-Mail</label>
                <input type="text" name="email" name="email" class="form-control">
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password"  
                class="form-control">
            
            </div>
            <button type="submit" class="btn btn-primary">Sign Up </button>
            {{ csrf_field() }}
        </form>
    </div>
</div>
@endsection