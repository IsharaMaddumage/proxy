<?php

namespace App\Apis\Cmx;

use App\Contracts\ApiSplashInterface;
use App\Apis\AbstractApi;

class CmxSplashApi extends AbstractApi implements ApiSplashInterface
{
    //
    private $routerType;
    public function __construct()
    {
    }

    /**
     * [click - click through splash page].
     *
     * @param [array] $data
     * @return [array] [Returns array of formatted response]
     */
    public function click($data)
    {
        //dd($data);
        $this->routerType = $data['routerType'];
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
