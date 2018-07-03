<?php

namespace Superbalist;

class Brand extends ApiBase
{

    public function all($parameters = null)
    {
        $parameters = [
            't' => microtime(true),
        ];

        return $this->get('v2/brands', [
            'query' => $parameters
        ]);
    }

    public function find($brand, $parameter = null)
    {
        $parameters = [
            't' => microtime(true),
        ];

        $apiUrl = strtr('v2/brand/:brand', array(
            ':brand' => $brand,
        ));

        return $this->get($apiUrl, [
            'query' => $parameters
        ]);

    }

}
