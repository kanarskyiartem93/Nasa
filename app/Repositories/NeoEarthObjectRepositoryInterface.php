<?php


namespace App\Repositories;


interface NeoEarthObjectRepositoryInterface
{
    public function getAllHazardous();

    public function getOrderBySpeedWithHazardousParam(bool $isHazardous);
}
