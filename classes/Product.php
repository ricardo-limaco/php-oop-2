<?php
class Product
{
    public $name;
    protected $brand;
    protected $price;
    protected $category;

    function __construct($_name, $_brand, $_price, $_category)
    {
        $this->setName($_name);
        $this->setBrand($_brand);
        $this->setPrice($_price);
        $this->setCategory($_category);
    }

    // Set
    public function setName($value)
    {
        $this->name = $value;
    }

    public function setBrand($value)
    {
        $this->brand = $value;
    }

    public function setPrice($value)
    {
        $this->price = $value;
    }

    public function setCategory($value)
    {
        $this->category = $value;
    }
}