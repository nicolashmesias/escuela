<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Study extends Model
{
    use HasFactory;
    public function stedents(){
        return $this->belongsTo('App\Models\Student');
    }
    public function modules(){
        return $this->belongsTo('App\Models\Module');
    }
}
