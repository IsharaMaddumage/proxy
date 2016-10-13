<?php

namespace App\Apis;

use App\Contracts\ApiLocationInterface;

class SpotLocationApi extends AbstractApi implements ApiLocationInterface
{
    //
    private $baseUri;
    public function __construct()
    {
      $this->baseUri = 'http://ciscomeraki.riverviewms.com';
      $this->getClient($this->baseUri);
    }

    public function getLocations()
    {
        dd('SPOT');
        $response = $this->client->get('/clients');
        return $response->getBody()->getContents();
    }
}
