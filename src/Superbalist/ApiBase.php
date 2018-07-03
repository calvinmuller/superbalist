<?php

namespace Superbalist;

/**
 * Base API class, contains all code shared by the web API classes.
 */

use GuzzleHttp\Client;

class ApiBase extends Client
{
    /**
     * The last API response executed.
     */
    public $lastApiResponse;

    protected $_baseUrl = 'https://api.mobile.superbalist.com/';

    public function setBase($baseUrl) {
        $this->_baseUrl = $baseUrl;
    }

    public function __construct(array $config = [])
    {
        $config = [
            'base_uri' => $this->_baseUrl,
            'headers' => self::_getCommonHeaders()
        ];

        parent::__construct($config);
    }


    /**
     * Get and returns an array of common/shared headers.
     */
    public static function _getCommonHeaders()
    {
        return array(
//            'Host' => getenv('SUPERBALIST_API_HOST'),
            'X-SUPERBALIST-DEVICE-ID' => 'iPhone10,1',
            'X-SUPERBALIST-APPVERSION' => '9.9.9',
            'X-SUPERBALIST-PLATFORM' => 'ios',
            'Accept' => '*/*',
            'Content-Type' => 'application/json',
            'User-Agent' => 'Superbalist/3 CFNetwork/758.5.3 Darwin/15.6.0'
        );
    }

}
