<?php

namespace DI_Interfaces_Exercises\classes;

// Concrete class: OpenStreetMap that implements all the 
// methods of GeoServiceInterface interface for OpenStreetMap webservice

class OpenStreetMap implements GeoServiceInterface
{
    // Method: 1
    public function getCoordinatesFromAddress($address)
    {
        // Method1 implementation calls OpenStreetMap webservice
        return "From OpenStreetMap- CoordinatesFromAddress is <b>[100.98, 200.87]</b>" . "\n";
    }

    // Method: 2
    public  function getAddressFromCoordinates($coordinate)
    {
        // Method2 implementation calls OpenStreetMap webservice
        return "From OpenStreetMap- AddressFromCoordinates is <b>101, South rd, Moana.</b>" . "\n";
    }
}
