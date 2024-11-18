<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopDongTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hop_dong', function (Blueprint $table) {
            $table->string('MaHD', 20)->primary();
            $table->string('MaKH', 20);
            $table->string('MaNV', 20);
            $table->string('MaDV', 20);
            $table->text('NoidungHD');
            $table->decimal('GiatriHD', 18, 0);
            $table->date('NgayBD');
            $table->date('NgayKT');
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
        Schema::dropIfExists('hop_dong');
    }
}

// Create migration with artisan command
// Run: php artisan make:migration create_hop_dong_table
