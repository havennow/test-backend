<?php

namespace App\Http\Services;

use App\Models\Character;
use App\Models\CharactersComic;

/**
 * Class Characters
 * @package App\Http\Services
 */
class Characters
{
    /**
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getAll()
    {
        return Character::all(['id', 'name']);
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null|static|static[]
     */
    public function getById($id)
    {
        return Character::query()->select(['id', 'name'])->find($id);
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getComics($id)
    {
        return CharactersComic::query()
            ->join('characters', 'characters.id', '=', 'characters_comics.characters_id')
            ->join('comics', 'comics.id', '=', 'characters_comics.comics_id')
            ->select('comics.*')
            ->where('characters.id', '=', $id)->whereNull('comics.deleted_at')
            ->get();
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getEvents($id)
    {
        return CharactersComic::query()
            ->join('characters', 'characters.id', '=', 'characters_comics.characters_id')
            ->join('comics', 'comics.id', '=', 'characters_comics.comics_id')
            ->join('series', 'series.id', '=', 'comics.series_id')
            ->join('stories', 'stories.id', '=', 'series.stories_id')
            ->join('events', 'events.id', '=', 'stories.events_id')
            ->select('events.*')
            ->where('characters.id', '=', $id)->whereNull('events.deleted_at')
            ->get();
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getSeries($id)
    {
        return CharactersComic::query()
            ->join('characters', 'characters.id', '=', 'characters_comics.characters_id')
            ->join('comics', 'comics.id', '=', 'characters_comics.comics_id')
            ->join('series', 'series.id', '=', 'comics.series_id')
        ->select('series.*')
        ->where('characters.id', '=', $id)->whereNull('series.deleted_at')
        ->get();
    }

    /**
     * @param $id
     * @return \Illuminate\Database\Eloquent\Collection|static[]
     */
    public function getStories($id)
    {
        return CharactersComic::query()
            ->join('characters', 'characters.id', '=', 'characters_comics.characters_id')
            ->join('comics', 'comics.id', '=', 'characters_comics.comics_id')
            ->join('series', 'series.id', '=', 'comics.series_id')
            ->join('stories', 'stories.id', '=', 'series.stories_id')
            ->select('stories.*')
            ->where('characters.id', '=', $id)->whereNull('stories.deleted_at')
            ->get();
    }
}
