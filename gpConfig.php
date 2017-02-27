<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '808816356734-tjp7evsqm18alum1tm32am43k6jcq1ke.apps.googleusercontent.com';
$clientSecret = 'GeNcF9kuUMejykB68qi18Ai2';
$redirectURL = 'http://vinylswap.us/home';

//Call Google API
$gClient = new Google_Client();
$gClient->setApplicationName('Login to vinylswap.us');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>