<?php

namespace DI_Interfaces_Exercises\classes;

// Store class
// Class that handles store's internal getter/setter methods
class Store
{
    private $store_name;
    private $store_address;
    private $store_coordinates;

    function __construct($store_name, $store_address, $store_coordinates)
    {
        $this->store_name = $store_name;
        $this->store_address = $store_address;
        $this->store_coordinates = $store_coordinates;
    }

    function getName()
    {
        return $this->store_name;
    }

    function getAddress()
    {
        return $this->store_address;
    }

    function getCoordinates()
    {
        return $this->store_coordinates;
    }
}
