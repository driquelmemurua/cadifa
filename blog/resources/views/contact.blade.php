@extends('layouts.app')

@section('navbar')
    @if (Auth::check())
        @include('visitor.navbar')
    @elseif (Auth::guard('bloggers')->check())
        @include('blogger.navbar')
    @else
        @include('navbar')
    @endif
@endsection

@section('content')
{{"Contacto (blog/resources/views/contact.blade.php)"}} <br>
{{"n: n-esimo-1 blogger (si es solo la Den => n = 0)"}} <br>
{{"contact['n']->id"}} <br>
{{"contact['n']->bio"}} <br>
{{"contact['n']->created_at"}} <br>
{{"contact['n']->user->name"}} <br>
{{"contact['n']->user->avatar_route"}} <br>
{{"----------"}}<br>
@endsection
