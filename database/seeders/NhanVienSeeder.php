<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\NhanVien;

class NhanVienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NhanVien::create([
            'MaNV' => 'NV001',
            'TenNV' => 'Nguyen Van A',
            'SDT' => '0987654321',
            'Email' => 'example@example.com',
            'Chucvu' => 'Manager',
            'Phongban' => 'HR',
            'password' =>'password123',
        ]);

        NhanVien::create([
            'MaNV' => 'NV002',
            'TenNV' => 'Le Thi B',
            'SDT' => '0912345678',
            'Email' => 'lethi@example.com',
            'Chucvu' => 'Accountant',
            'Phongban' => 'Finance',
            'password' => 'password123',
        ]);
    }
}
