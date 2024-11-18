<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongKeHopDongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_ke_hop_dong', function (Blueprint $table) {
            $table->string('MaHD', 20)->primary();
            $table->text('NoidungHD');
            $table->string('TrangthaiHD', 20);
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
        Schema::dropIfExists('thong_ke_hop_dong');
    }
}

// Create migration with artisan command
// Run: php artisan make:migration create_thong_ke_hop_dong_table
