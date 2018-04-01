#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;
use Symfony\Component\Config\FileLocator;

if (!isset($_SERVER['argv'][1])) {
    echo 'Usage: ./run.php <services.yaml>'.PHP_EOL;
    echo 'Select a services file to load.'.PHP_EOL;
    exit(1);
}

$config = $_SERVER['argv'][1];
$builder = new ContainerBuilder();
$loader = new YamlFileLoader($builder, new FileLocator(__DIR__));
$loader->load($config);

echo PHP_EOL;
echo 'Loaded services'.PHP_EOL;
echo PHP_EOL;
foreach ($builder->getServiceIds() as $service) {
    echo $service.PHP_EOL;
}
