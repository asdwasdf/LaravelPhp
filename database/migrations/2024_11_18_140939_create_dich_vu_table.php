<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDichVuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dich_vu', function (Blueprint $table) {
            $table->string('MaDV', 20)->primary();
            $table->string('TenDV', 20);
            $table->text('Mota');
            $table->decimal('GiatriDV', 18, 0);
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
        Schema::dropIfExists('dich_vu');
    }
}