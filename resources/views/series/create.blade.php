<x-layout title="Nova Série">
    <form action="{{ route('series.store')}}" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome</label> 
                <input type="text" autofocus name="nome" id="nome" class="form-control" 
                    value="{{ old('nome') }}">
            </div>
            <div class="col-2">
                <label for="seasonsQty" class="form-label">N Temporadas</label> 
                <input type="text" name="seasonsQty" id="seasonsQty" class="form-control" 
                    value="{{ old('seasonsQty') }}">
            </div>
            <div class="col-2">
                <label for="episodesPerSeason" class="form-label">Eps / Temporada:</label> 
                <input type="text" name="episodesPerSeason" id="episodesPerSeason" class="form-control" 
                    value="{{ old('episodesPerSeason') }}">
            </div>
        </div>
    
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>

</x-layout>