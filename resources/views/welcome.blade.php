@extends('layouts.layout')
@section('content')
<div class="flex-center position-ref full-height">
    <div class="content">
        <img src="/img/pizza-house.png" alt="This is a pizza a house logo">
        <div class="title m-b-md">
            The Best Pizza
        </div>
        <p class="message">{{ session('message') }}</p>
        <a href="{{ route('pizzas.create') }}">Order a Pizza</a>
    </div>
</div>
@endsection


