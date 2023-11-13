@extends('layouts.app');

@section('title', 'Headings')

@section('section-id', 'Headings')

@section('content')
    <div class="card-title text-center">

        <div class="heading-header d-flex justify-content-between align-items-center my-3">
            <h1 class="justify-content-center">Intestazioni</h1>

            <div class="">
                <a href="{{ route('headings.create') }}" class="btn btn-small btn-success">Aggiungi Intestazione</a>

            </div>

        </div>


        <div class="d-flex justify-content-end">
            <form method="GET" action="{{ route('headings.index') }}">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cognome Intestatario" name="search"
                        value="{{ $search }}">
                    <button class="btn btn-outline-secondary" type="submit">Cerca</button>
                </div>
            </form>

        </div>
    </div>
    <div class="card-body">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Cognome</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Email</th>
                    <th scope="col">Azienda</th>
                    <th scope="col">Vedi Rubriche</th>



                </tr>
            </thead>
            <tbody>
                @forelse($headings as $heading)
                    <tr>
                        <td>
                            <a href="{{ route('headings.show', $heading->id) }}">{{ $heading->lastname }}
                        </td>
                        <td>{{ $heading->name }}</td>
                        <td>{{ $heading->email }}</td>
                        <td>{{ $heading->company }}</td>
                        <td>
                            <a href="{{ route('headings.show', $heading->id) }}" class="btn btn-small btn-primary">Rubriche
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4" class="text-center">Non ci sono intestazioni</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $headings->links() }}
    </div>

@endsection
