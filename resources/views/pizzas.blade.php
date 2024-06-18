@extends('layouts.layout')
@section('content')
<div class="content">
    <div class="text-center" title m-b-md>
        Pizza List
        @foreach($pizzas as $pizza)
        <div>
            {{ $loop->first }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
            @if($loop->first)
                <span>First in the loop</span>
            @elseif($loop->last)
                <span>Last in the loop</span>
            @endif
        </div>
        @endforeach
    </div>
</div>
@endsection


