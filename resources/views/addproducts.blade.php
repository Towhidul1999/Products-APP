<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
</head>
<body>
    <div>
        <form action="{{ route('add.products') }}" method="POST">
            @csrf
            <input type="text" name="title" placeholder="Title">
            <input type="text" name="details" placeholder="Details">
            <input type="number" name="stock" placeholder="Current Stock">
            <input type="text" name="unit" placeholder="Base Unit">
            <input type="number" name="created" placeholder="Created">
            <input type="file" name="image" placeholder="Image">
            <button type="submit" class="btn btn-dark btn-block">Add</button>
        </form>
    </div>
</body>
</html>