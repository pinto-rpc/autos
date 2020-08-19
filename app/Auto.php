<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = 'autos';
    protected $fillable = ['marca', 'modelo', 'color', 'año'];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
