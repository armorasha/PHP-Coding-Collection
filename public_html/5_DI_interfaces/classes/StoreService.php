<?php

namespace DI_Interfaces_Exercises\classes;

class StoreService
{
    private $geolocationService;

    public function __construct(GeoServiceInterface $geolocationService)
    {
        $this->geolocationService = $geolocationService;
    }

    public function getStoreCoordinates($store)
    {
        // Using Method1 to get the map co-ordinates from the store's address
        return $this->geolocationService->getCoordinatesFromAddress($store->getAddress());
    }
}
