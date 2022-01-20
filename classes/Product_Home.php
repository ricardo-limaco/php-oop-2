<?php
require_once __DIR__ . "/Product.php";

class Product_Home extends Product
{
    protected $material;
    protected $type;

    function __construct(array $_data)
    {
        $_name = $_data["name"];
        $_brand = $_data["brand"];
        $_price = $_data["price"];
        $_category = $_data["category"];
        $_material = isset($_data["material"]) ? $_data["material"] : "";
        $_type = isset($_data["type"]) ? $_data["type"] : "";

        parent::__construct($_name, $_brand, $_price, $_category);
        $this->setMaterial($_material);
        $this->setType($_type);
    }

    // Get
    public function setMaterial($value)
    {
        $this->material = $value;
    }
    public function setType($value)
    {
        $this->type = $value;
    }
}