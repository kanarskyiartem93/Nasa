<?php


namespace App\Repositories;


use App\Models\NearEarthObject;
use Illuminate\Database\Eloquent\Collection;

class NeoEarthObjectRepository implements NeoEarthObjectRepositoryInterface
{
    public function getAllHazardous(): Collection
    {
        return NearEarthObject::query()->where('is_hazardous', true)->get();
    }

    public function getOrderBySpeedWithHazardousParam(bool $isHazardous): Collection
    {
        return NearEarthObject::query()->orderBy('speed')->where('is_hazardous', $isHazardous)->get();
    }
}
