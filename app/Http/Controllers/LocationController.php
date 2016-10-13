<?php

namespace App\Http\Controllers;

use App\Contracts\ApiLocationInterface;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    protected $api;
    /**
     * Create a new controller instance.
     */
    public function __construct(ApiLocationInterface $api)
    {
        $this->api = $api;
    }

    /**
     * [getLocations - get the locations].
     *
     * @param Request $request
     *
     * @return [array]
     */
    public function getLocations(Request $request)
    {
        $locations = $this->api->getLocations($request->header('routerType'));
        $result = array();
        foreach ($locations as $location) {
            $formattedResponse = array(
                                'common_params' => array(
                                   'clientMac' => $location->mac,
                                   'ssid' => $location->ssid,
                                 ),
                                 'additional_params' => array(
                                   'router_type' => 'CISCO',
                                   'seenString' => $location->seenString,
                                   'seenEpoch' => $location->seenEpoch,
                                   'lat' => $location->seenString,
                                   'lng' => $location->seenString,
                                   'unc' => $location->seenString,
                                 ),
                               );
            array_push($result, $formattedResponse);
        }

        return $this->respond($result, 200);
    }
}
