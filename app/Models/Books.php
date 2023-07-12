<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{
    use HasFactory;
    protected $table = 'knigja';
    public function status(){
        return $this->belongsTo(Status::class);
    }
    public function avtor(){
        return $this->belongsToMany(avtor::class, 'avtor_has_knigja', 'Avtor_id', 'knigja_id');
    }
    
}
