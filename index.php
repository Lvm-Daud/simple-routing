<?php
$uri = require 'request.php';


//Let $uri = 'about-us';
$route = require 'route.php';
require $routes[$uri]; 
// equivalent to require $routes['about-us']; or require about.php;

// try example.com/
// try example.com/about-us
// try example.com/about-us/vision
// try example.com/contact