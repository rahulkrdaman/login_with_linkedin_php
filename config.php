<?php
/*
 * Basic Site Settings and API Configuration
 */

// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'linkedin');
define('DB_USER_TBL', 'users');

// LinkedIn API configuration
define('LIN_CLIENT_ID', '78o79di50zdn7o');
define('LIN_CLIENT_SECRET', 'OjnqNsikeGlfMelt');
define('LIN_REDIRECT_URL', 'http://localhost/linkedin_login_with_php/index.php');
define('LIN_SCOPE', 'r_liteprofile r_emailaddress'); //API permissions

// Start session
if(!session_id()){
    session_start();
}

// Include the oauth client library
require_once 'linkedin-oauth-client-php/http.php';
require_once 'linkedin-oauth-client-php/oauth_client.php';