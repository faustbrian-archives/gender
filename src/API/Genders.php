<?php

/*
 * This file is part of Gender API PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.me>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GenderAPI\API;

use BrianFaust\Http\HttpResponse;

class Genders extends AbstractAPI
{
    /**
     * @param string $name
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function findByName(string $name): HttpResponse
    {
        return $this->find(compact('name'));
    }

    /**
     * @param string $name
     * @param string $country
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function findByCountry(string $name, string $country): HttpResponse
    {
        return $this->find(compact('name', 'country'));
    }

    /**
     * @param string $name
     * @param string $ip
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function findByIp(string $name, string $ip): HttpResponse
    {
        return $this->find(compact('name', 'ip'));
    }

    /**
     * @param string $name
     * @param string $language
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function findByLanguage(string $name, string $language): HttpResponse
    {
        return $this->find(compact('name', 'language'));
    }

    /**
     * @param string $email
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function findByEmail(string $email): HttpResponse
    {
        return $this->find(compact('email'));
    }

    /**
     * @param array $parameters
     *
     * @return \BrianFaust\Http\HttpResponse
     */
    public function find(array $parameters): HttpResponse
    {
        return $this->client->get('get', $parameters);
    }
}
