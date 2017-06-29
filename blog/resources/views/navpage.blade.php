
@if($page > 1)
<img src="snoop.gif" style="width: 80px"> 
<a href="{{ route($type) }}{{ '?page=' }}{{ $page-1 }}"><img src="izq.png" style="width: 100px"></a>
@endif
{{ $page }}
@if($page < $endpage)
<a href="{{ route($type) }}{{ '?page=' }}{{ $page+1 }}"><img src="der.png" style="width: 100px"></a>
<img src="snoop.gif" style="width: 80px"> 
@endif
