<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKhachHangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('khach_hang', function (Blueprint $table) {
            $table->string('MaKH', 20)->primary();
            $table->string('TenKH', 50);
            $table->string('SDT', 10);
            $table->string('Diachi', 50);
            $table->string('Email', 30);
            $table->string('LinhvucKD', 50);
            $table->string('LoaiKH', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('khach_hang');
    }
}


