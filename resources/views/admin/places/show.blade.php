@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">{{ $place->title }}</h1>
        @if($place->day)
            <h3>Date: {{ $place->day->name }}</h3>
        @endif

        <div class="mb-5">
            <a href=""></a>
        </div>

        <div><h3>Note: {{ $place->content }}</h3></div>
    </div>
@endsection