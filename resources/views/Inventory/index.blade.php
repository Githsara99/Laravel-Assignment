<!DOCTYPE html>

<html lang="eng">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Circlebook</title>
    </head>
    <body>

    <table>
   
    <tr>
        <th>Item Id</th>
        <th>Item Name</th>
        <th>Description</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>

    @foreach($inventories as $inventory)
    <tr>
        <td>{{$inventory->id}}</td>
        <td>{{$inventory->itemName}}</td>
        <td>{{$inventory->description}}</td>
        <td>{{$inventory->quantity}}</td>
        <td>{{$inventory->price}}</td>
        <td>
        <a href="{{ route('inventory.edit', ['inventory' => $inventory->id]) }}">Edit</a>
        </td>
        <td>
            <form method="post" action="{{ route('inventory.delete', ['inventory' => $inventory]) }}">
                @csrf
                @method('delete')
                <input type="submit" value="Delete" />
            </form>
        </td>
    </tr>
    @endforeach
</table>
    </body>
</html>