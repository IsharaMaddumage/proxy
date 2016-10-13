<?php

namespace App\Http\Controllers;

use App\Contracts\ApiRouterInterface;
use Illuminate\Http\Request;

class RouterController extends Controller
{
    protected $api;
    /**
     * Create a new controller instance.
     */
    public function __construct(ApiRouterInterface $api)
    {
        $this->api = $api;
    }

    /**
     * [getSsid get ssid of the router]
     * @param  Request $request
     * @return [type]           
     */
    public function getSsid(Request $request)
    {
        $formattedResponse = $this->api->getSsid($request->header('routerType'));
        $result = array(
                     'common_params' => array(
                       'ssid' => $formattedResponse['ssid'],
                     ),
                     'additional_params' => $formattedResponse['additional_params'],
                  );

        return $this->respond($result, 200);
    }
}
