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

                <div class="panel-heading">Entradas</div>

                    @foreach ($stories as $story)

                    <div class="panel-heading">
                            <h1>{{$story->entries_title}}</h1>

                    <div class="panel-body">

                        <div class="row">
                            
                            <div class="col-md-8 col-md-offset-0.3">

                                <h4>{{$story->creation_date}}</h4>
                            
                            </div>
                        
                        </div>

                        <div class="row">
                            
                            <div class="col-md-8">

                                <div class="entry">

                                    <h3>{{$story->stories_content}}</h3>
                                
                                </div>

                            </div>    
                        
                        </div>
                    </div>
                </div>
                @endforeach            
            </div>
        </div>
    </div>
</div>
@endsection
