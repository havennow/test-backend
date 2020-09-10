<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class CharactersComic
 * @package App\Models
 */
class CharactersComic extends Model
{
    use SoftDeletes;
    /**
     * @var array
     */
    protected $fillable = [
        'characters_id',
        'comics_id',
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @var array
     */
    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function comic()
    {
        return $this->hasOne(Comic::class, 'comics_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function character()
    {
        return $this->hasOne(Character::class, 'characters_id');
    }

}
