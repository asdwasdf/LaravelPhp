<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNhanVienTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nhan_vien', function (Blueprint $table) {
            $table->string('MaNV', 20)->primary();
            $table->string('TenNV', 50);
            $table->string('SDT', 10);
            $table->string('Email', 30);
            $table->string('Chucvu', 50);
            $table->string('Phongban', 50);
            $table->string('password'); // Add this to store encrypted passwords
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
        Schema::dropIfExists('nhan_vien');
    }


}
