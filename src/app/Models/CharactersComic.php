<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CharactersComic extends Model
{

    protected $fillable = [
        'characters_id',
        'comics_id',
    ];

    public function comic()
    {
        return $this->hasOne(Comic::class, 'comics_id');
    }

    public function character()
    {
        return $this->hasOne(Character::class, 'characters_id');
    }

}
