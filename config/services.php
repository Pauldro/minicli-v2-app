<?php

declare(strict_types=1);

return [
    /****************************************************************************
     * Application Services
     * --------------------------------------------------------------------------
     *
     * The services to be loaded for your application.
     *****************************************************************************/

    'services' => [
        //        'my_service' => \App\Services\MyService::class,
        'log' => \Pauldro\Minicli\v2\Logging\Logger::class,
         'vendorfilepath' => \Pauldro\Minicli\v2\Services\VendorFilepathParser::class,
    ],
];
