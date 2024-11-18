@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Quản lý hợp đồng</h2>

    <!-- Search Form -->
    <form method="GET" action="{{ route('hop_dong.search') }}" class="mb-4">
        <div class="row">
            <div class="col-md-3">
                <input type="text" name="ma_gd" class="form-control" placeholder="Mã hợp đồng" value="{{ request('ma_gd') }}">
            </div>
            <div class="col-md-3">
                <input type="text" name="ma_kh" class="form-control" placeholder="Mã khách hàng" value="{{ request('ma_kh') }}">
            </div>
            <div class="col-md-3">
                <input type="text" name="ma_nv" class="form-control" placeholder="Mã nhân viên" value="{{ request('ma_nv') }}">
            </div>
            <div class="col-md-3">
                <select name="trang_thai" class="form-select">
                    <option value="">Trạng thái</option>
                    <option value="Hoàn thành" {{ request('trang_thai') == 'Hoàn thành' ? 'selected' : '' }}>Hoàn thành</option>
                    <option value="Đang thực hiện" {{ request('trang_thai') == 'Đang thực hiện' ? 'selected' : '' }}>Đang thực hiện</option>
                    <option value="Hủy" {{ request('trang_thai') == 'Hủy' ? 'selected' : '' }}>Hủy</option>
                </select>
            </div>
        </div>
        <div class="mt-3">
            <button type="submit" class="btn btn-success">Tìm kiếm</button>
        </div>
    </form>

    <!-- Contracts Table -->
    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã hợp đồng</th>
                <th>Mã khách hàng</th>
                <th>Mã nhân viên</th>
                <th>Mã dịch vụ</th>
                <th>Nội dung</th>
                <th>Giá trị</th>
                <th>Ngày bắt đầu</th>
                <th>Ngày kết thúc</th>
                <th>Trạng thái</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($contracts as $key => $contract)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $contract->MaHD }}</td>
                <td>{{ $contract->MaKH }}</td>
                <td>{{ $contract->MaNV }}</td>
                <td>{{ $contract->MaDV }}</td>
                <td>{{ $contract->NoidungHD }}</td>
                <td>{{ number_format($contract->GiatriHD, 0, ',', '.') }}</td>
                <td>{{ $contract->NgayBD }}</td>
                <td>{{ $contract->NgayKT }}</td>
                <td>{{ $contract->TrangthaiHD }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="11" class="text-center">Không tìm thấy hợp đồng phù hợp.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
