<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update Employee</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-6">
            <form action="{{ url('managers/update-employee/' . $user->id) }}" method="POST">
                @csrf
                @method('PUT')
                @if(Session::has("fail"))
                    <div class="alert alert-danger">
                        {{ Session::get("fail") }}
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control"
                           id="name"
                           aria-describedby="name"
                           placeholder="Name">
                    <span class="text-danger">@error("name") {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control"
                           id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <span class="text-danger">@error("email") {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Chức vụ</label>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="1" id="flexCheckDefault"
                               {{$user->userRules->contains('rule_id', 1) ? "checked" : ""}} name="ruleEmployee">
                        <label class="form-check-label" for="flexCheckDefault">
                            Nhân viên
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="2" id="flexCheckChecked"
                               {{$user->userRules->contains('rule_id', 2) ? "checked" : ""}} name="ruleDoctor">
                        <label class="form-check-label" for="flexCheckChecked">
                            Bác sĩ
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="3"
                               id="flexCheckChecked"
                               {{$user->userRules->contains('rule_id', 3) ? "checked" : ""}} name="ruleManager">
                        <label class="form-check-label" for="flexCheckChecked">
                            Quản lý
                        </label>
                    </div>
                    <span class="text-danger">@error('rule') {{ $message }} @enderror</span>
                </div>

                <div class="form-group">
                    <label for="sex">Sex</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="inlineRadio1" value="0"
                            {{ $user->sex == 0 ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio1">Nam</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sex" id="inlineRadio2" value="1"
                            {{ $user->sex == 1 ? 'checked' : '' }}>
                        <label class="form-check-label" for="inlineRadio2">Nữ</label>
                    </div>
                    <span class="text-danger">@error("sex") {{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" value="{{ old('password') }}" class="form-control"
                           id="exampleInputPassword1"
                           placeholder="Password">
                    <span class="text-danger">@error("password") {{ $message }} @enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
