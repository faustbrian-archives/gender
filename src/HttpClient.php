<?php

/*
 * This file is part of Gender API PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GenderApi;

use BrianFaust\Unified\AbstractHttpClient;
use BrianFaust\GenderApi\Request\Modifiers\ApiKeyModifier;

class HttpClient extends AbstractHttpClient
{
    protected $options = [
        'base_url' => 'https://gender-api.com/',
        'headers' => [
           'User-Agent' => 'BrianFaust/GenderApi',
        ],
    ];

    protected $requestModifiers = [
        ApiKeyModifier::class,
    ];
}
