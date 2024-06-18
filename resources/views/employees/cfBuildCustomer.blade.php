<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif
    <form>
        <div class="col-md-4">
            <input type="text" name="status" style="display: none"
                   value="0">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Lịch khám
            mới {{ $statusCounts->where('status', 0)->first()->status_count ?? 0 }}
        </button>
    </form>
    <form>
        <div class="col-md-4">
            <input type="text" name="status" style="display: none"
                   value="1">
        </div>
        <button type="submit" class="btn btn-primary mt-3">Da xac
            nhan {{ $statusCounts->where('status', 1)->first()->status_count ?? 0 }}</button>
    </form>
    <form>
        <div class="col-md-4">
            <input type="text" name="status" style="display: none"
                   value="2">
        </div>
        <button type="submit" class="btn btn-primary mt-3">
            huy {{ $statusCounts->where('status', 2)->first()->status_count ?? 0 }}</button>
    </form>
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>phone</th>
            <th>date</th>
            @if($status == null || $status == 0)
                <th>Actions</th>
            @endif
            @if($status == 2)
                <th>message</th>
            @endif
        </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->phone }}</td>
                <td>{{$user->schedulesAsCustomer[0]->date}}
                </td>
                @if($status == null || $status == 0)
                    <td>
                        <form action="{{ route('cf-update-build', $user->schedulesAsCustomer[0]->id) }}" method="POST"
                              style="display:inline;">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary">Xác nhận</button>
                        </form>
                    </td>
                    <td>
                        <form id="cancelForm"
                              action="{{ route('cancel-update-build', $user->schedulesAsCustomer[0]->id) }}"
                              method="POST" style="display:inline;">
                            @csrf
                            @method('PUT')
                            <input type="text" id="cancelMessage" name="message" style="display: none" value="">
                            <button type="submit" class="btn btn-primary">Hủy</button>
                        </form>

                    </td>
                @endif
                @if($status == 2)
                    <td>
                        <button id="showMessageButton">Hiển thị thông báo</button>
                    </td>
                @endif
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
<script>
    document.getElementById('cancelForm').addEventListener('submit', function (event) {
        event.preventDefault(); // Prevent form submission

        var message = prompt("Nhập tin nhắn của bạn:"); // Prompt for message

        if (message !== null) { // If user entered a message
            document.getElementById('cancelMessage').value = message; // Set the message value to the hidden input field
            this.submit(); // Submit the form
        }
    });
</script>
<script>
    document.getElementById('showMessageButton').addEventListener('click', function () {
        var userName = "{{ $user->name ?? "NULL" }}"; // Get the user's name
        var message = "nguoi dung " + userName + " ly ro huy {{ $user->schedulesAsCustomer[0]->message ?? "NULL" }}"; //// the message with the user's name
        alert(message); // Display the message using an alert
    });
</script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
