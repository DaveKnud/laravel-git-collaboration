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
        @endforeach
    </ul>
@endsection
