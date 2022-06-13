<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('pizze.update', $pizza->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome_pizza">Inserisci il nome della pizza:</label>
        <input type="text" name="nome_pizza" placeholder="Nome Pizza" value="{{$pizza->nome_pizza}}">
        <button type="submit">Modifica pizza</button>

    </form>
</body>

</html>
