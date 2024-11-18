<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\KhachHang;

class KhachHangSeeder extends Seeder
{
    public function run()
    {
        KhachHang::create([
            'MaKH' => 'KH01',
            'TenKH' => 'Nguyen Binh An',
            'SDT' => '037289834',
            'Diachi' => 'Xuân Thủy, Cầu Giấy, HN',
            'Email' => 'binhan01@gmail.com',
            'LinhvucKD' => 'Dệt may',
            'LoaiKH' => 'Tiềm năng',
        ]);

        KhachHang::create([
            'MaKH' => 'KH02',
            'TenKH' => 'Tran Van Binh',
            'SDT' => '0912345678',
            'Diachi' => 'Hoàn Kiếm, Hà Nội',
            'Email' => 'tranbinh@gmail.com',
            'LinhvucKD' => 'Công nghệ thông tin',
            'LoaiKH' => 'Thường xuyên',
        ]);
    }
}
