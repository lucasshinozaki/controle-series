<x-layout title="Temporadas de {!! $series->nome !!}">
    <ul class="list-group">
        @foreach ($seasons as $season)
        <li class="list-group-item d-flex justify-content-between align-items-center">
           Temporada: {{$season->number}}
            <spam class="badge bg-secondary">
                {{ $season->episodes->count()}}
            </spam>
        </li>
        @endforeach
    </ul>
</x-layout>