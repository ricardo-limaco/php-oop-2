<?php
require_once __DIR__ . "/Product.php";

class Product_Tech extends Product
{
    protected $model;
    protected $type;

    function __construct(array $_data)
    {
        $_name = $_data["name"];
        $_brand = $_data["brand"];
        $_price = $_data["price"];
        $_category = $_data["category"];
        $_model = isset($_data["model"]) ? $_data["model"] : "";
        $_type = isset($_data["type"]) ? $_data["type"] : "";

        parent::__construct($_name, $_brand, $_price, $_category);
        $this->setModel($_model);
        $this->setType($_type);
    }

    // Get
    public function setModel($value)
    {
        $this->model = $value;
    }
    public function setType($value)
    {
        $this->type = $value;
    }
}