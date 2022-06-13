<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('ingrediente.store') }}" method="POST">
        @csrf
        <label for="name">Inserisci il nome della ingrediente:</label>
        <input type="text" name="name" placeholder="Nome Ingrediente">
        <button type="submit">salva ingrediente</button>
    </form>
</body>

</html>
