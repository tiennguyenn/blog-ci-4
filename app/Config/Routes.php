<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\News;
/**
 * @var RouteCollection $routes
 */
$routes->get('news/new', 'News::new');
$routes->get('news/(:segment)', [News::class, 'view']);
$routes->get('news', 'News::index');
$routes->post('news', 'News::create');
$routes->get('/pages', 'Pages::index');
$routes->get('/', 'Home::index');