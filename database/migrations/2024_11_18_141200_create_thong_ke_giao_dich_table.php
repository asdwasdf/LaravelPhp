<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateThongKeGiaoDichTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('thong_ke_giao_dich', function (Blueprint $table) {
            $table->string('MaGD', 20)->primary();
            $table->string('MaKH', 20);
            $table->text('NoidungGD');
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
        Schema::dropIfExists('thong_ke_giao_dich');
    }
}

// Create migration with artisan command
// Run: php artisan make:migration create_thong_ke_giao_dich_table
