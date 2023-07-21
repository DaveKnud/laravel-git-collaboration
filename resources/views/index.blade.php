@extends('layout.main-layout')

@section('content')
    <ul>
        @foreach ($vans as $van)
            <li>{{ $van->brand }}</li>
            <li>{{ ($van->automatic_gear)? 'V' : 'F'}}</li>
        @endforeach
    </ul>
@endsection
