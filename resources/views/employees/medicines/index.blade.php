<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicines</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <div class="mb-3">
        <a href="{{ route('medicines.create') }}" class="btn btn-primary">Add Medicine</a>
    </div>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Type</th>
            <th>Cost</th>
            <th>Manufacture Date</th>
            <th>Expiry Date</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($medicines as $medicine)
            <tr>
                <td>{{ $medicine->id }}</td>
                <td>{{ $medicine->name }}</td>
                <td>{{ $medicine->type }}</td>
                <td>{{ $medicine->cost }}</td>
                <td>{{ $medicine->manufacture_date }}</td>
                <td>{{ $medicine->expiry_date }}</td>
                <td>
                    <a href="{{ route('medicines.show', $medicine->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('medicines.edit', $medicine->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('medicines.destroy', $medicine->id) }}" method="POST" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this medicine?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
