<?php

namespace App\Apis\Cmx;

use App\Contracts\ApiLocationInterface;
use App\Apis\AbstractApi;

class CmxLocationApi extends AbstractApi implements ApiLocationInterface
{
    //
    private $baseUri;
    public function __construct()
    {
    }

    public function getLocations($routerType)
    {
        $this->routerType = $routerType;
        $this->getClient($this->routerType);
        $response = $this->client->get('/clients');
        $locations = json_decode($response->getBody()->getContents());

        return $locations;
    }
}
