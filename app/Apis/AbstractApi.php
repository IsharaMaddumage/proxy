<?php

namespace App\Apis;

abstract class AbstractApi
{
    /*

     */
    protected $client;
    private $baseUri;

    /**
     * [getClient - Instance of GuzzleHttp client].
     *
     * @param [string] $routerType [Router type may differ. Eg: CISCO, RUCKUS, etc...]
     * @return [object] [Returns GuzzleHttp object]
     */
    public function getClient($routerType)
    {
        if ($routerType == env('ROUTER_TYPE_ONE')) {
            $this->client = new \GuzzleHttp\Client(['base_uri' => env('BASE_URI_ONE')]);

            return $this->client;
        }
    }
}
