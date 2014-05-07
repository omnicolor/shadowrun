<?php
/**
 * Shadowrun Character Manager homepage.
 *
 * Requires the user to log in with their Google account.
 */

use \Google\Client;
use \Google\Service\Oauth2;

require '../vendor/autoload.php';
$config = require '../config.php';

session_start();

$client = new Google_Client();
$client->setApplicationName('Shadowrun Character Manager');
$client->setClientId($config['googleClientId']);
$client->setClientSecret($config['googleClientSecret']);
$client->setRedirectUri($config['googleRedirectUrl']);
$client->setScopes('email');

/************************************************
  If we have a code back from the OAuth 2.0 flow,
  we need to exchange that with the authenticate()
  function. We store the resultant access token
  bundle in the session, and redirect to ourself.
 ************************************************/
if (isset($_GET['code'])) {
  $client->authenticate($_GET['code']);
  $_SESSION['access_token'] = $client->getAccessToken();
  $redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
  header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
  exit();
}

/************************************************
  If we have an access token, we can make
  requests, else we generate an authentication URL.
 ************************************************/
if (isset($_SESSION['access_token']) && $_SESSION['access_token']) {
    $client->setAccessToken($_SESSION['access_token']);
} else {
    $authUrl = $client->createAuthUrl();
}

if ($client->getAccessToken()) {
    $_SESSION['access_token'] = $client->getAccessToken();
    $token_data = $client->verifyIdToken()->getAttributes();
    $_SESSION['email'] = $token_data['payload']['email'];
    $redirect = 'http://' . $_SERVER['HTTP_HOST'] . '/new.php';
    header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
    exit();
}
// TODO(omni) Move the HTML to a template
// TODO(omni) Make the initial page not look like ass
?>
<!doctype html>
<html>
<head>
    <title>Shadowrun Character Manager</title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
<p>
<a href="<?php echo $authUrl; ?>">Log in with your Google Account</a>
</p>
</body>
</html>
