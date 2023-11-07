@extends('layouts.main')

@section('title', 'Minas Tênis Clube')

@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Adicione um campeonato</h1>
        <form action="/titles" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Campeonato:</label>
                <input type="text" class="form-control" name="championship" id="championship" placeholder="Nome do campeonato">
            </div>
            <div class="form-group">
                <label for="title">Campeão:</label>
                <input type="text" class="form-control" name="champion" id="champion" placeholder="Campeão">
            </div>
            <div class="form-group">
                <label for="title">Vice-Campeão:</label>
                <input type="text" class="form-control" name="sndPlace" id="sndP" placeholder="Vice-Campeão">
            </div>
            <div class="form-group">
                <label for="title">O evento é privado?</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <div class="form-group">
                <label for="title">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que acontecerá no evento?"></textarea>
            </div>
            <input type="submit" class="btn btn-primary" value="Adicionar um campeonato">
        </form>
    </div>
@endsection