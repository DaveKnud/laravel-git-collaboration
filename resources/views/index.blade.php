@extends('layout.main-layout')

@section('content')
    <ul>
        @foreach ($vans as $van)
            <li>{{ $van->brand }}</li>
            <li>{{ $van->automatic_gear ? 'V' : 'F' }}</li>
            <li>{{ $van->release_date }}</li>
        @endforeach
    </ul>
@endsection
