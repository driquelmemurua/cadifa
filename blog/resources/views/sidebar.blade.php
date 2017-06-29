
        <div class="col-md-3 ">
        	<h3 class="text-primary"> Historial</h3>
        	<div class="row">
        		
			<div class="panel-group" id="accordion">
			    <div class="panel panel-default" style="background-color: #190542">
			    	@foreach ($entries as $year => $months)
						@if ($year)
		      				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1" style="color: #2a60b7">
		      					<h3 style="background-color: #190542">
		      						<span style="display: inline-block; width: 10px"></span>
		      							{{$year}}
		      					</h3>
		      				</a>

				    		@foreach ($months as $month => $month_entries)
				    			@foreach ($month_entries as $entry)
				      			<div id="collapse1" class="panel-collapse collapse" style="color: #2a60b7">
							        {{ $entry->title }}
				    		  	</div>
				    		  	@endforeach
				      		@endforeach
			      		@endif
					@endforeach
			    </div>
        	</div>
			</div> 
	</div>


	