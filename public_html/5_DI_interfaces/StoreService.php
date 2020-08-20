<?php

class StoreService
{
    private $geolocationService;

    public function __construct(GeolocationService $geolocationService)
    {
        $this->geolocationService = $geolocationService;
    }

    public function getStoreCoordinates($store)
    {
        return $this->geolocationService->getCoordinatesFromAddress($store->getAddress());
    }
}
