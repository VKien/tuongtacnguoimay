<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <form action="{{route("register-user")}}" method="POST">
        @if(Session::has("success"))
            <div class="alert alert-success">
                {{Session::get("success")}}
            </div>
        @endif
        @if(Session::has("fail"))
            <div class="alert alert-fail">
                {{Session::get("fail")}}
            </div>
        @endif
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input type="text" name="email" value="{{old("email")}}" class="form-control" id="exampleInputEmail1"
                   aria-describedby="emailHelp"
                   placeholder="Enter email">
            <span class="text-danger">@error("email") {{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label for="name">Full name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old("name")}}"
                   placeholder="Full name">
            <span class="text-danger">@error("name") {{$message}}@enderror</span>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="password" value="{{old("password")}}" class="form-control" id="password"
                   placeholder="Password">
            <span class="text-danger">@error("password") {{$message}} @enderror</span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
</body>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</html>
