<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class avtor extends Model
{
    use HasFactory;
    protected $table = "avtor";
    public function biography(){
        return $this->belongsTo(biographyAuthor::class);
    }
}
