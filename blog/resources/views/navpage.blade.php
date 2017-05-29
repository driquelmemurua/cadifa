@if($page > 1)
<a href="{{ route($type) }}{{ '?page=' }}{{ $page-1 }}"><img src="http://icons.iconarchive.com/icons/icons8/ios7/128/Arrows-Left-2-icon.png"></a>
@endif
{{ $page }}
@if($page < $endpage)
<a href="{{ route($type) }}{{ '?page=' }}{{ $page+1 }}"><img src="http://icons.iconarchive.com/icons/icons8/ios7/128/Arrows-Right-2-icon.png"></a>
@endif