<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>THỐNG KÊ THUỐC THÚ Y</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.0/font/bootstrap-icons.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .sidebar {
            background-color: #b8e5fe;
            height: 100vh;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
            padding-top: 20px;
        }
        .sidebar span {
            display: block;
            text-align: center;
            font-weight: bold;
            font-size: 20px;
            margin-bottom: 20px;
            text-transform: uppercase;
        }
        .sidebar .bi {
            font-size: 25px;
            margin-right: 12px;
            vertical-align: middle;
        }
        .sidebar .nav-link {
            color: #000;
            font-size: 13px;
            margin-bottom: 10px;
            transition: background-color 0.3s ease; /* Thêm hiệu ứng transition */
        }
        .sidebar .nav-link.active {
            background-color: #DDDDDD;
            color: #000;
        }
        .sidebar .nav-link:hover {
            background-color: #DDDDDD;
            color: #000;
        }
        .container-fluid {
            padding-left: 0;
        }
        .header {
            background-color: #f8f9fa;
            padding: 10px 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .header .username {
            font-weight: bold;
        }
        .p-4 {
            padding: 2rem !important;
        }
        .nav-tabs .nav-link {
            border: 1px solid #dee2e6;
            border-bottom-color: transparent;
        }
        .nav-tabs .nav-link.active {
            background-color: #fff;
            border-color: #dee2e6 #dee2e6 #fff;
        }
        .table {
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #0d6efd;
            border-color: #0d6efd;
        }
        .btn-primary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }
        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }
        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
        /* Ensure proper layout alignment */
        form .row {
            margin-left: 0;
            margin-right: 0;
        }

        form .form-check-inline {
            margin-left: 10px;
        }

        form .btn-secondary {
            margin-top: 10px;
        }

        form .text-center button {
            margin: 10px;
        }

        form .w-100 {
            width: 100%;
        }

        /* Custom button styling */
        .custom-button {
            width: 150px; /* Adjust button width as needed */
        }

        /* Add space between inline buttons */
        .row .col-auto:not(:last-child) {
            margin-right: 20px;
        }

        /* Button hover effect */
        .btn-secondary:hover {
            background-color: #0b5ed7;
            border-color: #0a58ca;
        }

    </style>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar mt-0">
            <div class="d-flex flex-column p-3 pt-0">
                <div class="mt-0">
                    <span> <i class="bi bi-person-circle"></i>BAC SI</span>
                </div>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="#">
                            <i class="bi bi-calendar-check"></i>
                            Thống kê nhân viên
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link active" href="#">
                            <i class="bi bi-calendar-plus"></i>
                            Thống kê thuốc thú Y
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="#">
                            <i class="bi bi-calendar-check"></i>
                            Thống kê khách hàng
                        </a>
                    </li>
                    <li class="nav-item mb-2">
                        <a class="nav-link" href="#">
                            <i class="bi bi-calendar-check"></i>
                            Thống kê thú cưng
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-10 p-0">
            <div class="header d-flex justify-content-end ms-0 ps-0">
                <span class="fs-5">Nguyen The
                <img class="w-30 h-30" style="width: 40px" src="../../img/logo.jpg" alt=""></span>
            </div>
            <div class="p-4">

                <form class="mb-3">
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="maThuoc" class="form-label">Mã thuốc</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="maThuoc">
                        </div>
                        <div class="col-md-2">
                            <label for="Trangthai" class="form-label">Trạng thái</label>
                        </div>
                        <div class="col-md-4">
                            <select id="Trangthai" class="form-select">
                                <option selected>Chọn trạng thái..</option>
                                <option value="1">Còn</option>
                                <option value="2">Hết</option>
                            </select>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="tenNhanVien" class="form-label">Tên nhân viên</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="tenNhanVien">
                        </div>
                        <div class="col-md-2">
                            <label for="giaThuoc" class="form-label">Giá thuốc</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="giaThuoc">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="ngaySanXuat" class="form-label">Ngày sản xuất</label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" id="ngaySanXuat">
                        </div>
                        <div class="col-md-2">
                            <label for="hanSuDung" class="form-label">Hạn sử dụng</label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" id="hanSuDung">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-2">
                            <label for="soLuong" class="form-label">Số lượng</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" id="soLuong">
                        </div>
                        <div class="col-md-2">
                            <label for="ngayNhap" class="form-label">Ngày nhập</label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" id="ngayNhap">
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center ">
                        <div class="col-auto">
                            <button type="button" class="btn btn-secondary custom-button">Tìm kiếm</button>
                        </div>
                        <div class="col-auto">
                            <button type="button" class="btn btn-secondary custom-button">Xuất thông tin</button>
                        </div>
                    </div>
                </form>
                <table class="table table-bordered">
                    <thead class="table-light"  >
                    <tr >
                        <th scope="col" style="background-color: #9adafe ">Mã</th>
                        <th scope="col " style="background-color: #9adafe ">Tên</th>
                        <th scope="col" style="background-color: #9adafe ">SL</th>
                        <th scope="col" style="background-color: #9adafe ">T.Thái</th>
                        <th scope="col" style="background-color: #9adafe ">Giá</th>
                        <th scope="col" style="background-color: #9adafe ">Ngày sản xuất</th>
                        <th scope="col" style="background-color: #9adafe ">Hạn sử dụng</th>
                        <th scope="col" style="background-color: #9adafe ">Ngày nhập</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>MT001</td>
                        <td>Thuốc ABC</td>
                        <td>50</td>
                        <td>Còn</td>
                        <td>100,000 VNĐ</td>
                        <td>2023-05-20</td>
                        <td>2024-05-20</td>
                        <td>2023-04-15</td>
                    </tr>
                    <tr>
                        <td>MT002</td>
                        <td>Thuốc XYZ</td>
                        <td>20</td>
                        <td>Hết</td>
                        <td>150,000 VNĐ</td>
                        <td>2022-12-10</td>
                        <td>2023-12-10</td>
                        <td>2022-11-20</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
</body>
</html>