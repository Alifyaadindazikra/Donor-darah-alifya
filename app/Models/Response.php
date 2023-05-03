<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use illuminate\Support\Carbon;

class Response extends Model
{
    use HasFactory;
    protected $fillable =  [
        'donor_id',
        'status',
        'schedule',
    ];

    public function shcedule() {
        return Carbon::parse($this->attributes['schedule'])
        ->translatedFormat('d F Y'); 
    }

    public function donor() {
        return $this->belongsTo(Donor::class);
    }

    public function filter() {
        return $this->hasMany(Donor::class);
    }
}
