<?php

use PHPUnit\Framework\TestCase;

class BrandsTest extends TestCase
{

    private $api;

    public function testBrands()
    {

        $this->api = new \Superbalist\Brand();

        $brands = json_decode($this->api->all()->getBody(), true);

        $this->assertArrayHasKey('brands', $brands);
    }
}