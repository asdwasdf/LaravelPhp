@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Quản lý dịch vụ</h2>
    <a href="{{ route('dich_vu.create') }}" class="btn btn-primary mb-3">Thêm dịch vụ</a>

    <table class="table table-bordered table-hover">
        <thead>
            <tr>
                <th>STT</th>
                <th>Mã DV</th>
                <th>Tên DV</th>
                <th>Mô tả</th>
                <th>Giá trị</th>
                <!-- <th>Hành động</th> -->
            </tr>
        </thead>
        <tbody>
            @forelse ($services as $key => $service)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $service->MaDV }}</td>
                <td>{{ $service->TenDV }}</td>
                <td>{{ $service->Mota }}</td>
                <td>{{ number_format($service->GiatriDV, 0, ',', '.') }}</td>
                <!-- <td>
                    <a href="{{ route('dich_vu.edit', $service->MaDV) }}" class="btn btn-sm btn-primary">Sửa</a>
                    <form action="{{ route('dich_vu.destroy', $service->MaDV) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Xóa</button>
                    </form>
                </td> -->
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Không có dịch vụ nào.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
