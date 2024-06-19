<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $medicine->name }}</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    <h2>{{ $medicine->name }}</h2>
    <p><strong>Type:</strong> {{ $medicine->type }}</p>
    <p><strong>Cost:</strong> {{ $medicine->cost }}</p>
    <p><strong>Manufacture Date:</strong> {{ $medicine->manufacture_date }}</p>
    <p><strong>Expiry Date:</strong> {{ $medicine->expiry_date }}</p>
    <a href="{{ route('medicines.index') }}" class="btn btn-primary">Back</a>
</div>

</body>
</html>
