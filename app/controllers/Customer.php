<?php
class Customer extends User{

private $HomeAddress;
private $cart;
private $order;

function __construct($HomeAddress,$cart,$order){
   
$this->HomeAddress = $HomeAddress;
$this->cart = $cart;
$this->order = $order;

}

public function getHomeAddress(){
    return $this->HomeAddress;
}
public function setHomeAddress(){
    $this->HomeAddress = $HomeAddress;
}
public function getCart(){
    return $this->Cart;
}
public function setCart(){
    $this->Cart = $this->Cart;
}
public function getorder(){
    return $this->Order;
}
public function setOrder(){
    $this->Order = $this->Order;
}

}



?>