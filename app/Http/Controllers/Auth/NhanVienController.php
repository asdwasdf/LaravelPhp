<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\NhanVien;

class NhanVienController extends Controller
{
    public function index()
    {
        $employees = NhanVien::all();
        return view('nhan_vien.index', compact('employees'));
    }

    public function create()
    {
        return view('nhan_vien.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaNV' => 'required|unique:nhan_vien,MaNV|max:20',
            'TenNV' => 'required|max:50',
            'SDT' => 'required|digits:10|unique:nhan_vien,SDT',
            'Email' => 'required|email|max:30|unique:nhan_vien,Email',
            'Chucvu' => 'required|max:50',
            'Phongban' => 'required|max:50',
        ]);

        NhanVien::create($request->all());

        return redirect()->route('nhan_vien.index')->with('success', 'Employee created successfully.');
    }
}
