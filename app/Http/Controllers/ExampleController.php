<?php

namespace App\Http\Controllers;

use App\Contracts\ApiInterface;
use Illuminate\Http\Request;

class ExampleController extends Controller
{
    protected $api;
    /**
     * Create a new controller instance.
     */
    public function __construct(ApiInterface $api)
    {
        $this->api = $api;
    }

    public function getLocations()
    {
        $client = $this->api->getLocations();

    }

    //
}
