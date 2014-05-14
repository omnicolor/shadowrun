<?php
/**
 * New character form.
 */

error_reporting(E_ALL|E_STRICT);
ini_set('display_errors', true);

session_start();
if (!isset($_SESSION['email'])) {
    // User hasn't logged in.
    $redirect = 'Location: '
        . filter_var($_SERVER['HTTP_HOST'], FILTER_SANITIZE_URL);
    header($redirect);
    exit();
}

require_once '../vendor/autoload.php';

$twig = new Twig_Environment(
    new Twig_Loader_Filesystem('../templates'),
    array('cache' => '/var/twig-cache')
);

$template = $twig->loadTemplate('new.twig');
echo $template->render(array('title' => 'Create a new character'));
