<?php

require_once __DIR__ .'/Pizza.php';

class Margherita extends Pizza
{
    public function __construct()
    {
        $this->base = 'tomate';
        $this->price = 12.0;
        $this->ingredients = ['mozzarella', 'basilic', "huile d'olive"];
    }
    
}
