<?php

require 'flight/Flight.php';

# Debug errors
Flight::set('flight.log_errors', true);
# Root route
#define('__ROOT__', "http://localhost/deskrive_ws/");
define('__ROOT__', "http://localhost:5000/Trabajo/Freelancer/Samuel/deskrive_v2/");


Flight::route('/', function () {
    Flight::render('index.php', array('title' => 'Inicio'));
});

Flight::route('/about', function () {
    Flight::render('about.php', array('title' => 'Acera de nosotros'));
});

Flight::route('/contact', function () {
    Flight::render('contact.php', array('title' => 'Contacto'));
});

Flight::route('/servicioDisenoWeb', function () {
    Flight::render('servicioDisenoWeb.php', array('title' => 'Diseño web'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
