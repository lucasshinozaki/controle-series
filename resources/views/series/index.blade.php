<x-layout title="Séries">
    <a href="{{ route('series.create')}}" class="btn btn-dark mb-2">Adicionar</a>
    @isset($mensagemSucesso)
    <div class="alert alert-sucess">
        {{$mensagemSucesso}}
    </div>
    @endisset
    <ul class="list-group">
        @foreach ($series as $serie)
        <li class="list-group-item d-flex justify-content-between align-items-center">
            {{$serie->nome}}
            <spam class="d-flex">
                <a href="{{route('series.edit', $serie->id)}}" >
                    <button class="btn btn-primary btn-sm ">E</button>
                </a>
                <form action="{{route('series.destroy', $serie->id)}}" method="POST" class="ms-2">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger btn-sm">X</button>
                </form>
            </spam>
        </li>
        @endforeach
    </ul>
</x-layout>