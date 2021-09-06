<?php
require_once 'vendor/autoload.php';
require_once 'class-db.php';
  
define('GOOGLE_CLIENT_ID', 'API_CLIENT_ID');
define('GOOGLE_CLIENT_SECRET', 'API_CLIENT_SECRET');
  
$config = [
    'callback' => '94.237.70.115/callback.php',
    'keys'     => [
                    'id' => CLIENT_ID,
                    'secret' => CLIENT_SECRET
                ],
    'scope'    => 'https://www.googleapis.com/auth/youtube https://www.googleapis.com/auth/youtube.upload',
    'authorize_url_parameters' => [
            'approval_prompt' => 'force', // to pass only when you need to acquire a new refresh token.
            'access_type' => 'offline'
    ]
];
  
$adapter = new Hybridauth\Provider\Google( $config );

