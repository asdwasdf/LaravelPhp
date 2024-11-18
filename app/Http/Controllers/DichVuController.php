<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DichVu;

class DichVuController extends Controller
{
    public function index()
    {
        $services = DichVu::all();
        return view('dich_vu.index', compact('services'));
    }

    public function create()
    {
        return view('dich_vu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'MaDV' => 'required|unique:dich_vu|max:20',
            'TenDV' => 'required|max:20',
            'Mota' => 'required',
            'GiatriDV' => 'required|numeric',
        ]);

        DichVu::create($request->all());

        return redirect()->route('dich_vu.index')->with('success', 'Dịch vụ đã được thêm thành công.');
    }

    public function edit($id)
    {
        $service = DichVu::findOrFail($id);
        return view('dich_vu.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'TenDV' => 'required|max:20',
            'Mota' => 'required',
            'GiatriDV' => 'required|numeric',
        ]);

        $service = DichVu::findOrFail($id);
        $service->update($request->all());

        return redirect()->route('dich_vu.index')->with('success', 'Dịch vụ đã được cập nhật.');
    }

    public function destroy($id)
    {
        $service = DichVu::findOrFail($id);
        $service->delete();

        return redirect()->route('dich_vu.index')->with('success', 'Dịch vụ đã được xóa.');
    }
}
