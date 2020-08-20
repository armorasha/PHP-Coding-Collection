<?php

interface GeolocationService
{
    // Method: 1
    public function getCoordinatesFromAddress($address);

    // Method: 2
    public  function getAddressFromCoordinates($coordinate);
}
