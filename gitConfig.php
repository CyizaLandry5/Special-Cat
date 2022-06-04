<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library 
require_once 'Github_OAuth_Client.php';


/*
 * Configuration and setup GitHub API
 */
$clientID         = 'bc997164127ed29dfe3e';
$clientSecret     = '2da1e5103be3e92727bc2114a3b9469bebc4d12d';
$redirectURL     = 'http://localhost/landryScat/';
// $redirectURL     = 'http://localhost/landryScat/';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}