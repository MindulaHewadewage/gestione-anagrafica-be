@extends('layouts.app');

@section('title', 'Create Headings')

@section('section-id', 'create-heading')

@section('content')

    <div class="card-title text-center d-flex justify-content-between">
        <h1>Crea Squadra</h1>
        <a href="{{ route('headings.index') }} " class="btn btn-small btn-secondary">Torna indietro</a>
    </div>
    <div class="card-body">
        <form action="{{ route('headings.store') }}" method="POST">
            @csrf
            <div class="row">

                {{-- NOME --}}
                <div class="col-12">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="name" placeholder="Inserisci il nome"
                            name="name">
                    </div>
                </div>

                {{-- COGNOME --}}
                <div class="col-12">
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Cognome</label>
                        <input type="text" class="form-control" id="lastname" placeholder="Inserisci il cognome"
                            name="lastname">
                    </div>
                </div>

                {{-- EMAIL --}}
                <div class="col-12">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Inserisci la tua mail"
                            name="email">
                    </div>
                </div>

                {{-- NOME AZIENDA --}}
                <div class="col-12">
                    <div class="mb-3">
                        <label for="text" class="form-label">Nome Azienda</label>
                        <input type="text" class="form-control" id="company"
                            placeholder="Inserisci il nome dell'azienda" name="cmopany">
                    </div>
                </div>

                {{-- BOTTONE SALVA --}}
                <div class="d-flex justify-content-center my-3">
                    <button type="submit" class="btn btn-small- btn-success">Salva</button>
                </div>

            </div>
        </form>
    </div>
@endsection
