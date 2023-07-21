@extends('layout.main-layout')

@section('content')
    <ul>
        @foreach ($vans as $van)
            <li>{{ $van->brand }}</li>
            @if ($van->color)
                <li>
                    <span class="color-square" style="background-color: {{ $van->color }}"></span>
                    {{ $van->color }}
                </li>
            @endif
            <li>{{ $van->automatic_gear ? 'V' : 'F' }}</li>
            <li>{{ $van->release_date }}</li>
        @endforeach
    </ul>
@endsection
