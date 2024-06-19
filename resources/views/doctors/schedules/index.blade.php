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
            <th>Mã KH</th>
            <th>Tên</th>
            <th>Loại dịch vụ</th>
            <th>Loại thú cưng</th>
            <th>Thời gian</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($schedules as $schedule)
            <tr>
                <td>{{ $schedule->id }}</td>
                <td>{{ $schedule->name }}</td>
                <td>{{ $schedule->type }}</td>
                <td>{{ $schedule->species }}</td>
                <td>{{ $schedule->date}}</td>
                <td>
                    <a href="{{ route('schedules.show', $schedule->id) }}" class="btn btn-info">View</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

</body>
</html>
