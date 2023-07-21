@extends('layout.main-layout')

@section('content')
    <ul>
        @foreach ($vans as $van)
            <li>{{ $van->brand }}</li>
            <li>{{ $van->weight }}</li>
        @endforeach
    </ul>
@endsection
