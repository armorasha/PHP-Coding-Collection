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
        echo "OpenStreetMap:Method1 Called" . "\n";
    }

    // Method: 2
    public  function getAddressFromCoordinates($coordinate)
    {
        // Method2 implementation calls OpenStreetMap webservice
        echo "OpenStreetMap:Method2 Called" . "\n";
    }
}
