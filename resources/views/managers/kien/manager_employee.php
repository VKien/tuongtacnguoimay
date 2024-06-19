<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tài khoản</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #9ADAFE;
            padding: 15px;
            height: 100vh;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
        }
        .sidebar h6, .sidebar p {
            text-align: center;
        }
        .sidebar .divider {
            border-top: 1px solid black;
            margin: 10px 0;
        }
        .sidebar .btn {
            width: 100%;
            height: 60px;
            background-color: #DDDDDD;
            color: black;
            border: none;
            margin-top: 20px;
        }
        .topbar {
            background-color: #f8f9fa;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid #dee2e6;
            margin-left: 0px;
            position: fixed;
            top: 0;
            right: 0;
            left: 200px;
            height: 60px;
            z-index: 1000;
        }
        .main-content {
            margin-left: 200px;
            padding: 80px 20px 20px 20px;
        }
        .form-section {
            display: flex;
            justify-content: space-between;
        }
        .form-group {
            display: flex;
            align-items: center;
            margin-bottom: 15px;
        }
        .form-group label {
            width: 30%;
        }
        .form-left, .form-right {
            width: 48%;
        }
        .form-left .form-group input, .form-left .form-group select,
        .form-right .form-group input, .form-right .form-group select {
            width: 70%;
        }
        .user-info {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }
        .user-info img {
            margin-right: 10px;
        }
        .btn-group {
            display: flex;
            justify-content: space-between;
        }   
        .btn-group button {
            width: 10px;
            height: 50px;
            background-color: #D9D9D9;
            color: black;
            border: none;
            margin: 30px 100px 0 100px ;
            padding: 2.5px 5px;
        }
        .form-group .gender-radio {
            display: flex;
            justify-content: flex-start;
            align-items: center;
        }
        .form-group .gender-radio label {
            margin: 0 10px 0 0;
        }
        .section-divider {
            border-top: 1px solid black;
            margin: 40px 0;
        }
        .gender-radio {
            display: flex;
            align-items: center;
        }
        .gender-radio input[type="radio"] {
            margin-right: 5px;
        }
        .gender-radio input[type="radio"]#gd_nu {
            margin-left: 30px;
        }
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
        }
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 80%;
            max-width: 500px;
        }
        .modal-footer {
            display: flex;
            justify-content: flex-end;
            margin-top: 20px;
        }
        .modal-footer button {
            margin-left: 10px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="text-center mb-4">
            <h6>Quản lý</h6>
        </div>
        <div class="divider"></div>
        <button class="btn">Quản lý tài khoản</button>
    </div>
    <div class="topbar">
        <div></div>
        <div class="user-info">
            <img src="https://via.placeholder.com/30" class="rounded-circle" alt="User">
            <span>Vương Kiên</span>
        </div>
    </div>
    <div class="main-content">
        <form>
            <div class="form-section">
                <div class="form-left">
                    <div class="form-group">
                        <label for="employeeName">Tên nhân viên:</label>
                        <input type="text" class="form-control" id="employeeName" placeholder="Tên nhân viên">
                    </div>
                    <div class="form-group">
                        <label for="password">Mật khẩu:</label>
                        <input type="password" class="form-control" id="password" placeholder="Mật khẩu">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label>Giới tính:</label>
                        <div class="gender-radio">
                            <input type="radio" name="gender" value="male"> Nam
                            <input id="gd_nu" type="radio" name="gender" value="female"> Nữ
                        </div>
                    </div>
                </div>
                <div class="form-right">
                    <div class="form-group">
                        <label for="employeeRole">Chức vụ:</label>
                        <select class="form-control" id="employeeRole">
                            <option value="employee">Nhân Viên</option>
                            <option value="manager">Quản lý</option>
                            <option value="doctor">Bác Sĩ</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại:</label>
                        <input type="text" class="form-control" id="phone" placeholder="Số điện thoại">
                    </div>
                    <div class="form-group">
                        <label for="issueDate">Ngày cấp:</label>
                        <input type="date" class="form-control" id="issueDate">
                    </div>
                </div>
            </div>
            <div class="btn-group">
                <button type="button" class="btn btn-secondary" onclick="showConfirmation('Thêm')">Thêm</button>
                <button type="button" class="btn btn-secondary" onclick="showConfirmation('Xóa')">Xóa</button>
                <button type="button" class="btn btn-secondary" onclick="showConfirmation('Sửa')">Sửa</button>
                <button type="button" class="btn btn-secondary" onclick="showConfirmation('Tìm kiếm')">Tìm kiếm</button>
            </div>
        </form>
        <div class="section-divider"></div>
        <table class="table table-bordered mt-4">
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
                    <td>Đấu Thế</td>
                    <td>Nam</td>
                    <td>Bác sĩ</td>
                    <td>26/5/2024</td>
                    <td>09xxxxxxxx</td>
                    <td>bbb@gmail.com</td>
                </tr>
                <tr>
                    <td>NV01</td>
                    <td>Xuân Hiền</td>
                    <td>Nam</td>
                    <td>Nhân viên</td>
                    <td>26/5/2024</td>
                    <td>09xxxxxxxx</td>
                    <td>ccc@gmail.com</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <h5>Xác nhận sửa thông tin</h5>
            <p>Bạn có muốn <span id="actionType"></span> thông tin tài khoản không?</p>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Hủy</button>
                <button type="button" class="btn btn-primary" onclick="confirmAction()">Xác nhận</button>
            </div>
        </div>
    </div>

    <div id="successModal" class="modal">
        <div class="modal-content">
            <h5>Thông báo</h5>
            <p>Cập nhật tài khoản thành công!</p>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Xong</button>
            </div>
        </div>
    </div>

    <!-- js -->
    <script>
        function showConfirmation(action) {
            document.getElementById('actionType').innerText = action.toLowerCase();
            document.getElementById('confirmationModal').style.display = 'block';
        }

        function confirmAction() {
            document.getElementById('confirmationModal').style.display = 'none';
            document.getElementById('successModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('confirmationModal').style.display = 'none';
            document.getElementById('successModal').style.display = 'none';
        }
    </script>
</body>
</html>
