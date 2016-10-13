<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
$app->group(['prefix' => 'api/v1/locations', 'namespace' => 'App\\Http\\Controllers'], function() use( $app )
{
  //$app->post('location', 'LocationController@getLocations');
  $app->post('location', 'LocationController@getLocations');
  //$app->post('floor', 'LocationController@getFloor');
});

//$app->group(['prefix' => 'api/v1/router', 'namespace' => 'App\\Http\\Controllers'], function() use( $app )
//{
  //$app->post('ssid', 'RouterController@getSsid');
  //$app->post('locations', 'LocationController@getLocations');
  //$app->post('floor', 'LocationController@getFloor');
//});

$app->group(['prefix' => 'api/v1/splash', 'namespace' => 'App\\Http\\Controllers'], function() use( $app )
{

  $app->get('click', 'SplashController@click');
  $app->post('signin', 'SplashController@signin');
  $app->get('success', 'SplashController@success');
  //$app->post('locations', 'LocationController@getLocations');
  //$app->post('floor', 'LocationController@getFloor');
});

// $app->get('/profile', [
//     'as' => 'profile', 'uses' => 'Controller@index'
// ]);
//
// $app->get('/key', function() {
//     return str_random(32);
// });
//$app->post('click', 'SplashController@click');
//$app->get('/click', function() {
  // \Log::info("Hi");
//});
$app->get('click', 'SplashController@click');
