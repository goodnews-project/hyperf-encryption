<?php

declare(strict_types=1);
/**
 * This file is part of hyperf-ext/encryption.
 *
 * @link     https://github.com/hyperf-ext/encryption
 * @contact  eric@zhu.email
 * @license  https://github.com/hyperf-ext/encryption/blob/master/LICENSE
 */
use function Hyperf\Support\env;
return [
    'default' => 'aes',

    'driver' => [
        'aes' => [
            'class' => \HyperfExt\Encryption\Driver\AesDriver::class,
            'options' => [
                'key' => env('AES_KEY', ''),
                'cipher' => env('AES_CIPHER', 'AES-128-CBC'),
            ],
        ],
    ],
];
