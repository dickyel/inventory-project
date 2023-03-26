<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->id();
            $table->integer('users_id');
            $table->date('tanggal_masuk_barang');
            $table->string('nama_customer');
            $table->string('model');
            $table->integer('rwo');
            $table->integer('rwo_qty');
            $table->integer('hc');
            $table->integer('plan_output');
            $table->integer('actual_output');
            $table->integer('set_up_time_plan');
            $table->integer('set_up_time_actual');
            $table->integer('set_up_time_var');
            $table->integer('running_time_plan');
            $table->integer('running_time_actual');
            $table->integer('running_time_var');
            $table->integer('total_plan');
            $table->integer('total_actual');
            $table->integer('total_var');
            $table->integer('remark');
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
        Schema::dropIfExists('barang_masuk');
    }
}
