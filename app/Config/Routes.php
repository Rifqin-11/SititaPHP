<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/KerjaPraktek', 'KerjaPraktek::index');
$routes->get('/TugasAkhir', 'TugasAkhir::index');
$routes->get('/formkp', 'FormKP::index');
$routes->post('formkp/submit', 'FormKP::submit');
$routes->get('/aturankp', 'AturanKP::index');
$routes->get('/UsulanKonsen', 'UsulanKonsen::index');
$routes->get('/Persuratan', 'Persuratan::index');


