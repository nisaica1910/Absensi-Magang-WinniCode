<?php
//sessoin_start();
include_once '../sw-library/sw-config.php';
// Include Librari Google Client (API)
include_once '../sw-library/google-client/Google_Client.php';
include_once '../sw-library/google-client/contrib/Google_Oauth2Service.php';

$client_id = '1030443547297-1h9jl1vkpht1trltrreoocddtevcrvtc.apps.googleusercontent.com'; // Google client ID
$client_secret = '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'; // Google Client Secret
$redirect_url = '' . $site_url . '/oauth/google'; // Callback URL
echo ($redirect_url);
// Call Google API
$gclient = new Google_Client();
$gclient->setClientId($client_id); // Set dengan Client ID
$gclient->setClientSecret($client_secret); // Set dengan Client Secret
$gclient->setRedirectUri($redirect_url); // Set URL untuk Redirect setelah berhasil login

$google_oauthv2 = new Google_Oauth2Service($gclient);
