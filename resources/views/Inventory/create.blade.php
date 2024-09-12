<!DOCTYPE html>

<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Circlebook</title>
    </head>
    <body>

<h1>Create</h1>

<div>

@if($errors=>any())

<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
</ul>

@endif

</div>

<form method="post" action="{{ route('inventory.store') }}" >


    @csrf
    @method('post')

    <div>
        <label for="itemID">Item ID:</label><br>
        <input type="text" id="itemID" name="itemID" ><br><br>
    </div>

    <div>
        <label for="itemName">Item Name:</label><br>
        <input type="text" id="itemName" name="itemName" ><br><br>
    </div>

    <div>
        <label for="description">Description:</label><br>
        <textarea id="description" name="description" ></textarea><br><br>
    </div>

    <div>
        <label for="quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity" ><br><br>
    </div>

    <div>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" step="0.01" ><br><br>
    </div>

    <div>
        <input type="submit" value="Submit">
    </div>

</form>

</body>
</html>