@extends('layout.main-layout')

@section('content')
    <ul>
        @foreach ($vans as $van)
            <li>{{ $van->brand }}</li>
            <div>{{ $van->release_date }}</div>
        @endforeach
    </ul>
@endsection
