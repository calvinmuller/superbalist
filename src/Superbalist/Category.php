<?php

namespace Superbalist;

use \Httpful\Request as Request;
use Illuminate\Support\Facades\Log;

class Category extends ApiBase
{

    /**
     * The category
     * @var string
     * @SWG\Property()
     */
    public function get($category = null, $page = 1, $perPage = 100)
    {
        $parameters = [
            't' => microtime(true),
            'page' => $page,
            'per_page' => $perPage
        ];

        $apiUrl = strtr(':apiBase/browse/:category?:queryParams', array(
            ':apiBase' => getenv('SUPERBALIST_API_URL'),
            ':queryParams' => http_build_query($parameters),
            ':category' => $category
        ));

        Log::info(print_r($apiUrl, true));

        $headers = self::_getCommonHeaders();

        $response = Request::get($apiUrl)
            ->addHeaders($headers)->send();

        return $response;

    }

}
