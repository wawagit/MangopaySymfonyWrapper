MangopaySymfonyWrapper
======================

Mongopay API Wrapper to integrate Mongopay into symfony2 project


To use this wrapper:

1 - Add to your composer.json

    "MangoPay/mangopay2-php-sdk": "dev-master",
    "wawagit/mangopay-symfony-wrapper": "dev-master"


2 - You can use autoloader service of symfony to load MangoPay API:

Edit app/autoload.php

    $loader->add('MangoPay\\MangoPayApi', __DIR__.'/../vendor/wawagit/mangopay-symfony-wrapper/lib');


And then use API like that:

    // At the beginning of your php file
    use MangoPay\MangoPayApi;
    
    $api = new MangoPayApi();
