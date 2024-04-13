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

Flight::route('/servicioEcommerce', function () {
    Flight::render('servicioEcommerce.php', array('title' => 'Diseño web'));
});

Flight::route('/servicioWebDevelop', function () {
    Flight::render('servicioWebDevelop.php', array('title' => 'Web Development'));
});

Flight::route('/labs', function () {
    Flight::render('labs.php', array('title' => 'Labs'));
});

Flight::route('/care', function () {
    Flight::render('care.php', array('title' => 'Care'));
});

Flight::route('/deskriveLabs', function () {
    Flight::render('deskriveLabs.php', array('title' => 'Formulario - Deskrive Labs'));
});

Flight::route('/portafolio', function () {
    Flight::render('portafolio.php', array('title' => 'Portafolio'));
});

Flight::route('/agendaUnaReunion', function () {
    Flight::render('agendaUnaReunion.php', array('title' => 'Agena una reunión'));
});

Flight::route('/reunionConfirmada', function () {
    Flight::render('reunionConfirmada.php', array('title' => 'Reunión confirmada'));
});

#404
Flight::map('notFound', function () {
    // Display custom 404 page
    Flight::render('404.php');
});

Flight::start();
