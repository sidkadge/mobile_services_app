<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->post('contact_form', 'Home::contact_form');


$routes->get('enquiry', 'Home::enquiry');

