<?php
namespace DesignPattern\Creational\Factory;


class Product1Factory implements IProductFactory
{
    public static function getInstance($size)
    {
        return new Product1($size);
    }

}