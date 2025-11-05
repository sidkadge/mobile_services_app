<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('contact_form', 'Home::contact_form');
$routes->post('getallcontactsubmissions', 'Home::getallcontactsubmissions');
$routes->get('register', 'Home::register');
$routes->post('store-user', 'Home::storeUser');

$routes->get('login', 'Home::login');

$routes->get('logout', 'Home::logout');
$routes->post('login-check', 'Home::loginCheck');

$routes->get('enquiry', 'Home::enquiry'); // After login page

