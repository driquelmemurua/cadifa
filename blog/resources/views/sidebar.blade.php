{{"----------"}}<br>
{{"Historial de entradas (blog/resources/views/sidebar.blade.php)"}} <br>
{{"entries['Año']['Mes']['id']->title"}} <br>
{{"----------"}}<br>
@foreach ($entries as $year => $months)
    @if ($year)
        {{$year}} <br>
        @foreach ($months as $month => $month_entries)
            {{$month}} <br>
            @foreach ($month_entries as $entry)
                {{ $entry->title }} {{", "}}
            @endforeach
        @endforeach
    @endif
@endforeach
<br>
{{"----------"}}<br>