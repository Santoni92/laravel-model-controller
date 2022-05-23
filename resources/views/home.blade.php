@extends('layouts.app')

@section('content')
    @foreach ($movies as $movie)
        <div>
            {{ $movie->title }}
        </div>
    @endforeach
@endsection
