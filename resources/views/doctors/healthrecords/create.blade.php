<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Medicine</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

<div class="container">
    <h1>Create Health Record</h1>
    <form action="{{ route('health_records.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="date">Date</label>
            <input type="date" name="date" class="form-control" value="{{ date('Y-m-d') }}">
            @error('date')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="doctor_id">Doctor</label>
            <input type="text" name="doctor_id" class="form-control" value="{{$idDoctor }}"
                   readonly> @error('doctor_id')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="pet_id">Pet</label>
            <select name="pet_id" class="form-control">
                @foreach($pets as $pet)
                    <option value="{{ $pet->id }}">{{ $pet->id . " ".$pet->name }}</option>
                @endforeach
            </select>
            @error('pet_id')
            <div class="alert alert-danger mt-2">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
</html>
