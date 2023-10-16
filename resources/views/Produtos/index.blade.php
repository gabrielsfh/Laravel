<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PÁGINA DE PRODUTOS</h1>
    @foreach($produtos as $produto)
    <p>{{$produto->nome}}</p>
    <p>{{$produto->descricao}}</p>
    <p>{{$produto->valor}}</p>
    
    @endforeach
</body>
</html>