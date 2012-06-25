<?php

require_once __DIR__.'/../vendor/autoload.php';

use Silex\Provider\TwigServiceProvider;
use Silex\Provider\DoctrineServiceProvider;
use Repository\DumbRepository;

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/templates',
    'twig.options' => array('cache' => __DIR__.'/../cache'),
));

return $app;
