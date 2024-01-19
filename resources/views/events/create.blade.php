@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie o seu evento</h1>
    <form action="/events" method="POST">
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do evento">
        </div>
        <div class="form-group">
            <label for="title">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do evento">
        </div><div class="form-group">
            <label for="title">Descrição</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Descrição do evento">
        </div><div class="form-group">
            <label for="title">Privacidade:</label>
            <input type="text" class="form-control" id="private" name="private" placeholder="Privacidade do evento">
        </div>
    </form>
</div>

@endsection
