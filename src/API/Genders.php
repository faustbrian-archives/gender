<?php

declare(strict_types=1);

/*
 * This file is part of Gender API PHP Client.
 *
 * (c) Brian Faust <hello@basecode.sh>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Plients\GenderAPI\API;

use Plients\Http\HttpResponse;

class Genders extends AbstractAPI
{
    /**
     * @param string $name
     *
     * @return \Plients\Http\HttpResponse
     */
    public function findByName(string $name): HttpResponse
    {
        return $this->find(compact('name'));
    }

    /**
     * @param string $name
     * @param string $country
     *
     * @return \Plients\Http\HttpResponse
     */
    public function findByCountry(string $name, string $country): HttpResponse
    {
        return $this->find(compact('name', 'country'));
    }

    /**
     * @param string $name
     * @param string $ip
     *
     * @return \Plients\Http\HttpResponse
     */
    public function findByIp(string $name, string $ip): HttpResponse
    {
        return $this->find(compact('name', 'ip'));
    }

    /**
     * @param string $name
     * @param string $language
     *
     * @return \Plients\Http\HttpResponse
     */
    public function findByLanguage(string $name, string $language): HttpResponse
    {
        return $this->find(compact('name', 'language'));
    }

    /**
     * @param string $email
     *
     * @return \Plients\Http\HttpResponse
     */
    public function findByEmail(string $email): HttpResponse
    {
        return $this->find(compact('email'));
    }

    /**
     * @param array $parameters
     *
     * @return \Plients\Http\HttpResponse
     */
    public function find(array $parameters): HttpResponse
    {
        return $this->client->get('get', $parameters);
    }
}
