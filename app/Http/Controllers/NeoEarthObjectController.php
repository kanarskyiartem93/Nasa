<?php

namespace App\Http\Controllers;

use App\Repositories\NeoEarthObjectRepositoryInterface;
use App\Service\NeoEarthObjectService;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class NeoEarthObjectController extends Controller
{
    private NeoEarthObjectRepositoryInterface $repository;
    private NeoEarthObjectService $service;

    public function __construct(NeoEarthObjectRepositoryInterface $repository, NeoEarthObjectService $service)
    {
        $this->repository = $repository;
        $this->service = $service;
    }

    public function hazardous(): Collection
    {
        return $this->repository->getAllHazardous();
    }

    public function fastest(Request $request): Collection
    {
        if ($request->get('hazardous')) {
            return $this->service->orderedBySpeedWithHazardousParam(true);
        } else {
            return $this->service->orderedBySpeedWithHazardousParam(false);
        }
    }
}
