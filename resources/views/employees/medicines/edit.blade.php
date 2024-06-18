<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Medicine</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Edit Medicine</h2>
    <form action="{{ route('medicines.update', $medicine->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $medicine->name }}" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ $medicine->type }}" required>
        </div>
        <div class="form-group">
            <label for="cost">Cost:</label>
            <input type="number" class="form-control" id="cost" name="cost" step="0.01" value="{{ $medicine->cost }}"
                   required>
        </div>
        <div class="form-group">
            <label for="manufacture_date">Manufacture Date:</label>
            <input type="date" class="form-control" id="manufacture_date" name="manufacture_date"
                   value="{{ $medicine->manufacture_date }}" required>
        </div>
        <div class="form-group">
            <label for="expiry_date">Expiry Date:</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date" value
            ="{{ $medicine->expiry_date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>
