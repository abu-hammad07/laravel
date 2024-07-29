<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>

<body>

    <h1>Products List</h1>

    <ul>

        @foreach ($products as $product)

            <li>
                <b>Title:</b> {{ $product->title }} <br>
                <b>Description:</b> {{ $product->description }} <br>
                <b>Overview:</b> {{ $product->overview }} <br>
                <b>Price:</b> {{ $product->price }}
            </li>

        @endforeach

    </ul>

</body>

</html>
