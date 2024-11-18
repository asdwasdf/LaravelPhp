<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KhachHang;

class KhachHangController extends Controller
{
    // List all customers
    public function index()
    {
        $customers = KhachHang::all();
        return view('khach_hang.index', compact('customers'));
    }

    // Show create form
    public function create()
    {
        return view('khach_hang.create');
    }

    // Store a new customer
    public function store(Request $request)
    {
        $request->validate([
            'MaKH' => 'required|unique:khach_hang|max:20',
            'TenKH' => 'required|max:50',
            'Diachi' => 'required|max:50',
            'Email' => 'required|email|max:30',
        ]);

        KhachHang::create($request->all());

        return redirect()->route('khach_hang.index')->with('success', 'Khách hàng được thêm thành công.');
    }

    // Show edit form
    public function edit($id)
    {
        $customer = KhachHang::findOrFail($id);
        return view('khach_hang.edit', compact('customer'));
    }

    // Update an existing customer
    public function update(Request $request, $id)
    {
        $request->validate([
            'TenKH' => 'required|max:50',
            'SDT' => 'required|digits:10',
            'Diachi' => 'required|max:50',
            'Email' => 'required|email|max:30',
            'LinhvucKD' => 'required|max:50',
            'LoaiKH' => 'required|max:20',
        ]);

        $customer = KhachHang::findOrFail($id);
        $customer->update($request->all());

        return redirect()->route('khach_hang.index')->with('success', 'Khách hàng được cập nhật thành công.');
    }

    // Delete a customer
    public function destroy($id)
    {
        $customer = KhachHang::findOrFail($id);
        $customer->delete();

        return redirect()->route('khach_hang.index')->with('success', 'Khách hàng đã được xóa.');
    }

    public function search(Request $request)
{
    // Build a query to filter customers
    $query = KhachHang::query();

    // Filter by Mã khách hàng (Customer ID)
    if ($request->filled('ma_khach_hang')) {
        $query->where('MaKH', 'like', '%' . $request->ma_khach_hang . '%');
    }

    // Filter by Tên khách hàng (Customer Name)
    if ($request->filled('ten_khach_hang')) {
        $query->where('TenKH', 'like', '%' . $request->ten_khach_hang . '%');
    }

    // Filter by Loại khách hàng (Customer Type)
    if ($request->filled('loai_khach_hang')) {
        $query->where('LoaiKH', $request->loai_khach_hang);
    }

    // Execute the query and get the filtered results
    $customers = $query->get();

    // Return the same view but with filtered results
    return view('khach_hang.index', compact('customers'));
}

}
