<?php

namespace DI_Interfaces_Exercises\classes;

class Store
{
    private $store_name;
    private $store_address;

    function __construct($store_name, $store_address)
    {
        $this->store_name = $store_name;
        $this->store_address = $store_address;
    }

    function getName()
    {
        return $this->store_name;
    }

    function getAddress()
    {
        return $this->store_address;
    }
}
