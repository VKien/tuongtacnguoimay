<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicines</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Health Records</h1>
    <a href="{{ route('health_records.create') }}" class="btn btn-primary">Create New Health Record</a>
    <table class="table mt-4">
        <thead>
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Doctor</th>
            <th>Pet</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($healthRecords as $healthRecord)
            <tr>
                <td>{{ $healthRecord->id }}</td>
                <td>{{ $healthRecord->date }}</td>
                <td>{{ $healthRecord->doctor_id }}</td>
                <td>{{ $healthRecord->pet_id}}</td>
                <td>
                    <a href="{{ route('health_records.show', $healthRecord->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('health_records.edit', $healthRecord->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('health_records.destroy', $healthRecord->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
