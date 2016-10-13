<?php

namespace App\Http\Controllers;

use App\Contracts\ApiSplashInterface;
use Illuminate\Http\Request;

class SplashController extends Controller
{
    protected $api;
    /**
     * Create a new controller instance.
     */
    public function __construct(ApiSplashInterface $api)
    {
        $this->api = $api;
    }

    /**
     * [click - click through splash page].
     *
     * @param Request $request
     *
     * @return [type]
     */
    public function click(Request $request)
    {
        $baseGrantUrl = $request->input('base_grant_url');
        $userContinueUrl = $request->input('user_continue_url');
        $nodeMac = $request->input('node_mac');
        $clientIp = $request->input('client_ip');
        $clientMac = $request->input('client_mac');
        $data = array('baseGrantUrl' => $baseGrantUrl,
                      'userContinueUrl' => $userContinueUrl,
                      'nodeMac' => $nodeMac,
                      'clientIp' => $clientIp,
                      'clientMac' => $clientMac);

        return view('splash.click_through', ['data' => $data]);
    }

    /**
     * [signin - splash page signin].
     *
     * @param Request $request
     *
     * @return [type]
     */
    public function signin(Request $request)
    {
        $url = $request->input('baseGrantUrl')."?continue_url="."http://tealproxy.riverviewms.com/api/v1/splash/success"."&duration=300";
        return view('splash.signin', ['url' => $url]);

    }

    /**
     * [success - splash page success].
     *
     * @param Request $request
     *
     * @return [type]
     */
    public function success(Request $request)
    {
        return view('splash.success');
    }
}
