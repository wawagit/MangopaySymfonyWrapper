MangopaySymfonyWrapper
======================

Mongopay API Wrapper to integrate Mongopay into symfony2 project


To use this wrapper:

1 - Add to your composer.json

    "wawagit/mangopay-symfony-wrapper": "dev-master"


2 - You can use autoloader service of symfony to load MangoPay API:

Edit app/autoload.php

    $loader->add('MangoPay_' => __DIR__.'/../vendor/MangoPay/lib');


And then use API like that:

    $api = new \MangoPay_Api();
