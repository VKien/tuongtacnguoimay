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
    <div class="row">
        <div class="col-6">
            <form action="{{route("create-employee")}}" method="POST">
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
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" name="name" value="{{old("name")}}" class="form-control"
                           id="name"
                           aria-describedby="name"
                           placeholder="name">
                    <span class="text-danger">@error("name") {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="email" name="email" value="{{old("email")}}" class="form-control"
                           id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Enter email">
                    <span class="text-danger">@error("email") {{$message}}@enderror</span>
                </div>
                <div class="form-group d-flex">
                    <label for="exampleInputEmail1">sex</label>
                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio1"
                           value="0"/>
                    <label class="form-check-label" for="inlineRadio1">Nam</label>

                    <input class="form-check-input" type="radio" name="sex" id="inlineRadio2"
                           value="1"/>
                    <label class="form-check-label" for="inlineRadio2">Nu</label>
                    <span class="text-danger">@error("sex") {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="birth">birthday</label>
                    <input type="date" name="birthday" value="{{old("birthday")}}" class="form-control"
                           id="birthday"
                           aria-describedby="birthday"
                           placeholder="birthday">
                    <span class="text-danger">@error("birthday") {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">hometown</label>
                    <input type="text" name="hometown" value="{{old("hometown")}}" class="form-control"
                           id="name"
                           aria-describedby="emailHelp"
                           placeholder="hometown">
                    <span class="text-danger">@error("hometown") {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">address</label>
                    <input type="text" name="address" value="{{old("address")}}" class="form-control"
                           id="address"
                           aria-describedby="emailHelp"
                           placeholder="Enter name">
                    <span class="text-danger">@error("address") {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">phone</label>
                    <input type="text" name="phone" value="{{old("phone")}}" class="form-control"
                           id="phone"
                           aria-describedby="emailHelp"
                           placeholder="phone">
                    <span class="text-danger">@error("phone") {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">degree</label>
                    <input type="text" name="degree" value="{{old("degree")}}" class="form-control"
                           id="degree"
                           aria-describedby="degree"
                           placeholder="degree">
                    <span class="text-danger">@error("degree") {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">password</label>
                    <input type="password" name="password" value="{{old("password")}}" class="form-control"
                           id="exampleInputPassword1"
                           placeholder="Password">
                    <span class="text-danger">@error("password") {{$message}}@enderror</span>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
