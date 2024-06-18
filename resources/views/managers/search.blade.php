<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Employee</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <form>
        <div class="row">
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Mã nhân viên:" name="id"
                       value="{{ request('id') }}">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Tên nhân viên:" name="name"
                       value="{{ request('name') }}">
            </div>
            <div class="col-md-4">
                <select class="form-control" name="rule">
                    <option value="">Select Role</option>
                    @foreach($rules as $rule)
                        <option
                            value="{{ $rule->id }}" {{ request('rule') == $rule->id ? 'selected' : '' }}>{{ $rule->name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Search</button>
    </form>

    <table class="table table-bordered mt-4">
        <thead>
        <tr>
            <th>Mã nhân viên:</th>
            <th>Tên nhân viên:</th>
            <th>Chức vụ</th>
            <th>Lương(vnd)</th>
            <th>Giói tính</th>
            <th>Ngày sinh</th>
            <th>Ngày bắt đầu làm</th>
        </tr>
        </thead>
        <tbody>
        @foreach($data as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>
                    @foreach($user->userRules as $userRule)
                        <span class="border border-primary" >{{ $userRule->rule->name }}</span>
                    @endforeach
                </td>
                <td>110100</td>
                <td>{{ $user->sex == 0 ? 'Nam' : 'Nữ' }}</td>
                <td>{{ $user->formatted_birthday }}</td>
                <td>{{ $user->formatted_created_at }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <!-- Pagination links -->
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <!-- Nút Previous -->
            @if ($data->previousPageUrl())
                <li class="page-item"><a class="page-link" href="{{ $data->previousPageUrl() }}">Previous</a></li>
            @else
                <li class="page-item disabled"><span class="page-link">Previous</span></li>
            @endif

            <!-- Danh sách các trang -->
            @for ($i = 1; $i <= $data->lastPage(); $i++)
                <li class="page-item {{ $data->currentPage() == $i ? 'active' : '' }}">
                    <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                </li>
            @endfor

            <!-- Nút Next -->
            @if ($data->nextPageUrl())
                <li class="page-item"><a class="page-link" href="{{ $data->nextPageUrl() }}">Next</a></li>
            @else
                <li class="page-item disabled"><span class="page-link">Next</span></li>
            @endif
        </ul>
    </nav>


</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>
</html>
