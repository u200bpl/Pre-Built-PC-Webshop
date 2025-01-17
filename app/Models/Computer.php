<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computer extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function order() {
        return $this->hasMany(Order::class);
    }

    public function pccase() {
        return $this->belongsTo(Pccase::class);
    }

    public function motherboard() {
        return $this->belongsTo(Motherboard::class);
    }

    public function processor() {
        return $this->belongsTo(Processor::class);
    }

    public function cpucooler() {
        return $this->belongsTo(Cpucooler::class);
    }

    public function graphicscard() {
        return $this->belongsTo(Graphicscard::class);
    }

    public function ram() {
        return $this->belongsTo(Ram::class);
    }

    public function storage() {
        return $this->belongsTo(Storage::class);
    }

    public function psu() {
        return $this->belongsTo(Psu::class);
    }
}
