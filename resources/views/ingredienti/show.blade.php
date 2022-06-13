<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Ingrediente</h1>

    <h2>
        {{ $ingrediente->name }}
    </h2>
    <a href="{{ route('ingrediente.edit', $ingrediente->id) }}">Modifica ingrediente</a>

    <form action="{{ route('ingrediente.destroy', $ingrediente->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Cancella Ingrediente</button>
    </form>

    <a href="{{ route('ingrediente.index') }}">Ritorna agli ngredienti</a>

    <br/>

    <a href="{{ route('pizze.index') }}">Menu pizze</a>

</body>

</html>