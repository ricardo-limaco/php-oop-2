<?php
require_once __DIR__ . "/User.php";

class User_Prime extends User
{
    protected $primeNumber;
    protected $shippingCosts = 0;

    function __construct(array $_data)
    {
        $_primeNumber = isset($_data["primeNumber"]) ? $_data["primeNumber"] : "";

        parent::__construct($_data);
        $this->setPrimeNumber($_primeNumber);
    }

    public function setPrimeNumber($value)
    {
        $this->primeNumber = $value;
    }
}