<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HopDong;

class HopDongController extends Controller
{
    // List all contracts
    public function index()
    {
        $contracts = HopDong::all();
        return view('hop_dong.index', compact('contracts'));
    }

    // Show form to create a new contract
    public function create()
    {
        return view('hop_dong.create');
    }

    // Store a new contract
    public function store(Request $request)
    {
        $request->validate([
            'MaHD' => 'required|unique:hop_dong|max:20',
            'MaKH' => 'required|max:20',
            'MaNV' => 'required|max:20',
            'MaDV' => 'required|max:20',
            'NoidungHD' => 'required',
            'GiatriHD' => 'required|numeric',
            'NgayBD' => 'required|date',
            'NgayKT' => 'required|date|after_or_equal:NgayBD',
            'TrangthaiHD' => 'required|max:20',
        ]);

        HopDong::create($request->all());

        return redirect()->route('hop_dong.index')->with('success', 'Hợp đồng đã được thêm thành công.');
    }

    // Show form to edit a contract
    public function edit($id)
    {
        $contract = HopDong::findOrFail($id);
        return view('hop_dong.edit', compact('contract'));
    }

    // Update an existing contract
    public function update(Request $request, $id)
    {
        $request->validate([
            'MaKH' => 'required|max:20',
            'MaNV' => 'required|max:20',
            'MaDV' => 'required|max:20',
            'NoidungHD' => 'required',
            'GiatriHD' => 'required|numeric',
            'NgayBD' => 'required|date',
            'NgayKT' => 'required|date|after_or_equal:NgayBD',
            'TrangthaiHD' => 'required|max:20',
        ]);

        $contract = HopDong::findOrFail($id);
        $contract->update($request->all());

        return redirect()->route('hop_dong.index')->with('success', 'Hợp đồng đã được cập nhật.');
    }

    // Delete a contract
    public function destroy($id)
    {
        $contract = HopDong::findOrFail($id);
        $contract->delete();

        return redirect()->route('hop_dong.index')->with('success', 'Hợp đồng đã được xóa.');
    }

    public function search(Request $request)
{
    $query = HopDong::query();

    // Filter by contract ID
    if ($request->filled('ma_gd')) {
        $query->where('MaHD', 'like', '%' . $request->ma_gd . '%');
    }

    // Filter by customer ID
    if ($request->filled('ma_kh')) {
        $query->where('MaKH', 'like', '%' . $request->ma_kh . '%');
    }

    // Filter by employee ID
    if ($request->filled('ma_nv')) {
        $query->where('MaNV', 'like', '%' . $request->ma_nv . '%');
    }

    // Filter by contract status
    if ($request->filled('trang_thai')) {
        $query->where('TrangthaiHD', $request->trang_thai);
    }

    $contracts = $query->get();

    return view('hop_dong.index', compact('contracts'));
}

}
