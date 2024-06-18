<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Medicine</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>Add Medicine</h2>
    <form action="{{ route('medicines.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="type">Type:</label>
            <input type="text" class="form-control" id="type" name="type" required>
        </div>
        <div class="form-group">
            <label for="cost">Cost:</label>
            <input type="number" class="form-control" id="cost" name="cost" step="0.01" required>
        </div>
        <div class="form-group">
            <label for="manufacture_date">Manufacture Date:</label>
            <input type="date" class="form-control" id="manufacture_date" name="manufacture_date" required>
        </div>
        <div class="form-group">
            <label for="expiry_date">Expiry Date:</label>
            <input type="date" class="form-control" id="expiry_date" name="expiry_date" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>
