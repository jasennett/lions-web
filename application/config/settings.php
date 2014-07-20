<?php

class FacebookSettings
{
    static $APP_ID = '';
    static $APP_SECRET = '';
    static $LIONS_FAN_PAGE_ID = '102041656538661';
    static $API_ROOT = 'https://graph.facebook.com';
}

if (file_exists(__DIR__ . '/secret.php'))
{
    require_once('secret.php');
}