@extends('layout.main-layout')

@section('content')
    <div class="container d-flex flex-wrap gap-4 mt-5">
        @foreach ($vans as $van)
            <div class="card text-bg-secondary mb-3" style="max-width: 18rem;">
                <div class="card-header">{{ $van->brand }}</div>
                <div class="card-body">
                    <h5 class="card-title">Descrizione</h5>
                    <p class="card-text">{{ $van->description }}</p>
                    <h5 class="card-title">Colore</h5>
                    <span class="color-square" style="background-color: {{ $van->color }}"></span>
                    <span>{{ $van->color }}</span>
                    <span class="color-square" style="background-color: {{ $van->color }}"></span>
                    <h5 class="card-title">Cambio</h5>
                    <p class="card-text">{{ $van->automatic_gear ? 'automatico' : 'manuale' }}</p>
                    <h5 class="card-title">Data</h5>
                    <p class="card-text">{{ $van->release_date }}</p>
                    <h5 class="card-title">Peso</h5>
                    <p class="card-text">{{ $van->weight }} kg</p>
                    <h5 class="card-title">Serbatoio</h5>
                    <p class="card-text">{{ $van->engineCapacity }} litri</p>
                </div>
            </div>
        @endforeach
    </div>
@endsection
