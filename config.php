<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('25713308604-2uhfhh6fhqi9fs2p5vgbm4oo9tapp22v.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/LoginconlaAPI/index.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

?>