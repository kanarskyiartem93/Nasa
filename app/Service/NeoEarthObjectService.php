<?php


namespace App\Service;


use App\Repositories\NeoEarthObjectRepositoryInterface;

class NeoEarthObjectService
{
    private NeoEarthObjectRepositoryInterface $repository;

    public function __construct(NeoEarthObjectRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function orderedBySpeedWithHazardousParam(bool $validatedData)
    {
        if ($validatedData) {
            return $this->repository->getOrderBySpeedWithHazardousParam(true);
        }else {
            return  $this->repository->getOrderBySpeedWithHazardousParam(false);
        }
    }

}
