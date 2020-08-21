<?php

namespace DI_Interfaces_Exercises\classes;

// Class that handles all the store methods that uses web services (google maps or openstreetmaps)
class StoreService
{
    // private $geoService;

    public function __construct(GeoServiceInterface $geoService)
    {
        $this->geoService = $geoService;
    }

    public function getStoreCoordinates($store)
    {
        // Using Method1 to get the map co-ordinates from the store's address
        return $this->geoService->getCoordinatesFromAddress($store->getAddress());
    }

    public function getStoreAddress($store)
    {
        // Using Method1 to get the map co-ordinates from the store's address
        return $this->geoService->getAddressFromCoordinates($store->getAddress());
    }

    // Other store service related methods below.
    // ...
}
