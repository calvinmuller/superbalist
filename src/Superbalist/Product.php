<?php
<<<<<<< HEAD

=======
>>>>>>> f28fa38ef180eb49b3b34a5da8e45f1d1d97e4cd
namespace Superbalist;

use \Httpful\Request as Request;

class Product extends ApiBase
{

<<<<<<< HEAD
    public function find($productId = null, $parameters = [])
    {
=======
    public function get($productId = null)
    {
        $parameters = [
            't' => microtime(true),
        ];

>>>>>>> f28fa38ef180eb49b3b34a5da8e45f1d1d97e4cd
        $apiUrl = strtr(':apiBase/product/:productId?:queryParams', array(
            ':apiBase' => getenv('SUPERBALIST_API_URL'),
            ':queryParams' => http_build_query($parameters),
            ':productId' => $productId
        ));

<<<<<<< HEAD
        return $this->get("product/{$productId}", [
            'query' => $parameters
        ]);
=======
        $headers = self::_getCommonHeaders();

        $response = Request::get($apiUrl)
            ->addHeaders($headers)->send();

        return $response;
>>>>>>> f28fa38ef180eb49b3b34a5da8e45f1d1d97e4cd

    }

}
