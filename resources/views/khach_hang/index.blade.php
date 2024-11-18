
@extends('layouts.app')

@section('content')
            <!-- Form Container -->
            <div class="form-container">
                <h5>Thông tin khách hàng</h5>
                <form method="GET" action="{{ route('khach_hang.search') }}">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="ma_khach_hang" class="form-label">Mã khách hàng</label>
                            <input type="text" class="form-control" id="ma_khach_hang" name="ma_khach_hang" placeholder="Nhập mã khách hàng">
                        </div>
                        <div class="col-md-4">
                            <label for="ten_khach_hang" class="form-label">Tên khách hàng</label>
                            <input type="text" class="form-control" id="ten_khach_hang" name="ten_khach_hang" placeholder="Nhập tên khách hàng">
                        </div>
                        <div class="col-md-4">
                            <label for="loai_khach_hang" class="form-label">Loại khách hàng</label>
                            <select class="form-select" id="loai_khach_hang" name="loai_khach_hang">
                                <option value="" selected>Chọn loại khách hàng</option>
                                <option value="Tiềm năng">Tiềm năng</option>
                                <option value="Thường xuyên">Thường xuyên</option>
                                <option value="VIP">VIP</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success">Tìm kiếm</button>
                    </div>
                </form>
            </div>

            <!-- Table Container -->
            <div class="table-container">
                <table class="table table-bordered table-hover">
                    <thead class="table-light">
                        <tr>
                            <th>STT</th>
                            <th>Mã KH</th>
                            <th>Tên KH</th>
                            <th>SDT</th>
                            <th>Địa chỉ</th>
                            <th>Email</th>
                            <th>Lĩnh vực KD</th>
                            <th>Loại KH</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($customers as $key => $customer)
                        <tr>
                            <td>{{ $key + 1 }}</td>
                            <td>{{ $customer->MaKH}}</td>
                            <td>{{ $customer->TenKH }}</td>
                            <td>{{ $customer->SDT }}</td>
                            <td>{{ $customer->Diachi }}</td>
                            <td>{{ $customer->Email }}</td>
                            <td>{{ $customer->LinhvucKD }}</td>
                            <td>{{ $customer->LoaiKH }}</td>
                            <td class="action-buttons">
    <a href="{{ route('khach_hang.edit', $customer->MaKH) }}" class="btn btn-primary btn-sm">
        <i class="bi bi-pencil-square" title="Sửa"></i> Sửa
    </a>
    <form action="{{ route('khach_hang.destroy', $customer->MaKH) }}" method="POST" style="display:inline;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">
            <i class="bi bi-trash" title="Xóa"></i> Xóa
        </button>
    </form>
</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            <!-- Add Button -->
            <div class="mt-3">
                <a class="btn btn-primary"  href="{{ route('khach_hang.create') }}">Thêm</a>
                <button type="button" class="btn btn-secondary">Thoát</button>
            </div>
@endsection 