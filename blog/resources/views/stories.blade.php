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
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @foreach ($stories as $story)
                    {{$story}}
                    {{$story->title}}
                    {{$story->content}}
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
