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
{{"Diseños (blog/resources/views/designs.blade.php)"}} <br>
{{"n: n-esima diseño [0;4]"}} <br>
{{"designs['n']->id"}} <br>
{{"designs['n']->title"}} <br>
{{"designs['n']->creation_date"}} <br>
{{"designs['n']->likes"}} <br>
{{"designs['n']->description"}} <br>
{{"i: i-esima imagen [0;...]"}} <br>
{{"designs['n']->images['i']->image_route"}} <br>
{{"m: m-esimo comentario [0;...]"}} <br>
{{"designs['n']->comments['m']->name"}} <br>
{{"designs['n']->comments['m']->avatar_route"}} <br>
{{"designs['n']->comments['m']->content"}} <br>
{{"----------"}}<br>
    @foreach($designs as $design)
                <div class="panel-heading">
                    <h1>{{$design->title}}</h1>

                    <div class="panel-body">

                        <div class="row">
               @foreach($design->images as $image)             
                            <div class="col-md-8 col-md-offset-0.3">

                                <img src="{{$image->image_route}}">
                @endforeach            
                            </div>
                        
                        </div>

                        <div class="row">
                            
                            <div class="col-md-8">

                                <div class="entry">

                                    <h3>{{$design->description}}</h3>
                                
                                </div>

                            </div>    
                        
                        </div>
                    </div>
                </div>
        
        
        	

       	
	@endforeach
@endsection
