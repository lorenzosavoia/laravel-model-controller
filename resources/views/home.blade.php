@extends('layouts.base')

@section('content')
     @foreach($movies as $movie)
        {{$movie->title}}
    @endforeach
@endsection