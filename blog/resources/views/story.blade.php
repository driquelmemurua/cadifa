@extends('layouts.entry')

@section('navbar')
@include('blogger.navbar')
@endsection

@section('content')
	<div class="container">
		<div class="row">
		    <h2>Nueva historia</h2>
		</div>
		<div class="row">
		  	<form action="{{route('newStory')}}" method="post">
		  		<div class="row">
		  			<div class="col-md-6">
		  				Titulo:<br>
						<input type="text" name="title" size="50" required>
					</div>
		  		</div>
		  		<div class="row">
		  			<div class="col-md-6">
		  				Contenido:<br>
		  				<textarea name="content" rows="10" cols="190" required></textarea><br><br>
		  			</div>
		  		</div>
		  		<div class="row">
		  			<div class="col-md-6">
		  			{{ csrf_field() }}
		  				<input type="submit" value="Subir">
		  			</div>
		  		</div>
		    </form>
    	</div>
	</div>
@endsection
