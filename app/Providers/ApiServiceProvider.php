<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;

class ApiServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register()
    {

        switch ($this->app->request->header('routerType')) {
        case env('ROUTER_TYPE_TWO'):
          $this->app->bind('App\Contracts\ApiLocationInterface', 'App\Apis\SpotLocationApi');
          break;
        case env('ROUTER_TYPE_ONE'):
          $this->app->bind('App\Contracts\ApiLocationInterface', 'App\Apis\Cmx\CmxLocationApi');
         // $this->app->bind('App\Contracts\ApiRouterInterface', 'App\Apis\Cmx\CmxRouterApi');
          $this->app->bind('App\Contracts\ApiSplashInterface', 'App\Apis\Cmx\CmxSplashApi');
          break;
        default :
          $this->app->bind('App\Contracts\ApiSplashInterface', 'App\Apis\Cmx\CmxSplashApi');
          break;
      }
    }
}
