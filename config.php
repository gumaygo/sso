<?php
require_once 'vendor/autoload.php';
$google_client = new Google_Client();
$google_client->setClientId('474986938993-b8mqv1mrmodfm9g690g0s2j2o5ltij71.apps.googleusercontent.com');
$google_client->setClientSecret('JPe5ULWz-dfzUOwvJnEn4CvM');
$google_client->setRedirectUri('http://localhost/ttt/');
$google_client->addScope('email');
$google_client->addScope('profile');

session_start();

?>