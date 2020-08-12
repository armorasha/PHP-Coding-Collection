<?php

class Product
{
    //properties
    private $product_id;
    private $product_name;
    private $product_qty;
    private $product_price;

    //php's magic methods for getter setters
    public function __get($property)
    {
        if (property_exists($this, $property)) {
            return $this->$property;
        }
    }

    public function __set($property, $value)
    {
        if (property_exists($this, $property)) {
            $this->$property = $value;
        }
        //return $this; //you may need this return for some use cases
    } 




}


?>