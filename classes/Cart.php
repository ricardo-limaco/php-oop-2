<?php
trait Cart
{
    protected $cart = [];

    public function addToCart($newProduct)
    {
        $this->cart[] = $newProduct;
    }
    public function removeFormCart($newProduct)
    {

    }
}