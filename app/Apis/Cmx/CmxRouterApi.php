<?php

namespace App\Apis\Cmx;

use App\Contracts\ApiRouterInterface;
use App\Apis\AbstractApi;

class CmxRouterApi extends AbstractApi implements ApiRouterInterface
{
    //
    private $routerType;
    public function __construct()
    {
    }

    /**
     * [getSsid - get ssid of the router].
     *
     * @param [string] $routerType [Router type may differ. Eg: CISCO, RUCKUS, etc...]
     * @return [array] [Returns array of formatted response]
     */
    public function getSsid($routerType)
    {
        $this->routerType = $routerType;
        $this->getClient($this->routerType);
        $response = $this->client->get('/clients/ec:1f:72:c6:59:ff');
        $locations = json_decode($response->getBody()->getContents());

        $formattedResponse = array(
                              'ssid' => $locations->ssid,
                              'additional_params' => array(
                                'seenString' => $locations->seenString,
                              ),
                            );

        return $formattedResponse;
    }
}
