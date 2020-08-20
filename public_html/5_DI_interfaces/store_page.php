<?php

// Flow: store_page -> StoreService -> GeoServiceInterface -> Implementation(GoogleMaps OR OpenStreetMaps)  

// Step: 1. This page takes store name, store address as input
// Step: 2. A store object is created from the store details
// Step: 3. Store_object and Geo Location Service name (google maps/openstreetmaps)
// are then sent to StoreService to get co-ordinates of the store_object's address
// Step: 4. StoreService uses the right GeoServiceInterface's implementation (google maps/openstreetmaps)
// from the given Geo Location Service name and fetches the co-ordinate from google maps or openstreetmaps.
// Step: 5. Received store co-ordinates are displayed / plotted on a grid in this page.

// echo $_SERVER['DOCUMENT_ROOT'] . '<br>';
// echo __DIR__ . '/../../vendor/autoload.php' . '<br>';
// die("die");
// require_once $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';
require_once __DIR__ . '/../../vendor/autoload.php';

// Step:1
echo '<b><u>Step: 1. This page takes store name, store address as input</u></b><br>';
$store_name = "Storelunga";
$store_address = "100, Beach rd, Noarlunga 5168 SA";
echo 'Store name: ' . $store_name . '<br>Store address: ' . $store_address;
echo '<br><br>';

//Step: 2
echo '<b><u>Step: 2. A store object is created from the store details</u></b><br>';
$store_obj1 = new DI_Interfaces_Exercises\classes\Store($store_name, $store_address);
// print_r($store_obj1);
echo ('Store name: ' . $store_obj1->getName() . '<br>');
echo ('Store address: ' . $store_obj1->getAddress());
echo '<br><br>';

//Step: 3
echo '<b><u>Step: 3. Store_object and Geo Location Service name (google maps/openstreetmaps)
are then sent to StoreService to get co-ordinates of the store_object\'s address</u></b><br>';
$geolocationService = 'GoogleMaps';
$store_service_obj1 = new DI_Interfaces_Exercises\classes\StoreService($geolocationService);
// print_r($store_obj1);
echo ('Store name: ' . $store_obj1->getName() . '<br>');
echo ('Store address: ' . $store_obj1->getAddress());
echo '<br><br>';
