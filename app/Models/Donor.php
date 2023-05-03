<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Donor extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama',
        'email',
        'umur',
        'bb',
        'jk',
        'no_hp',
        'darah',
        'foto',
    ];

    public function response() {
        return $this->hasOne(Response::class);  
    }
}
