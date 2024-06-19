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
            <form action="{{route("customers-store-build")}}" method="POST">
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
                    <label for="exampleInputEmail1">so dien thoai</label>
                    <input type="text" name="phone" value="{{old("phone")}}" class="form-control"
                           id="exampleInputEmail1"
                           aria-describedby="emailHelp"
                           placeholder="Enter phone">
                    <span class="text-danger">@error("phone") {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">ngay dat dich vu</label>
                    <input type="date" name="date" value="{{old("date")}}" class="form-control"
                           id="exampleInputPassword1"
                           placeholder="date">
                    <span class="text-danger">@error("date") {{$message}}@enderror</span>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">loai dich vu</label>
                    <select class="form-control" id="exampleFormControlSelect1" name="service">
                        @foreach($services as $service)
                            <option value="{{$service->id}}">{{$service->name}}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
</div>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
