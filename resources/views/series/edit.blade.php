<x-layout title="Editar Série: '{{$serie->nome}}'">
    <x-series.form nome="{{$serie->nome}}" :action="route('series.update', $serie->id)" :update="true"/>
</x-layout>