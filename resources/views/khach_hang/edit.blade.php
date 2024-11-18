@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Chỉnh sửa khách hàng</h2>

    <form method="POST" action="{{ route('khach_hang.update', $customer->MaKH) }}">
        @csrf
        @method('PUT')

        <!-- Form fields similar to the create form, but pre-filled with $customer data -->
        <div class="mb-3">
            <label for="TenKH" class="form-label">Tên khách hàng</label>
            <input type="text" class="form-control" id="TenKH" name="TenKH" value="{{ $customer->TenKH }}" required>
        </div>

        <div class="mb-3">
            <label for="SDT" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="SDT" name="SDT" value="{{ $customer->SDT }}" required>
        </div>

        <div class="mb-3">
            <label for="Diachi" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="Diachi" name="Diachi" value="{{ $customer->Diachi }}" required>
        </div>

        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="Email" value="{{ $customer->Email }}" required>
        </div>

        <div class="mb-3">
            <label for="LinhvucKD" class="form-label">Lĩnh vực kinh doanh</label>
            <input type="text" class="form-control" id="LinhvucKD" name="LinhvucKD" value="{{ $customer->LinhvucKD }}" required>
        </div>

        <div class="mb-3">
            <label for="LoaiKH" class="form-label">Loại khách hàng</label>
            <select class="form-select" id="LoaiKH" name="LoaiKH" required>
                <option value="Tiềm năng" {{ $customer->LoaiKH == 'Tiềm năng' ? 'selected' : '' }}>Tiềm năng</option>
                <option value="Thường xuyên" {{ $customer->LoaiKH == 'Thường xuyên' ? 'selected' : '' }}>Thường xuyên</option>
                <option value="VIP" {{ $customer->LoaiKH == 'VIP' ? 'selected' : '' }}>VIP</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Cập nhật</button>
        <a href="{{ route('khach_hang.index') }}" class="btn btn-secondary">Thoát</a>
    </form>
</div>
@endsection
