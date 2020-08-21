<?php

namespace DI_Interfaces_Exercises\classes;

// Concrete class: GoogleMaps that implements all the 
// methods of GeoServiceInterface interface for Google Maps webservice

// ,
// "DI_Interfaces_Exercises\\": "public_html/5_DI_interfaces/"

//,
// "classmap": [
//     "public_html/5_DI_interfaces/classes/"
// ]

//             "Coding_Exercises\\": "public_html/2_classes_folder/",

class GoogleMaps implements GeoServiceInterface
{
    // Method: 1
    public function getCoordinatesFromAddress($address)
    {
        // Method1 implementation calls Google Maps webservice
        echo "<b>GoogleMaps:</b> CoordinatesFromAddress is <b>[300.11, 400.22]</b>" . "\n";
    }

    // Method: 2
    public  function getAddressFromCoordinates($coordinate)
    {
        // Method2 implementation calls Google Maps webservice
        echo "<b>GoogleMaps:</b> AddressFromCoordinates is <b>101, South rd, Moana.</b>" . "\n";
    }
}
