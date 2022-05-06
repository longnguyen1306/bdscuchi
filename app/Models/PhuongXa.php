<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PhuongXa extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'quan_huyen_id',
    ];

    public function quanHuyen() {
        return $this->belongsTo(QuanHuyen::class, 'quan_huyen_id', 'id');
    }
}
