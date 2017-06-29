<div class="col-md-4 ">
	<h3 class="text-primary"> Historial</h3>
	<div class="panel-group" id="accordion">
	    <div class="panel panel-default" style="background-color: #190542">
	    	@foreach ($entries as $year => $years)
  				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color: #2a60b7">
  					<h3 style="background-color: #190542">
  						<span style="display: inline-block; width: 20px"></span>
  							------------{{$year}}------------
  					</h3>
  				</a>

	    		@foreach ($years as $month => $months)
	    		<h4 class="text-primary"><div class="row"><span style="display: inline-block; width: 40px"></span>Mes {{$month}} </h4>
	    			@foreach ($months as $id=>$entry)
	    			<h4>
				        <div class="row" style="color:#ff00a5"><span style="display: inline-block; width: 40px"></span>{{ $entry }}
				        </div>
				    </h4>
	    		  	@endforeach
	      		@endforeach
			@endforeach
	    </div>
	</div> 
</div>


	