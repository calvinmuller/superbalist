<?php

namespace Superbalist;

class Product extends ApiBase
{

    public function find($productId = null, $parameters = [])
    {

        return $this->get("v2/product/{$productId}", [
            'query' => $parameters
        ]);

    }

}
