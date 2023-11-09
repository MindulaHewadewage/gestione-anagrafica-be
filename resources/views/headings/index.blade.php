@extends('layouts.app');

@section('title', 'Headings')

@section('section-id', 'Headings')

@section('content')

    <div class="container">
        <div class="card-title text-center">
            <h1>Intestazioni</h1>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col">Email</th>
                        <th scope="col">Azienda</th>


                    </tr>
                </thead>
                <tbody>
                    @forelse($headings as $heading)
                        <tr>
                            <th scope="row">{{ $heading->name }}</th>
                            <td>{{ $heading->lastname }}</td>
                            <td>{{ $heading->email }}</td>
                            <td>{{ $heading->company }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="text-center">Non ci sono intestazioni</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

@endsection
