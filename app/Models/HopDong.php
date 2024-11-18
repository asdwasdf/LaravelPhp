<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HopDong extends Model
{
    use HasFactory;

    protected $table = 'hop_dong'; // Table name

    protected $primaryKey = 'MaHD'; // Primary key

    public $incrementing = false; // Non-incrementing primary key

    protected $keyType = 'string'; // String primary key

    protected $fillable = [
        'MaHD',
        'MaKH',
        'MaNV',
        'MaDV',
        'NoidungHD',
        'GiatriHD',
        'NgayBD',
        'NgayKT',
        'TrangthaiHD',
    ];
}
