<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInfoMikrotiksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info_mikrotiks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_mikrotik_id')->references('id')->on('user_mikrotiks');
            $table->string('router_id')->nullable();
            $table->string('router_name')->nullable();
            $table->string('router_default_name')->nullable();
            $table->string('router_type')->nullable();
            $table->string('router_mtu')->nullable();
            $table->string('router_actual_metu')->nullable();
            $table->string('router_l2mtu')->nullable();
            $table->string('router_max_l2mtu')->nullable();
            $table->string('router_mac_address')->nullable();
            $table->string('router_last_link-down_time')->nullable();
            $table->string('router_last_link-up_time')->nullable();
            $table->string('router_link_downs')->nullable();
            $table->string('router_rx_byte')->nullable();
            $table->string('router_tx_byte')->nullable();
            $table->string('router_rx_packet')->nullable();
            $table->string('router_tx_packet')->nullable();
            $table->string('router_tx_queue_drop')->nullable();
            $table->string('router_rx_error')->nullable();
            $table->string('router_tx_error')->nullable();
            $table->string('router_fp_rx_byte')->nullable();
            $table->string('router_fp_tx_byte')->nullable();
            $table->string('router_fp_rx_packet')->nullable();
            $table->string('router_fp_tx_packet')->nullable();
            $table->boolean('router_running')->nullable();
            $table->boolean('router_disabled')->nullable();
            $table->text('router_commet')->nullable();
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
        Schema::dropIfExists('info_mikrotiks');
    }
}
