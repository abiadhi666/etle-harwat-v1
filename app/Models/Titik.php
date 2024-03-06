<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Titik extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function camera(){
        return $this->hasMany(CameraDaily::class);
    }
}
