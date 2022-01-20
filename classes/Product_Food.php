<?php
require_once __DIR__ . "/Product.php";

class Product_Food extends Product
{
    protected $expiry_date;
    protected $weight;

    function __construct(array $_data)
    {
        $_name = $_data["name"];
        $_brand = $_data["brand"];
        $_price = $_data["price"];
        $_category = $_data["category"];
        $_expiry_date = isset($_data["expiry_date"]) ? $_data["expiry_date"] : "";
        $_weight = isset($_data["weight"]) ? $_data["weight"] : "";

        parent::__construct($_name, $_brand, $_price, $_category);
        $this->setExpiryDate($_expiry_date);
        $this->setWeight($_weight);
    }

    // Get
    public function setExpiryDate($value)
    {
        $this->expiry_date = $value;
    }
    public function setWeight($value)
    {
        $this->weight = $value;
    }
}