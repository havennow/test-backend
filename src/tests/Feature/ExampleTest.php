<?php

namespace Tests\Feature;

use App\Http\Services\Characters;
use App\Models\Character;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $service = new Characters();
        $character = Character::query()->select(['id', 'name'])->find(1)->toArray();
        $comic = ($service->getComics($character['id']))->toArray();
        $characters = ($service->getAll())->toArray();
        $events = ($service->getEvents($character['id']))->toArray();
        $series = ($service->getSeries($character['id']))->toArray();
        $stories = ($service->getStories($character['id']))->toArray();

        $this->get(route('public.characters.comics', ['characterId' => $character['id']]))
            ->assertStatus(200)
            ->assertJson($comic)
            ->assertJsonStructure([
                '*' => ['id', 'series_id', 'name', 'created_at', 'updated_at', 'deleted_at'],
            ]);

        $this->get(route('public.characters.id', ['characterId' => $character['id']]))
            ->assertStatus(200)
            ->assertJson($character)
            ->assertJsonStructure(['id', 'name']);

        $this->get(route('public.characters.all'))
            ->assertStatus(200)
            ->assertJson($characters)
            ->assertJsonStructure(['*' => ['id', 'name']]);

        $this->get(route('public.characters.events', ['characterId' => $character['id']]))
            ->assertStatus(200)
            ->assertJson($events)
            ->assertJsonStructure(['*' => ['id', 'name', 'created_at', 'updated_at', 'deleted_at']]);

        $this->get(route('public.characters.series', ['characterId' => $character['id']]))
            ->assertStatus(200)
            ->assertJson($series)
            ->assertJsonStructure(['*' => ['id', 'stories_id', 'name', 'created_at', 'updated_at', 'deleted_at']]);

        $this->get(route('public.characters.stories', ['characterId' => $character['id']]))
            ->assertStatus(200)
            ->assertJson($stories)
            ->assertJsonStructure(['*' => ['id', 'events_id', 'name', 'created_at', 'updated_at', 'deleted_at']]);
    }

}
