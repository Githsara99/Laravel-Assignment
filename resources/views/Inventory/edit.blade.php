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
        <h1 class="text-center mb-4">Edit Inventory Item</h1>

        <div>
            @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>

        <form method="post" action="{{ route('inventory.update', ['inventory' => $inventory]) }}">
            @csrf
            @method('put')

            <!-- Item Name -->
            <div class="mb-3">
                <label for="itemName" class="form-label">Item Name:</label>
                <input type="text" id="itemName" name="itemName" value="{{ old('itemName', $inventory->itemName) }}" class="form-control">
            </div>

            <!-- Description -->
            <div class="mb-3">
                <label for="description" class="form-label">Description:</label>
                <textarea id="description" name="description" class="form-control">{{ old('description', $inventory->description) }}</textarea>
            </div>

            <!-- Quantity -->
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" id="quantity" name="quantity" value="{{ old('quantity', $inventory->quantity) }}" class="form-control">
            </div>

            <!-- Price -->
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="text" id="price" name="price" step="0.01" value="{{ old('price', $inventory->price) }}" class="form-control">
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <input type="submit" value="Submit" class="btn btn-primary">
            </div>
        </form>
    </div>

    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
