<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\HopDong;

class HopDongSeeder extends Seeder
{
    public function run()
    {
        HopDong::create([
            'MaHD' => 'HD01',
            'MaKH' => 'KH01',
            'MaNV' => 'NV01',
            'MaDV' => 'DV01',
            'NoidungHD' => 'Hợp đồng dịch vụ IT',
            'GiatriHD' => 100000000,
            'NgayBD' => '2023-01-01',
            'NgayKT' => '2023-12-31',
            'TrangthaiHD' => 'Hoàn thành',
        ]);

        HopDong::create([
            'MaHD' => 'HD02',
            'MaKH' => 'KH02',
            'MaNV' => 'NV02',
            'MaDV' => 'DV02',
            'NoidungHD' => 'Hợp đồng cung cấp phần mềm',
            'GiatriHD' => 50000000,
            'NgayBD' => '2023-03-01',
            'NgayKT' => '2023-09-01',
            'TrangthaiHD' => 'Đang thực hiện',
        ]);

        HopDong::create([
            'MaHD' => 'HD03',
            'MaKH' => 'KH03',
            'MaNV' => 'NV01',
            'MaDV' => 'DV03',
            'NoidungHD' => 'Hợp đồng bảo trì thiết bị',
            'GiatriHD' => 75000000,
            'NgayBD' => '2023-06-15',
            'NgayKT' => '2023-12-15',
            'TrangthaiHD' => 'Hủy',
        ]);
    }
}
