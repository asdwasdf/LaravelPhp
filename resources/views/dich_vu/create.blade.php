@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Thêm dịch vụ</h2>

    <form method="POST" action="{{ route('dich_vu.store') }}">
        @csrf
        <div class="mb-3">
            <label for="MaDV" class="form-label">Mã dịch vụ</label>
            <input type="text" class="form-control" id="MaDV" name="MaDV" required>
        </div>
        <div class="mb-3">
            <label for="TenDV" class="form-label">Tên dịch vụ</label>
            <input type="text" class="form-control" id="TenDV" name="TenDV" required>
        </div>
        <div class="mb-3">
            <label for="Mota" class="form-label">Mô tả</label>
            <textarea class="form-control" id="Mota" name="Mota" rows="3" required></textarea>
        </div>
        <div class="mb-3">
            <label for="GiatriDV" class="form-label">Giá trị</label>
            <input type="number" class="form-control" id="GiatriDV" name="GiatriDV" required>
        </div>
        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="{{ route('dich_vu.index') }}" class="btn btn-secondary">Thoát</a>
    </form>
</div>
@endsection
