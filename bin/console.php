<?php

require __DIR__.'/../vendor/autoload.php';

$factory = new \Pusachev\ObjectManager\Factory\Factory();

$objectManager = new \Pusachev\ObjectManager\ObjectManager($factory);

/** @var \Pusachev\ObjectManager\Test\TestDTO $dto */
$dto = $objectManager->create(\Pusachev\ObjectManager\Test\TestDTO::class);

$dto->set(1, 'test');

printf("%s\n\n", $dto->get(1));