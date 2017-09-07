<?php

namespace Superbalist;

use \Httpful\Request as Request;

class Brand extends ApiBase
{

    public function all($parameters = null)
    {
        $parameters = [
            't' => microtime(true),
        ];

        $apiUrl = strtr(':apiBase/brands?:queryParams', array(
            ':apiBase' => getenv('SUPERBALIST_API_URL'),
            ':queryParams' => http_build_query($parameters),
        ));

        $headers = self::_getCommonHeaders();

        $response = Request::get($apiUrl)
            ->addHeaders($headers)->send();

        return $response;
    }

    public function get($brand, $parameter = null)
    {
        $parameters = [
            't' => microtime(true),
        ];

        $apiUrl = strtr(':apiBase/brand/:brand?:queryParams', array(
            ':apiBase' => getenv('SUPERBALIST_API_URL'),
            ':queryParams' => http_build_query($parameters),
            ':brand' => $brand,
        ));

        $headers = self::_getCommonHeaders();

        $response = Request::get($apiUrl)
            ->addHeaders($headers)->send();

        return $response;

    }

}
