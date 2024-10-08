<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <h1>{{$title}}</h1>
        @isset($mensagemSucesso)
            <div class="alert alert-sucess">
                {{$mensagemSucesso}}
            </div>
        @endisset
        @if ($errors->any())
            <div class="alert alert-damage">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        {{$slot}}
    </div>
</body>
</html>