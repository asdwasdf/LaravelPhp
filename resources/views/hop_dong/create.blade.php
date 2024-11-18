@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Thêm hợp đồng</h2>

    <form method="POST" action="{{ route('hop_dong.store') }}">
        @csrf
        <div class="mb-3">
            <label for="MaHD" class="form-label">Mã hợp đồng</label>
            <input type="text" class="form-control" id="MaHD" name="MaHD" required>
        </div>
        <div class="mb-3">
            <label for="MaKH" class="form-label">Mã khách hàng</label>
            <input type="text" class="form-control" id="MaKH" name="MaKH" required>
        </div>
        <!-- Add other fields -->
        <button type="submit" class="btn btn-success">Lưu</button>
        <a href="{{ route('hop_dong.index') }}" class="btn btn-secondary">Thoát</a>
    </form>
</div>
@endsection
