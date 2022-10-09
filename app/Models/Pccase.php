<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pccase extends Model
{
    use HasFactory;
    protected $guarded = [];
    
    public function computers()
    {
        return $this->hasMany(Computer::class);
    }
}
