<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGiaoDichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('giao_dich', function (Blueprint $table) {
            $table->string('MaGD', 20)->primary();
            $table->string('MaHD', 20);
            $table->string('MaKH', 20);
            $table->string('MaNV', 20);
            $table->text('NoidungGD');
            $table->date('NgayBD');
            $table->date('NgayKT');
            $table->string('TrangthaiGD', 20);
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
        Schema::dropIfExists('giao_dich');
    }
}
