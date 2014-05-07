<?php
/**
 * Log the user out.
 */

/*
 * TODO(omni) Change logout to require a POST
// Requires a POST to avoid other people logging user out.
if ('POST' !== $_SERVER['REQUEST_METHOD']) {
    die();
}
 */

session_start();
unset($_SESSION['access_token']);
$redirect = filter_var('http://' . $_SERVER['HTTP_HOST'], FILTER_SANITIZE_URL);
header('Location: ' . $redirect);
