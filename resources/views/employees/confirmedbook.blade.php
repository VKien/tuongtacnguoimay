<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetHaven Animal Hospital</title>
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
            padding: 10px 20px;
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
        <div class="col-md-10">
            <div class="header d-flex justify-content-end">
                    <span class="fs-4">Nguyen The
                        <img class="w-30 h-30" style="width: 50px" src="../../img/logo.jpg" alt="">
                    </span>
            </div>
            <div class="p-4">
                <h4>Sắp xếp lịch khám</h4>
                <ul class="nav nav-tabs mb-3">
                    <li class="nav-item">
                        <a class="nav-link " aria-current="page" href="#">Lịch khám mới (2)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Đã xác nhận (2)</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Đã hủy (2)</a>
                    </li>
                </ul>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Số điện thoại</th>
                        <th>Email</th>
                        <th>Thời gian đặt</th>
                        <th>Hành động</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>7</td>
                        <td>Nguyen The</td>
                        <td>0123xxxxx</td>
                        <td>hoanglyoko99@gmail.com</td>
                        <td>02/06/2023, 09:09 AM</td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="openCustomerModal('Nguyen The', '0123xxxxx', 'Hà Nội', 'Dịch vụ A', '02/06/2023, 09:09 AM', '')">Xem thông tin</button>
                        </td>
                    </tr>
                    <tr>
                        <td>8</td>
                        <td>Quoc Huy</td>
                        <td>0345xxxxx</td>
                        <td>vanamaivip@gmail.com</td>
                        <td>10/06/2023, 10:34 AM</td>
                        <td>
                            <button class="btn btn-primary btn-sm" onclick="openCustomerModal('Quoc Huy', '0345xxxxx', 'Hà Nội', 'Dịch vụ B', '10/06/2023, 10:34 AM', '')">Xem thông tin</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!-- Bang hiện thị ra thông tin chi tiết  -->
<!-- Customer Modal -->
<div class="modal fade" id="customerModal" tabindex="-1" aria-labelledby="customerModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="customerModalLabel">Thông tin khách hàng</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="customerName" class="form-label">Họ và tên:</label>
                    <input type="text" class="form-control" id="customerName" readonly>
                </div>
                <div class="mb-3">
                    <label for="customerPhone" class="form-label">Số điện thoại:</label>
                    <input type="text" class="form-control" id="customerPhone" readonly>
                </div>
                <div class="mb-3">
                    <label for="customerLocation" class="form-label">Cơ sở:</label>
                    <input type="text" class="form-control" id="customerLocation" readonly>
                </div>
                <div class="mb-3">
                    <label for="customerService" class="form-label">Dịch vụ:</label>
                    <input type="text" class="form-control" id="customerService" readonly>
                </div>
                <div class="mb-3">
                    <label for="bookingTime" class="form-label">Thời gian đặt:</label>
                    <input type="text" class="form-control" id="bookingTime" readonly>
                </div>
                <div class="mb-3">
                    <label for="customerNote" class="form-label">Ghi chú:</label>
                    <textarea class="form-control" id="customerNote" rows="3" readonly></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<!-- JS phần hiện thị chi tiết thông tin khách hàng -->
<script>
    function openCustomerModal(name, phone, location, service, time, note) {
        // Populate modal fields
        document.getElementById('customerName').value = name;
        document.getElementById('customerPhone').value = phone;
        document.getElementById('customerLocation').value = location;
        document.getElementById('customerService').value = service;
        document.getElementById('bookingTime').value = time;
        document.getElementById('customerNote').value = note;

        // Show the modal
        var myModal = new bootstrap.Modal(document.getElementById('customerModal'));
        myModal.show();
    }
</script>
c
