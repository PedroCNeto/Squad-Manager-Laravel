<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mission extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'local', 'status', 'squad_id', 'img', 'supports'];

    public function squad()
    {
        return $this->belongsTo(Squad::class);
    }

    protected $casts = [
        'supports' => 'array'
    ];

}
