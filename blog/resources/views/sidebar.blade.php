<br>
        <div class="col-md-3 ">
        	<h3> Historial</h3>
			<div class="panel-group" id="accordion">
			    <div class="panel panel-default">
			    	@foreach ($entries as $year => $months)
						@if ($year)
			      			<div class="panel-heading">
				        		<h4 class="panel-title">
				      				<a data-toggle="collapse" data-parent="#accordion" href="#collapse1">{{$year}}</a>
				        		</h4>
			      			</div>
				    		@foreach ($months as $month => $month_entries)
				    			@foreach ($month_entries as $entry)
				      			<div id="collapse1" class="panel-collapse collapse">
							        {{ $entry->title }}
				    		  	</div>
				    		  	@endforeach
				      		@endforeach
			      		@endif
					@endforeach
			    </div>
			</div> 
	</div>


	