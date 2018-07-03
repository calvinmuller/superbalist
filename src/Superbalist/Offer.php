<?php

namespace Superbalist;

class Offer extends ApiBase
{

    /**
     * Get all offers
     * @param array $parameters
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function all($parameters = [])
    {

        return $this->get("v2/offers", [
            'query' => $parameters
        ]);

    }


    /**
     * Get an offers products
     * @param $id
     */
    public function find($id, $parameters = [])
    {
        return $this->get("v2/feature/100-off-this-feature/{$id}", [
            'query' => $parameters
        ]);
    }

}
