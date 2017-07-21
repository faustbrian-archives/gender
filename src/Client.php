<?php

/*
 * This file is part of Gender API PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GenderAPI;

use BrianFaust\Http\Http;

class Client
{
    /**
     * Create a new API service instance.
     *
     * @param string $name
     *
     * @return \BrianFaust\GenderAPI\API\AbstractAPI
     */
    public function api(string $name): API\AbstractAPI
    {
        $client = Http::withBaseUri('https://gender-api.com/');

        $class = "BrianFaust\\GenderAPI\\API\\{$name}";

        return new $class($client);
    }
}
