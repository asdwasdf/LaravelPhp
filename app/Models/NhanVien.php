<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class NhanVien extends Authenticatable
{
    protected $table = 'nhan_vien';

    protected $primaryKey = 'MaNV';

    public $incrementing = false;

    protected $keyType = 'string';

    protected $fillable = ['MaNV', 'TenNV', 'SDT', 'Email', 'Chucvu', 'Phongban', 'password'];

    protected $hidden = []; // No hidden attributes since we aren't hashing passwords
}
