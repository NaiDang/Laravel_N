<!DOCTYPE html>
<html>
<head>
    <title>Dữ liệu từ API</title>
</head>
<body>
    <h1>Dữ liệu từ API</h1>
    <ul>
        @foreach ($data as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
</body>
</html>
