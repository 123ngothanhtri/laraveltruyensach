<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Truyen extends Migration
{
    public function up()
    {
        Schema::create('truyen', function (Blueprint $table) {
            $table->id('id_truyen');
            $table->string('ten_truyen');
            $table->string('hinhanh_truyen');
            $table->string('mota_truyen');
            $table->string('tacgia_truyen');
            $table->date('ngayphathanh_truyen');
            $table->string('trangthai_truyen')->default('Đang ra');
            $table->unsignedBigInteger('id_theloai');

            $table->foreign('id_theloai')->references('id_theloai')->on('theloai');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('truyen');
    }
}
