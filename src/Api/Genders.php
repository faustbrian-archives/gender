<?php

/*
 * This file is part of Gender API PHP Client.
 *
 * (c) Brian Faust <hello@brianfaust.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace BrianFaust\GenderApi\Api;

use BrianFaust\Unified\AbstractApi;

class Genders extends AbstractApi
{
    public function findByName($name)
    {
        return $this->find($name);
    }

    public function findByCountry($name, $country)
    {
        return $this->find($name, $country);
    }

    public function findByIp($name, $ip)
    {
        return $this->find($name, null, $ip);
    }

    public function findByLanguage($name, $language)
    {
        return $this->find($name, null, null, $language);
    }

    public function findByEmail($email)
    {
        return $this->find(null, null, null, null, $email);
    }

    public function find($name, $country = null, $ip = null, $language = null, $email = null)
    {
        $this->setQuery(array_filter(compact('name', 'country', 'ip', 'language', 'email')));

        return $this->getMapper()->raw($this->get('get'));
    }
}
