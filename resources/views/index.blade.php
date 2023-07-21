@extends('layout.main-layout')

@section('content')
    <ul>
        @foreach ($vans as $van)
            <li>{{ $van->brand }}
                <p>{{ $van->description }}</p>
                <img src="{{ $van->image }}" alt="">
            </li>
            <li>{{ $van->brand }}</li>
            @if ($van->color)
                <li>
                    <span class="color-square" style="background-color: {{ $van->color }}"></span>
                    {{ $van->color }}
                </li>
            @endif
            <li>{{ $van->automatic_gear ? 'V' : 'F' }}</li>
            <li>{{ $van->release_date }}</li>
            <li>{{ $van->weight }}</li>
        @endforeach
    </ul>
@endsection
