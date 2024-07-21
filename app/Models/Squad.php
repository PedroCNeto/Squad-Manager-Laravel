<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Squad extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'rank', 'status', 'img'];

    public function mission()
    {
        return $this->hasMany(Mission::class);
    }

}
