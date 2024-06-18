<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tài khoản</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            height: 100vh;
            background-color: #8fd3ff;
            padding: 20px;
        }
        .sidebar .menu-item {
            color: white;
            font-size: 18px;
            margin-bottom: 20px;
        }
        .header {
            height: 60px;
            background-color: #fff;
            border-bottom: 1px solid #ccc;
            padding: 10px 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        .header .title {
            font-size: 24px;
        }
        .header .user-info {
            display: flex;
            align-items: center;
        }
        .header .user-info span {
            margin-right: 10px;
        }
        .content {
            padding: 20px;
        }
        .form-group .gender {
            display: flex;
            align-items: center;
        }
        .form-group .gender input {
            margin-right: 10px;
        }
        .buttons {
            margin-top: 20px;
        }
        .buttons button {
            margin-right: 10px;
        }
        table {
            margin-top: 20px;
        }
        th {
            background-color: #8fd3ff;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <div class="sidebar">
            <div class="menu-item">
                <span>Quản lý tài khoản</span>
            </div>
        </div>
        <div class="w-100">
            <div class="header">
                <div class="title">Quản lý tài khoản</div>
                <div class="user-info">
                    <span>Kien</span>
                    <img src="user-icon.png" alt="User Icon" class="rounded-circle" style="width: 40px; height: 40px;">
                </div>
            </div>
            <div class="content">
                <form>
                    <div class="form-group">
                        <label for="username">Tên nhân viên:</label>
                        <input type="text" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="form-group">
                        <label>Giới tính:</label>
                        <div class="gender">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="male" value="Nam">
                                <label class="form-check-label" for="male">Nam</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="gender" id="female" value="Nữ">
                                <label class="form-check-label" for="female">Nữ</label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="role">Chức vụ:</label>
                        <select class="form-control" id="role" name="role">
                            <option value="Nhân viên">Nhân viên</option>
                            <option value="Quản lý">Quản lý</option>
                            <option value="Bác sĩ">Bác sĩ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="date">Ngày cấp:</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại:</label>
                        <input type="text" class="form-control" id="phone" name="phone">
                    </div>
                    <div class="buttons">
                        <button type="submit" class="btn btn-primary">Thêm</button>
                        <button type="reset" class="btn btn-secondary">Xóa</button>
                        <button type="button" class="btn btn-warning">Sửa</button>
                        <button type="button" class="btn btn-info">Tìm kiếm</button>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên nhân viên</th>
                            <th>Giới tính</th>
                            <th>Chức vụ</th>
                            <th>Ngày cấp</th>
                            <th>SDT</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>QL01</td>
                            <td>Vương Kiên</td>
                            <td>Nam</td>
                            <td>Quản lý</td>
                            <td>25/5/2024</td>
                            <td>09xxxxxxxx</td>
                            <td>aaa@gmail.com</td>
                        </tr>
                        <tr>
                            <td>BS01</td>
                            <td>Đậu Thế</td>
                            <td>Nam</td>
                            <td>Bác sĩ</td>
                            <td>26/5/2024</td>
                            <td>09xxxxxxxx</td>
                            <td>bbb@gmail.com</td>
                        </tr>
                        <tr>
                            <td>NV01</td>
                            <td>Xuân Hiền</td>
                            <td>Nữ</td>
                            <td>Nhân viên</td>
                            <td>26/5/2024</td>
                            <td>09xxxxxxxx</td>
                            <td>ccc@gmail.com</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
