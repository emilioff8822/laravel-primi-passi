<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>INFO</h1>
    @include('partials.header')

    <ul>
        @forelse ($colors as $color)
            <li>{{ $color }}</li>
        @empty
            <li>non ci sono colori</li>
        @endforelse
    </ul>

</body>

</html>
