<?php
$lib_path = __DIR__.'/../../../../mangopay/php-sdk-v2/MangoPaySDK/mangoPayApi.inc';

if (is_file($lib_path))
{
    require_once($lib_path);
}

class MangoPayApi extends MangoPay\MangoPayApi {
}