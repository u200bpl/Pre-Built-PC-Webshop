<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CpuCooler extends Model
{
    use HasFactory;
    public function computers() {
        return $this->hasMany(Computers::class);
    }
}
