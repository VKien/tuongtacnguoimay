<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Medicine</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Edit Health Record</h1>
    <form action="{{ route('health_records.update', $healthRecord->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" value="{{ $healthRecord->date }}" required>
        </div>
        <div class="form-group">
            <label for="doctor_id">Doctor</label>
            <select name="doctor_id" class="form-control" required>
                @foreach($doctors as $doctor)
                    <option
                        value="{{ $doctor->id }}" {{ $doctor->id == $healthRecord->doctor_id ? 'selected' : '' }}>{{ $doctor->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="pet_id">Pet</label>
            <select name="pet_id" class="form-control" required>
                @foreach($pets as $pet)
                    <option
                        value="{{ $pet->id }}" {{ $pet->id == $healthRecord->pet_id ? 'selected' : '' }}>{{ $pet->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="health_record_id">Prescription</label>
            <select name="health_record_id" class="form-control" required>
                @foreach($prescriptions as $prescription)
                    <option
                        value="{{ $prescription->id }}" {{ $prescription->id == $healthRecord->id ? 'selected' : '' }}>
                        {{ $prescription->id }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>

</body>
</html>
