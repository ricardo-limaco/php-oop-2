<?php
require_once __DIR__ . "./Cart.php";
class User
{
    protected $firstName = "";
    protected $lastName = "";
    protected $email = "";
    protected $address = "";
    protected $accountType = "";
    protected $paymentMethod = "";
    use Cart;

    function __construct(array $_data)
    {
        $_firstName = $_data["firstName"];
        $_lastName = $_data["lastName"];
        $_email = $_data["email"];
        $_address = $_data["address"];
        $_accountType = $_data["accountType"];
        $_paymentMethod = $_data["paymentMethod"];

        $this->setFirstName($_firstName);
        $this->setLastName($_lastName);
        $this->setEmail($_email);
        $this->setAddress($_address);
        $this->setAccountType($_accountType);
        $this->setPaymentMethod($_paymentMethod);
    }

    // Set
    public function setFirstName($value)
    {
        $this->firstName = $value;
    }

    public function setLastName($value)
    {
        $this->lastName = $value;
    }

    public function setEmail($value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            throw new Exception("Email non valida!!!");
        }
        $this->email = $value;
    }

    public function setAddress($value)
    {
        $this->address = $value;
    }

    public function setAccountType($value)
    {
        $this->accountType = $value;
    }

    public function setPrimeNumber($value)
    {
        $this->prime_number = $value;
    }

    public function setPaymentMethod($value)
    {
        $this->paymentMethod = $value;
    }

    // Get
    public function getFirtName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getAccountType()
    {
        return $this->accountType;
    }

    public function getPrimeNumber()
    {
        return $this->prime_number;
    }

    public function getPaymentMethod()
    {
        return $this->paymentMethod;
    }
}