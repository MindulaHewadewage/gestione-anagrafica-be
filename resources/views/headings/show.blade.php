@extends('layouts.app');

@section('title', $heading->name)

@section('section-id', 'heading-detail')

@section('content')

    <h1>{{ $heading->name }}</h1>
@endsection
