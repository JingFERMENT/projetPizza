<?php

/**
 * Define what is a Pizza : base, ingredients and price !
 */
abstract class Pizza
{
    protected $size = 'M';
    protected $base = 'tomato';
    protected $ingredients = [];
    protected $price = 0.0;

    public function getBase(): string
    {
        return $this->base;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    public function getPrice(): float
    {
        return $this->price;
    }

    public function getSize(): string
    {
        return $this->size;
    }

    public function changeBase(string $base): Pizza
    {
        $this->base = $base;

        return $this;
    }

    public function addIngredient(string $ingredient, float $price): Pizza
    {
        $this->ingredients[] = $ingredient;
        $this->price += $price;

        return $this;
    }

    public function setSize(string $size): Pizza
    {
        // if the size of the pizza is increased, increase its price (+2.0€)
     
        if ($this->size === 'M' && $size === 'XL') {
            $this->price += 2.0;
        }

        $this->size = $size;
        
        return $this;
    }
}