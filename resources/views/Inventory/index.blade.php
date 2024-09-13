<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Circlebook</title>
    <!-- Bootstrap CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center mb-4">Inventory Management</h2>
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
                <tr>
                    <th>Item Name</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach($inventories as $inventory)
                <tr>
                    <td>{{$inventory->itemName}}</td>
                    <td>{{$inventory->description}}</td>
                    <td>{{$inventory->quantity}}</td>
                    <td>{{$inventory->price}}</td>
                    <td>
                        <a href="{{ route('inventory.edit', ['inventory' => $inventory->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('inventory.delete', ['inventory' => $inventory]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Delete" class="btn btn-sm btn-danger" />
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Add Button -->
        <div class="d-flex justify-content-end mt-3">
            <a href="{{ route('inventory.create') }}" class="btn btn-success">ADD</a>
        </div>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
