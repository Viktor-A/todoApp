<?php

<<<<<<< HEAD
$router->get('', 'controllers/index.php'); 
$router->get('about', 'controllers/about.php'); 
$router->get('about/culture', 'controllers/about-culture.php');
$router->get('contact', 'controllers/contact.php');
$router->post('names', 'controllers/add-name.php');


=======
$router->define([
    '' => 'controllers/index.php',
    'about' => 'controllers/about.php',
    'about/culture' => 'controllers/about-culture.php',
    'contact' => 'controllers/contact.php'
]);
>>>>>>> 9d05c6dfd4e8b6442945d64a6579ea0cdfa37f7d
