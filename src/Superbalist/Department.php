<?php

namespace Superbalist;

use \Httpful\Request as Request;
use Illuminate\Support\Facades\Log;

class Department extends ApiBase
{

    /**
     * Get a department and related products
     * @param null $category
     * @param int $page
     * @param int $perPage
     * @param array $param
     * @return \Httpful\Response|\Psr\Http\Message\ResponseInterface
     */
    public function find($department = null, $page = 1, $perPage = 100, $param = [])
    {

        $parameters = array_merge($param, [
            't' => microtime(true),
            'page' => $page,
            'per_page' => $perPage
        ]);

        return $this->get("browse{$department}", [
            'query' => $parameters
        ]);
    }




}
