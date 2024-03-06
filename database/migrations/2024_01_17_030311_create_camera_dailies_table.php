<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('camera_dailies', function (Blueprint $table) {
            $table->id();
            $table->foreignId('titik_id');
            $table->foreignId('user_id');
            $table->string('slug')->unique();
            $table->string('catatan')->nullable();
            // $table->string('user');
            // $table->string('titik');
            // $table->dateTime('tanggal');
            // $table->string('camera_server')->nullable();
            // $table->string('camera_server_ket')->nullable();
            // $table->string('camera_realtime')->nullable();
            // $table->string('camera_realtime_ket')->nullable();
            // $table->string('camera_plat')->nullable();
            // $table->string('camera_plat_ket')->nullable();
            // $table->string('camera_jenis')->nullable();
            // $table->string('camera_jenis_ket')->nullable();
            // $table->string('camera_tp50')->nullable();
            // $table->string('camera_tp50_ket')->nullable();
            // $table->string('jaringan_online')->nullable();
            // $table->string('jaringan_online_ket')->nullable();
            // $table->string('jaringan_traffic')->nullable();
            // $table->string('jaringan_traffic_ket')->nullable();
            // $table->integer('created_by')->nullable();
            // $table->integer('updated_by')->nullable();
            $table->timestamp('published_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camera_dailies');
    }
};
