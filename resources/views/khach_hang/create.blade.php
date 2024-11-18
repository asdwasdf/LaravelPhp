@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Thêm khách hàng</h2>

    <form method="POST" action="{{ route('khach_hang.store') }}">
        @csrf

        <div class="mb-3">
            <label for="MaKH" class="form-label">Mã khách hàng</label>
            <input type="text" class="form-control" id="MaKH" name="MaKH" value="{{ old('MaKH') }}" required>
        </div>

        <div class="mb-3">
            <label for="TenKH" class="form-label">Tên khách hàng</label>
            <input type="text" class="form-control" id="TenKH" name="TenKH" value="{{ old('TenKH') }}" required>
        </div>

        <div class="mb-3">
            <label for="SDT" class="form-label">Số điện thoại</label>
            <input type="text" class="form-control" id="SDT" name="SDT" value="{{ old('SDT') }}" required>
        </div>

        <div class="mb-3">
            <label for="Diachi" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" id="Diachi" name="Diachi" value="{{ old('Diachi') }}" required>
        </div>

        <div class="mb-3">
            <label for="Email" class="form-label">Email</label>
            <input type="email" class="form-control" id="Email" name="Email" value="{{ old('Email') }}" required>
        </div>

        <div class="mb-3">
            <label for="LinhvucKD" class="form-label">Lĩnh vực kinh doanh</label>
            <input type="text" class="form-control" id="LinhvucKD" name="LinhvucKD" value="{{ old('LinhvucKD') }}" required>
        </div>

        <div class="mb-3">
            <label for="LoaiKH" class="form-label">Loại khách hàng</label>
            <select class="form-select" id="LoaiKH" name="LoaiKH" required>
                <option value="Tiềm năng" {{ old('LoaiKH') == 'Tiềm năng' ? 'selected' : '' }}>Tiềm năng</option>
                <option value="Thường xuyên" {{ old('LoaiKH') == 'Thường xuyên' ? 'selected' : '' }}>Thường xuyên</option>
                <option value="VIP" {{ old('LoaiKH') == 'VIP' ? 'selected' : '' }}>VIP</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="{{ route('khach_hang.index') }}" class="btn btn-secondary">Thoát</a>
    </form>
</div>
@endsection
