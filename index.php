<?php
require_once __DIR__ . "/classes/Product_Tech.php";
require_once __DIR__ . "/classes/Product_Food.php";
require_once __DIR__ . "/classes/Product_Home.php";
require_once __DIR__ . "/classes/User.php";
require_once __DIR__ . "/classes/User_Prime.php";
require_once "./data/ProductsList.php";
require_once "./data/UsersList.php";

$users = [];
$products = [];

foreach ($usersList as $user) {
  if ($user["accountType"] === "Prime") {
    $users[] = new User_Prime($user);
  } else {
    $users[] = new User($user);
  }
}

foreach ($productsList as $product) {
  if ($product["category"] === "Tech") {
    $products[] = new Product_Tech($product);
  }
  if ($product["category"] === "Home") {
    $products[] = new Product_Home($product);
  }
  if ($product["category"] === "Food") {
    $products[] = new Product_Food($product);
  }
}


$users[0]->addToCart($products[0]);
$users[0]->addToCart($products[2]);
$users[0]->addToCart($products[5]);
var_dump($users[0]);

$users[3]->addToCart($products[1]);
$users[3]->addToCart($products[3]);
$users[3]->addToCart($products[4]);
var_dump($users[3]);
