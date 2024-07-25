<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
</head>

<body>
    <h1 class="text-2xl">Hello World</h1>
    @foreach ($data as $row)
        <li> {{ $row['book_id'] }} </li>
        <li> {{ $row['book_name'] }} </li>
    @endforeach
</body>

</html>
