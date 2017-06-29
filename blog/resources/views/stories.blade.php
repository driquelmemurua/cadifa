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
{{Auth::guard('bloggers')->check()}}
@section('sidebar')
    @include('sidebar', $entries)
@endsection

@section('content')

<div class="col-md-7" >

        <h3 class="text-primary">Entradas</h3>

        @foreach ($stories as $story)
        <div class="panel panel-default" style="background-color: #190542">




                <div class="panel-heading" style="background-color: #190542">
                        <h2 class="text-primary" style="font-weight: bold" >
                            <span style="display: inline-block; width: 3px"></span> 
                            <img src="rubi.png" style="width: 30px">
                                {{$story->title}}
                            <img src="saphire.png" style="width: 30px"> 
                        </h2>

                    <div class="panel-body" >

                        <div class="row">
                            
                            <div class="col-md-8">

                                <h5 class="text-primary">{{$story->creation_date}}</h5>
                            
                            </div>
                        
                        </div>

                        <div class="row" >
                            
                            <div class="col-md-8">

                                <div class="entry">

                                    <h3 class="text-primary">{{$story->content}}</h3>
                                
                                </div>

                            </div>    
                        
                        </div>
                    </div>
                </div>
                
                <div class="col" style="background-color: #2d0d70">

                    <label for="comment">

                        <h4 class="text-primary">
                            <span style="display: inline-block; width: 24px"></span>Comentarios: 
                        </h4>

                    </label>

                    <textarea class="form-control" rows="3" id="comment" style="color: #ff00a5; background-color: #190542"></textarea>
        
                </div>

        </div>

        @endforeach            
</div>


@endsection
@section('navpage')
    @include('navpage', compact($page, $endpage, $type))
@endsection