<?php
$lib_path = __DIR__.'/../../../../MangoPay/mangopay2-php-sdk/MangoPaySDK/mangoPayApi.inc';

if (is_file($lib_path))
{
    require_once($lib_path);
}

class MangoPayApi extends MangoPay\MangoPayApi {
}