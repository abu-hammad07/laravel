<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>

<body>

    <div class="container">

        <form class="row g-3" action="{{ url('/addProduct') }}" method="post">
            @csrf
            <h1>Add Product</h1>
            <div class="col-md-6">
                <label for="title" class="form-label">Product Title</label>
                <input type="name" class="form-control" id="title" name="title" required>
            </div>
            <div class="col-md-6">
                <label for="overview" class="form-label">Product Overview</label>
                <input type="name" class="form-control" id="overview" name="overview" required>
            </div>
            <div class="col-6">
                <label for="description" class="form-label">Product Description</label>
                <textarea class="form-control" id="description" name="description" cols="30" rows="5" required></textarea>
            </div>
            <div class="col-6">
                <label for="price" class="form-label">Product Price</label>
                <input type="text" class="form-control" id="price" name="price" required>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </div>
        </form>

    </div>


</body>

</html>
