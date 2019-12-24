<?php


namespace Pusachev\ObjectManager\Factory;


interface FactoryInterface
{
    public function create(string $type, array $arguments = []);
}