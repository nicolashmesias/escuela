<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;
    public function teachers(){
        return $this->belongsTo('App\Models\Teacher');
    }
    public function studies(){
        return $this->hasMany('App\Models\Study');
    }
}
