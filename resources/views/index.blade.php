@extends('layout.main-layout')

@section('content')
    <ul>
        @foreach ($vans as $van)
            <li>{{ $van->brand }}

                <p>{{ $van->description }}</p>

                <img src="{{ $van->image }}" alt="">

            </li>
        @endforeach
    </ul>
@endsection
