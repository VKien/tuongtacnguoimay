<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sổ khám bệnh</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="text-center">Sổ khám bệnh</h2>
    <div class="row mb-3">
        <form>
            <div class="row mb-3">
                <div class="col-md-3">
                    <label for="doctorId" class="form-label">Mã bác sĩ</label>
                    <input type="text" class="form-control" value="{{ $healthRecordInput->doctor_id ?? '' }}"
                           placeholder="Mã bác sĩ">
                </div>
                <div class="col-md-3">
                    <label for="prescriptionId" class="form-label">Mã đơn thuốc</label>
                    <input type="text" class="form-control" value="{{ $healthRecordInput->prescription_id ?? '' }}"
                           placeholder="Mã đơn thuốc">
                </div>
                <div class="col-md-3">
                    <label for="petId" class="form-label">Mã thú cưng</label>
                    <input type="text" class="form-control" value="{{ $healthRecordInput->pet_id ?? '' }}"
                           placeholder="Mã thú cưng">
                </div>
                <div class="col-md-3">
                    <label for="phone" class="form-label">Số điện thoại</label>
                    <input type="text" class="form-control" value="{{ $healthRecordInput->phone_customer ?? '' }}"
                           placeholder="Số điện thoại">
                </div>
                <div class="col-md-3">
                    <label for="dateIssued" class="form-label">Ngày cấp</label>
                    <input type="text" class="form-control" value="{{ $healthRecordInput->date ?? '' }}">
                </div>
            </div>
        </form>
    </div>
    <div class="mb-3">
        <button type="button" class="btn btn-primary">Tạo sổ</button>
        <button type="button" class="btn btn-danger">Xóa</button>
        <button type="button" class="btn btn-success">Cập nhật</button>
        <button type="button" class="btn btn-info">Tìm kiếm</button>
    </div>

    <table class="table table-bordered mt-3">
        <thead>
        <tr>
            <th>Mã sổ</th>
            <th>Mã Bác sĩ</th>
            <th>Mã thú cưng</th>
            <th>Mã đơn thuốc</th>
            <th>Số điện thoại</th>
            <th>Thời gian</th>
            <th>Hành động</th>
        </tr>
        </thead>
        <tbody>
        @foreach($healthRecords as $healthRecord)
            <tr>
                <td>{{$healthRecord->health_record_id}}</td>
                <td>{{$healthRecord->doctor_id}}</td>
                <td>{{$healthRecord->pet_id}}</td>
                <td>{{$healthRecord->prescription_id}}</td>
                <td>{{$healthRecord->phone_customer}}</td>
                <td>{{$healthRecord->date}}</td>
                <td>
                    <form>
                        <input style="display: none" name="health_record_id"
                               value="{{$healthRecord->health_record_id}}">
                        <button type="submit" class="btn btn-primary btn-sm">Xem thông tin</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>
