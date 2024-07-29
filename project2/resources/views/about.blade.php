<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>

<body>
    <h1>About page {{ $number }}</h1>

    @if ($number < 10)
        <h2>Number is Less than 10</h2>
    @elseif($number > 20)
        <h2>Number is Greater than 20</h2>
    @else
        <h2>Number is Between 10 and 20</h2>
    @endif

</body>

</html>
