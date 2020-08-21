<?php

// Flow: store_page -> StoreService -> GeoServiceInterface -> Implementation(GoogleMaps OR OpenStreetMaps)  

// Step: 1. This page takes store name, store address as input
// Step: 2. A store object is created from the store details
// Step: 3. Store_object and Geo Location Service name (google maps/openstreetmaps)
// are then sent to StoreService to get co-ordinates of the store_object's address
// Step: 4. StoreService uses the right GeoServiceInterface's implementation (google maps/openstreetmaps)
// from the given Geo Location Service name and fetches the co-ordinate from google maps or openstreetmaps.
// Step: 5. Received store co-ordinates are used / plotted on a grid in this page.

require_once __DIR__ . '/../../vendor/autoload.php';

use DI_Interfaces_Exercises\classes\Store;
use DI_Interfaces_Exercises\classes\StoreService;
use DI_Interfaces_Exercises\classes\GoogleMaps;
use DI_Interfaces_Exercises\classes\OpenStreetMap;

// Step:1
echo '<b><u>Step 1- Inputs: This page takes store name, store address as input</u></b><br>';
$store_name = "Storelunga";
$store_address = "100, Beach rd, Noarlunga 5168 SA";
$store_coordinates = [];
echo '<b>Store name:</b> ' . $store_name . '<br><b>Store address:</b> ' . $store_address
    . '<br><b>Store coordinates:</b> ' . $store_coordinates;
echo '<br><br>';

// Step: 2
echo '<b><u>Step 2- A store object is created from the store details</u></b><br>';
$store_obj = new Store($store_name, $store_address, $store_coordinates);
// print_r($store_obj1);
echo ('<b>$store_obj->store name:</b> ' . $store_obj->getName() . '<br>');
echo ('<b>$store_obj->store address:</b> ' . $store_obj->getAddress() . '<br>');
echo ('<b>$store_obj->store coordinates:</b> ' . $store_obj->getCoordinates());
echo '<br><br><br>';

// Step: 3-4 (Google Maps)
echo '<u><h2>Step 3-4: Google Maps</h2></u>';
// Step: 3
echo '<b><u>Step 3- Store_object and Geo Service name (google maps/openstreetmaps)
are sent to StoreService to get co-ordinates/address of the store_object\'s address/coordinates</u></b><br>';
$geoService_obj = new GoogleMaps(); //selecting which maps webservice implementation (google maps or openstreetmaps) to use
echo '<b>Created GeoService object ($geoService_obj) for Google Maps:</b> ';
print_r($geoService_obj);
echo '<br>';

$storeService_obj = new StoreService($geoService_obj);
echo '<b>Created StoreService object using $geoService_obj:</b> ';
print_r($storeService_obj);
echo '<br><br><br>';

// Step: 4
echo '<b><u>Step 4- StoreService uses the right GeoServiceInterface\'s implementation (google maps or openstreetmaps)
from the user-given Geo Service name and fetches the co-ordinate / address from google maps or openstreetmaps.</u></b><br>';

$google_store_coordinates = $storeService_obj->getStoreCoordinates($store_obj);
echo ('<p style="color:blue;"><b>$store_coordinates:</b> ' . $google_store_coordinates . '</p>');
echo '<br><br><br>';


// Step: 3-4 (OpenStreetMaps)
echo '<u><h2>Step 3-4: OpenStreetMaps</h2></u>';
$geoService_obj2 = new OpenStreetMap();
$storeService_obj2 = new StoreService($geoService_obj2);
$openmaps_store_coordinates = $storeService_obj2->getStoreAddress($store_obj);
echo ('<p style="color:blue;"><b>$store_coordinates:</b> ' . $openmaps_store_coordinates . '</p>');
echo '<br><br><br>';


// Step: 5
echo '<b><u>Step 5- Received store co-ordinates are used / plotted on a grid in this page.</u></b><br>';
