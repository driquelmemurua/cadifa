
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

@section('sidebar')
    @include('sidebar', $entries)
@endsection

@section('content')

<div class="col-md-7" >
        
        <h3 class="text-primary">Entradas</h3>

        @foreach($designs as $design)
        <div class="panel panel-default" style="background-color: #190542">

                <div class="panel-heading" style="background-color: #190542">
                        <h2 class="text-primary" style="font-weight: bold" >
                            <span style="display: inline-block; width: 3px"></span> 
                            <img src="rubi.png" style="width: 30px">
                                {{$design->title}}
                            <img src="saphire.png" style="width: 30px"> 
                            {{$design->likes}}
                        </h2>

                    <div class="panel-body" >

                        <div class="row">
                            
                            <div class="col-md-8">

                                <h5 class="text-primary">{{$desing->creation_date}}</h5>
                            
                            
                            </div>
                        
                        </div>

                        <div class="row" >
                            
                            <div class="col-md-8">

                                @foreach($design->images as $image)
                                    <div class="entry">

                                        <img src="{{$image->image_route}}">
                                    
                                    </div>
                                @endforeach

                                <h3>{{$design->description}}</h3>
                            </div>  
                        
                        </div>
                    </div>
                </div>
                
                <div class="col" >
                    
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading" style="background-color: #38024f">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" href="#collapse1">

                                        <label for="comment">

                                            <h4 class="text-primary">
                                                <span style="display: inline-block; width: 24px"></span>Comentarios: 
                                            </h4>

                                        </label>
                                    </a>
                
                                </h4>
                            </div>

                            <div id="collapse1" class="panel-collapse collapse">
                                <ul class="list-group">
                                    @foreach ($desing['comments'] as $comment)
                                        <li class="list-group-item" style="background-color: #190542">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-2" style="color: #ff00d0">
                                                        {{$comment['name']}}
                                                    </div>
                                                    <div class="col-md-4">
                                                        {{$comment['creation_date']}}
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class=col-md-6 >
                                                        {{$comment['content']}}
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach 
                                </ul>
                            </div>
                        </div>
                    </div>




                        <textarea class="form-control" rows="3" id="comment" style="color: #ff00a5; background-color: #38024f"></textarea>
        
                </div>

        </div>

        @endforeach            
</div>


@endsection
@section('navpage')
    @include('navpage', compact($page, $endpage, $type))
@endsection
