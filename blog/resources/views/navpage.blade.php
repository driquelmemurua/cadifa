{{"Navegacion de paginas (blog/resources/views/navpage.blade.php)"}} <br>
{{"Si la pag es mayor a 1 imprime flecha izquierda (regresa 1 pagina)"}}<br>
{{"Si la pagina es menor a la pagina final imprime flecha derecha (avanza una pagina)"}}<br>
{{"En el centro de imprime la pagina actual"}}
@if($page > 1)
<a href="{{ route($type) }}{{ '?page=' }}{{ $page-1 }}"><img src="http://icons.iconarchive.com/icons/icons8/ios7/128/Arrows-Left-2-icon.png"></a>
@endif
{{ $page }}
@if($page < $endpage)
<a href="{{ route($type) }}{{ '?page=' }}{{ $page+1 }}"><img src="http://icons.iconarchive.com/icons/icons8/ios7/128/Arrows-Right-2-icon.png"></a>
@endif