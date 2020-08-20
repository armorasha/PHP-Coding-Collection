<?php

namespace DI_Interfaces_Exercises\classes;

// Geo-location Service
interface GeoServiceInterface
{
    // Method: 1 to implement in concrete classes
    public function getCoordinatesFromAddress($address);

    // Method: 2 to implement in concrete classes
    public  function getAddressFromCoordinates($coordinate);
}
