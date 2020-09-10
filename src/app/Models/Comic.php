<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    public function characters()
    {
        return $this->hasOne(Character::class);
    }

    public function serie()
    {
        return $this->belongsTo(Serie::class, 'series_id');
    }
}
