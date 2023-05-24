<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Good night</h1>
    <h1>{{ $tittle['tittle'] }}</h1>
    <p>{{ $tittle['description'] }}</p>
    <p>{{ $tittle['cop'] }}</p>

    <!-- @foreach ($tittle as $key => $value)
    <p>{{ $key }}: {{ $value }}</p>
    @endforeach -->
</body>
</html>
