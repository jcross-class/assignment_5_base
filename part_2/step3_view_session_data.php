<?php

// Load the twig library using composer's autoload feature.
require_once '../vendor/autoload.php';

// Manually start the PHP session.  If the client browser sent a
// PHPSESSIONID cookie that has a valid value, that session will be loaded.
// If not, a new empty session is created.
session_start();

// set up default values for all session values
$first_name = 'NOT IN SESSION DATA';
$last_name = 'NOT IN SESSION DATA';
$age = 'NOT IN SESSION DATA';
$favorite_numbers = array();

if (array_key_exists('FirstName', $_SESSION)) {
    $first_name = $_SESSION['FirstName'];
}

if (array_key_exists('LastName', $_SESSION)) {
    $last_name = $_SESSION['LastName'];
}

if (array_key_exists('Age', $_SESSION)) {
    $age = $_SESSION['Age'];
}

if (array_key_exists('FavoriteNumbers', $_SESSION)) {
    $favorite_numbers = $_SESSION['FavoriteNumbers'];
}

// Tell twig to use the current directory as the source for templates files.
$loader = new Twig_Loader_Filesystem('.');
// Create a new twig object to use to render with.
$twig = new Twig_Environment($loader);

// Render the template step3_view_session_data.twig using data from the given array.
// Print the output to the web browser.
echo $twig->render('step3_view_session_data.twig', array('first_name' => $first_name));
