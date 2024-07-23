<?php

require_once __DIR__. '/PizzaBuilder.php';
require_once __DIR__.'/../Pizzas/Margherita.php';

class MargheritaBuilder implements PizzaBuilder
{
    private $pizza;

    public function preparePizza() : PizzaBuilder
    {
        $this->pizza = new Margherita();

        return $this;
    }

    public function addIngredient(string $ingredient) : PizzaBuilder
    {
        /**
         * @TODO : ajouter l'ingrédient et augmenter le prix de 1,5€
         */
        // important to prepare the pizza 
        $this->pizza->addIngredient($ingredient, 1.5); // update the ingredients
        return $this;
    }

    public function increaseSize() : PizzaBuilder
    {
        /**
         * @TODO : il faut changer la taille de la pizza de "M" à "XL"
         */
        $this->pizza->setSize('XL'); // update the size 

       return $this;
    }

    public function getPizza() : Pizza
    {
        return $this->pizza;
    }
}