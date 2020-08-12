<?php
class Order
{
    //properties
    private $order_id;
    private $order_products;
    private $order_cost;

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
        return $this;
    }


    public function Calc_order_cost()
    {
        //iterate through products in the order object and calculate cost = price * qty
        $calculated_cost = 0; //needed if using +=. Otherwise this is not needed.
        foreach ($this->order_products as $array_key => $selected_product) {
            $calculated_cost += $selected_product->product_price * $selected_product->product_qty;
        }
        $this->order_cost = $calculated_cost;

        return $this->order_cost;
    }
}


?>