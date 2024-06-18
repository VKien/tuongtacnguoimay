<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Health Record Details</h1>
    <div class="card">
        <div class="card-header">
            Record #{{ $healthRecord->id }}
        </div>
        <div class="card-body">
            <p><strong>Date:</strong> {{ $healthRecord->date }}</p>
            <p><strong>Doctor:</strong> {{ $healthRecord->doctor->name }}</p>
            <p><strong>Pet:</strong> {{ $healthRecord->pet->name }}</p>
            <a href="{{ route('health_records.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>

</body>
</html>
