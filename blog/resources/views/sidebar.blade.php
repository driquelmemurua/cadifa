
        <div class="col-md-3 ">
        	<h3 class="text-primary"> Historial</h3>
			<div class="panel-group" id="accordion">
			    <div class="panel panel-default" style="background-color: #190542">
			    	@foreach ($entries as $year => $years)
	      				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color: #2a60b7">
	      					<h3 style="background-color: #190542">
	      						<span style="display: inline-block; width: 10px"></span>
	      							{{$year}}
	      					</h3>
	      				</a>

			    		@foreach ($years as $month => $months)
			    		{{$month}}
			    			@foreach ($months as $id=>$entry)
			    			<h4>
						        {{ $entry }}
						    </h4>
			    		  	@endforeach
			      		@endforeach
					@endforeach
			    </div>
			</div> 
	</div>


	