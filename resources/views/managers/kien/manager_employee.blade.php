<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý tài khoản</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <style>
        .sidebar {
            background-color: #9adafe;
            padding: 15px;
            height: 100vh;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
        }
        .sidebar h6, .sidebar p {
            text-align: center;
            font-size: 22px;
        }
        .sidebar .divider {
            border-top: 1px solid black;
            margin: 10px 0;
        }
        .sidebar .btn {
            width: 100%;
            height: 60px;
            color: black;
            border: none;
            margin-top: 20px;
            background-color: #DDDDDD;
        }
        .sidebar .btn:hover {
            background-color: #DDDDDD;
        }
        .topbar {
            background-color: #f8f9fa;
            padding: 22px 12px 12px;
            display: flex;
            justify-content: flex-end;
            align-items: center;
            border-bottom: 1px solid #dee2e6;
            position: fixed;
            top: 0;
            right: 0;
            left: 200px;
            height: 65px;
            z-index: 1000;
        }
        .main-content {
            margin-left: 200px;
            padding: 80px 20px 20px 20px;
        }
        .form-section {
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
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
        .btn-group {
            display: flex;
            justify-content: space-between;
        }
        .btn-group button {
            width: 100px;
            height: 50px;
            background-color: #D9D9D9;
            color: black;
            border: none;
            margin: 30px 100px 0 100px ;
            padding: 2.5px 5px;
        }
        .btn-group button:hover {
            transition: background-color 0.3s;
            background-color: #9ADAFE;
            color: black;
        }
        .btn-group .xoa-btn:hover{
            background-color: red;
        }

        .section-divider {
            border-top: 1px solid black;
            margin: 40px 0;
        }
        .table th, .table td {
            text-align: center;
        }

        /* Modal styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 1000;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0,0,0,0.5);
        }
        .modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
            border-radius: 5px;
        }
        .modal-content h5 {
            text-align: center;
            margin-bottom: 20px;
        }
        .modal-content p {
            text-align: left;
        }
        .modal-footer {
            display: flex;
            justify-content: flex-end;
            padding-top: 20px;
        }
        .modal-footer .btn {
            width: 100px;
            margin-left: 10px;
        }
        .modal-footer .btn-secondary {
            background-color: #D9D9D9;
            border: 1px solid #dee2e6;
            color: black;
        }
        .modal-footer .btn-primary {
            background-color: #D9D9D9;
            border: none;
            color: black;
        }
        .modal-footer .btn:hover {
            background-color: #007bff;
            color: black;
        }

        /* Success modal styles */
        .success-modal-content {
            background-color: white;
            margin: 15% auto;
            padding: 20px;
            border: 1px solid #888;
            width: 30%;
            border-radius: 5px;
            text-align: center;
        }
        .success-modal-content h5 {
            margin-bottom: 20px;
        }
        .success-modal-content button {
            background-color: #D9D9D9;
            border: none;
            color: black;
            padding: 10px 20px;
            border-radius: 5px;
        }
        .success-modal-content button:hover {
            background-color: #D9D9D9;
        }   
        .form-check-label {
            padding-right:5px;
            margin-right: 0px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="text-center mb-4">
            <h6><svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g clip-path="url(#clip0_221_768)">
            <path d="M13 13C11.1056 13 9.28878 12.3415 7.94924 11.1694C6.60969 9.99732 5.85714 8.4076 5.85714 6.75C5.85714 5.0924 6.60969 3.50269 7.94924 2.33058C9.28878 1.15848 11.1056 0.5 13 0.5C14.8944 0.5 16.7112 1.15848 18.0508 2.33058C19.3903 3.50269 20.1429 5.0924 20.1429 6.75C20.1429 8.4076 19.3903 9.99732 18.0508 11.1694C16.7112 12.3415 14.8944 13 13 13ZM12.1685 18.0391L11.1306 16.5254C10.7734 16.0029 11.2031 15.3438 11.8951 15.3438H13H14.0993C14.7913 15.3438 15.221 16.0078 14.8638 16.5254L13.8259 18.0391L15.6897 24.0889L17.6987 16.916C17.8103 16.5205 18.2455 16.2617 18.6975 16.3643C22.6094 17.2236 25.5 20.3193 25.5 24.001C25.5 24.8311 24.7299 25.5 23.7868 25.5H16.4319C16.3147 25.5 16.2087 25.4805 16.1083 25.4463L16.125 25.5H9.875L9.89174 25.4463C9.7913 25.4805 9.67969 25.5 9.56808 25.5H2.21317C1.27009 25.5 0.5 24.8262 0.5 24.001C0.5 20.3145 3.39621 17.2188 7.30246 16.3643C7.75446 16.2666 8.18973 16.5254 8.30134 16.916L10.3103 24.0889L12.1741 18.0391H12.1685Z" fill="black"/>
            </g>
            <defs>
            <clipPath id="clip0_221_768">
            <rect width="25" height="25" fill="white" transform="translate(0.5 0.5)"/>
            </clipPath>
            </defs>
            </svg>Quản lý</h6>
        </div>
        <div class="divider"></div>
        <button class="btn"><svg width="15" height="16" viewBox="0 0 25 26" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7.14286 0.5C8.13058 0.5 8.92857 1.19824 8.92857 2.0625V3.625H16.0714V2.0625C16.0714 1.19824 16.8694 0.5 17.8571 0.5C18.8449 0.5 19.6429 1.19824 19.6429 2.0625V3.625H22.3214C23.8002 3.625 25 4.6748 25 5.96875V8.3125H0V5.96875C0 4.6748 1.19978 3.625 2.67857 3.625H5.35714V2.0625C5.35714 1.19824 6.15513 0.5 7.14286 0.5ZM0 9.875H25V23.1562C25 24.4502 23.8002 25.5 22.3214 25.5H2.67857C1.19978 25.5 0 24.4502 0 23.1562V9.875ZM3.57143 13.7812V15.3438C3.57143 15.7734 3.97321 16.125 4.46429 16.125H6.25C6.74107 16.125 7.14286 15.7734 7.14286 15.3438V13.7812C7.14286 13.3516 6.74107 13 6.25 13H4.46429C3.97321 13 3.57143 13.3516 3.57143 13.7812ZM10.7143 13.7812V15.3438C10.7143 15.7734 11.1161 16.125 11.6071 16.125H13.3929C13.8839 16.125 14.2857 15.7734 14.2857 15.3438V13.7812C14.2857 13.3516 13.8839 13 13.3929 13H11.6071C11.1161 13 10.7143 13.3516 10.7143 13.7812ZM18.75 13C18.2589 13 17.8571 13.3516 17.8571 13.7812V15.3438C17.8571 15.7734 18.2589 16.125 18.75 16.125H20.5357C21.0268 16.125 21.4286 15.7734 21.4286 15.3438V13.7812C21.4286 13.3516 21.0268 13 20.5357 13H18.75ZM3.57143 20.0312V21.5938C3.57143 22.0234 3.97321 22.375 4.46429 22.375H6.25C6.74107 22.375 7.14286 22.0234 7.14286 21.5938V20.0312C7.14286 19.6016 6.74107 19.25 6.25 19.25H4.46429C3.97321 19.25 3.57143 19.6016 3.57143 20.0312ZM11.6071 19.25C11.1161 19.25 10.7143 19.6016 10.7143 20.0312V21.5938C10.7143 22.0234 11.1161 22.375 11.6071 22.375H13.3929C13.8839 22.375 14.2857 22.0234 14.2857 21.5938V20.0312C14.2857 19.6016 13.8839 19.25 13.3929 19.25H11.6071ZM17.8571 20.0312V21.5938C17.8571 22.0234 18.2589 22.375 18.75 22.375H20.5357C21.0268 22.375 21.4286 22.0234 21.4286 21.5938V20.0312C21.4286 19.6016 21.0268 19.25 20.5357 19.25H18.75C18.2589 19.25 17.8571 19.6016 17.8571 20.0312Z" fill="black"/>
        </svg> Quản lý tài khoản</button>
        
    </div>
    <div class="topbar">
        <div class="user-info">
            <span>Quốc Huy</span>
            <img src="https://via.placeholder.com/30" class="rounded-circle" alt="User">
        </div>
    </div>
    <div class="main-content">
        <div class="form-section mt-3">
            <div class="form-left">
                <div class="form-group">
                    <label for="doctorId">Tên nhân viên:</label>
                    <input type="text" class="form-control" id="doctorId">
                </div>
                <div class="form-group">
                    <label for="password">Mật khẩu:</label>
                    <input type="password" class="form-control" id="password">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="gender">Giới tính:</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male">
                        <label class="form-check-label" for="male">Nam</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female">
                        <label class="form-check-label" for="female">Nữ</label>
                    </div>
                </div>
            </div>
            <div class="form-right">
                <div class="form-group">
                    <label for="role">Chức vụ:</label>
                    <select class="form-control" id="role">
                        <option>Quản lý</option>
                        <option>Bác sĩ</option>
                        <option>Nhân viên</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="issueDate">Ngày cấp:</label>
                    <input type="date" class="form-control" id="issueDate">
                </div>
                <div class="form-group">
                    <label for="phone">Số điện thoại:</label>
                    <input type="text" class="form-control" id="phone">
                </div>
            </div>
        </div>
        <div class="btn-group">
            <button type="button" class="btn tao-so-btn" onclick="showConfirmation('Thêm')">Thêm</button>
            <button type="button" class="btn xoa-btn" onclick="showConfirmation('Xóa')"> Xóa</button>
            <button type="button" class="btn cap-nhat-btn" onclick="showConfirmation('Sửa')"> Sửa</button>
            <button type="button" class="btn">Tìm kiếm</button>
        </div>
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

    <!-- Confirmation Modal -->
    <div id="confirmationModal" class="modal">
        <div class="modal-content">
            <h5>Xác nhận <span id="actionTypeText"></span> tài khoản</h5>
            <p>Bạn có muốn <span id="actionType"></span> tài khoản không?</p>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" onclick="closeModal()">Hủy</button>
                <button type="button" class="btn btn-primary" onclick="confirmAction()">Xác nhận</button>
            </div>
        </div>
    </div>

    <!-- Success Modal -->
    <div id="successModal" class="modal">
        <div class="success-modal-content">
            <h5>Thông báo</h5>
            <p id="successMessage">Thao tác thành công!</p>
            <button onclick="closeSuccessModal()">Xong</button>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        let currentAction = '';

        function showConfirmation(action) {
            currentAction = action;
            const actionType = action.toLowerCase();
            document.getElementById('actionType').innerText = actionType;
            document.getElementById('actionTypeText').innerText = actionType;
            document.getElementById('confirmationModal').style.display = 'block';
        }

        function closeModal() {
            document.getElementById('confirmationModal').style.display = 'none';
        }

        function confirmAction() {
            closeModal();
            // Display success message modal
            document.getElementById('successMessage').innerText = `${currentAction} tài khoản thành công!`;
            document.getElementById('successModal').style.display = 'block';
        }

        function closeSuccessModal() {
            document.getElementById('successModal').style.display = 'none';
        }
    </script>
</body>
</html>
