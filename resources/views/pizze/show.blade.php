<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>{{ $pizza->nome_pizza }}</h1>
    <h1>Ingredienti</h1>
    @if ($ingredienti->isEmpty())
    <div>
        non ci sono ingredienti in questa pizza!
    </div>
    @else
    <ul>
        @foreach ($ingredienti as $ingrediente)
        <li>{{$ingrediente->name}} </li>
        @endforeach
    </ul>
    @endif
    <a href="{{ route('pizze.edit', $pizza->id) }}">Modifica</a>

    <form action="{{ route('pizze.destroy', $pizza->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Cancella Pizza</button>
    </form>
    <a href="{{ route('pizze.index') }}">Home</a>
</body>

</html>