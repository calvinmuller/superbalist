<?php

namespace Superbalist;

class Brand extends ApiBase
{

    public function all($parameters = null)
    {
        $parameters = [
            't' => microtime(true),
        ];

        return $this->get('brands', [
            'query' => $parameters
        ]);
    }

    public function find($brand, $parameter = null)
    {
        $parameters = [
            't' => microtime(true),
        ];

        $apiUrl = strtr('brand/:brand', array(
            ':brand' => $brand,
        ));

        return $this->get($apiUrl, [
            'query' => $parameters
        ]);

    }

}
