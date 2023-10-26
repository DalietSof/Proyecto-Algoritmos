<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('([a-z]{2})', 'Home::index/$1');
 
$routes->group('{locale}', ['filter' => 'guest'], function($routes) {

    $routes->get('signup', 'Signup::new');
    $routes->post('signup/create', 'Signup::create');
    $routes->get('signup/success', 'Signup::success');
    $routes->get('signup/activate/(:alphanum)', 'Signup::activate/$1');


    $routes->get('login', 'Login::new');
    $routes->post('login/create', 'Login::create');
    $routes->get('password/forgot', 'Password::forgot');
    $routes->post('password/processforgot', 'Password::processForgot');
    $routes->get('password/resetsent', 'Password::resetSent');
    $routes->get('password/reset/(:alphanum)', 'Password::reset/$1');
    $routes->post('password/processreset/(:alphanum)', 'Password::processReset/$1');
    $routes->get('password/resetsuccess', 'Password::resetSuccess');


});

$routes->get('/logout', 'Login::delete');
