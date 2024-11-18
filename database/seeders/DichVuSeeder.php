<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DichVu;

class DichVuSeeder extends Seeder
{
    public function run()
    {
        DichVu::create([
            'MaDV' => 'DV01',
            'TenDV' => 'Quản lý nhân sự',
            'Mota' => 'Phần mềm quản lý nhân sự trong công ty',
            'GiatriDV' => 20000000,
        ]);

        DichVu::create([
            'MaDV' => 'DV02',
            'TenDV' => 'Quản lý bán hàng',
            'Mota' => 'Phần mềm hỗ trợ quản lý bán hàng và doanh thu',
            'GiatriDV' => 30000000,
        ]);

        DichVu::create([
            'MaDV' => 'DV03',
            'TenDV' => 'Quản lý tài chính',
            'Mota' => 'Phần mềm quản lý tài chính và kế toán',
            'GiatriDV' => 25000000,
        ]);
    }
}
