<?php

namespace Superbalist;

use \Httpful\Request as Request;

class Offer extends ApiBase
{

    public function get($parameter = null)
    {
        $parameters = [
            't' => microtime(true),
        ];

        $apiUrl = strtr(':apiBase/offers?:queryParams', array(
            ':apiBase' => getenv('SUPERBALIST_API_URL'),
            ':queryParams' => http_build_query($parameters),
        ));

        $headers = self::_getCommonHeaders();

        $response = Request::get($apiUrl)
            ->addHeaders($headers)->send();

        return $response;

    }

}
