<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @if ($value >20)
        <div style="background: pink">
            <h1>Value is greater than 20</h1>
            
        </div> 

    @elseif ($value >10)
        <div style="background:rgba(201, 148, 208, 0.278)">
            <h1>Value is greater than 10</h1>
        </div>
    @else
        <div style="background:rgba(118, 205, 255, 0.278)">
            <h1>Value is less than or equal 10</h1>
        </div>       
    @endif
    <h1>Hello, {{ $name }}</h1>
    <p>
        She didn't like the food. She never did. She made the usual complaints and started the tantrum he knew was coming. But this time was different. Instead of trying to placate her and her unreasonable demands, he just stared at her and watched her meltdown without saying a word.
    </p>
    <div style="background:palevioletred; padding:10px;border-radius:8px;display:flex;justify-content:center">
    @foreach ($students as $s)
        <h1>{{$s}}</h1>
    @endforeach
    </div>
</body>
</html>