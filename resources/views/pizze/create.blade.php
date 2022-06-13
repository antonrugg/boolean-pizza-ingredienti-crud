<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('pizze.store') }}" method="POST">
        @csrf
        <label for="nome_pizza">Inserisci il nome della pizza:</label>
        <input type="text" name="nome_pizza" placeholder="Nome Pizza">
        <button type="submit">salva pizza</button>
    </form>
</body>

</html>
