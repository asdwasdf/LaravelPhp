<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KhachHang extends Model
{
    use HasFactory;

    // Table name
    protected $table = 'khach_hang';

    // Primary key
    protected $primaryKey = 'MaKH';

    // Primary key is not auto-incrementing
    public $incrementing = false;

    // Primary key type
    protected $keyType = 'string';

    // Fillable fields for mass assignment
    protected $fillable = ['MaKH', 'TenKH', 'SDT', 'Diachi', 'Email', 'LinhvucKD', 'LoaiKH'];
}
