@extends('layouts.main')

@section('title', 'Minas Tênis Clube')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Campeonatos</h2>
    <p class="subtitle">Veja os campeonatos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($titles as $title)
        <div class="card col-md-3">
            <img src="/img/minas.jpeg" alt="{{ $title->championship }}">
            <div class="card-body">
                <p class="card-date">10/09/2020</p>
                <h5 class="card-title">{{ $title->championship }}</h5>
                <p class="card-participants">X Participantes</p>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection