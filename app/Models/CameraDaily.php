<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CameraDaily extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    // protected $fillable = ['user', 'titik', 'tanggal', 'camera_server', 'camera_server_ket', 'camera_realtime', 'camera_server_ket', 'camera_plat', 'camera_plat_ket', 'camera_jenis', 'camera_jenis_ket', 'camera_tp50', 'camera_tp50_ket', 'jaringan_online', 'jaringan_online_ket', 'jaringan_traffic', 'jaringan_traffic_ket'];
    public function titik(){
        return $this->belongsTo(Titik::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
