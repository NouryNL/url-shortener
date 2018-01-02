<?php
/*
	Redirect all users to the main website where they can shorten links
*/

$router->get('/', function () {
    return redirect(env('MAIN_WEBSITE', 'https://noury.eu'));
});



/*
	Redirect all other requests to their destination URL
*/

$router->get('/{uid}', 'LinkController@index');



/*
	REST-API for creating requests
*/

/*$router->group(['prefix' => 'api/v1'], function () use ($router) {
    $router->post('link', 'LinkController@get');
});*/