MangopaySymfonyWrapper
======================

Mongopay API Wrapper to integrate Mongopay into symfony2 project


To use this wrapper:

1 - Add "wawagit/mangopay-symfony-wrapper": "dev-master" to your composer.json


You can use autoloader service of symfony to load MangoPay API:

Edit autoload.php

# app/autoload.php
$loader->registerPrefixes(array(
    'MangoPay_' => __DIR__.'/../vendor/MangoPay/lib',
));


And then use API like that:

$api = new \MangoPay_Api();
