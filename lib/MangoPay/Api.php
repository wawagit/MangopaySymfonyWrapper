<?php
$lib_path = __DIR__.'/../../vendor/MangoPay/mangopay2-php-sdk/MangoPaySDK/mangoPayApi.inc';
if (is_file($lib_path))
{
    require_once($lib_path);
}

$api = new MangoPay\MangoPayApi();

class MangoPay_Api extends MangoPay\MangoPayApi {
}
