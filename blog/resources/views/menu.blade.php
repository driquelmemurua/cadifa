@extends('layouts.entry')

@section('navbar')
@include('blogger.navbar')
@endsection

@section('content')
    <h2>Que quieres subir</h2>
    <a href="{{ route('story') }}">historia</a>
    <a href="{{ route('design') }}">diseño</a>
@endsection
