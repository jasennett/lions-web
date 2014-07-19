<?php

class FacebookSettings
{
    static $APP_ID = '';
    static $APP_SECRET = '';
    static $LIONS_VP_ID = '102041656538661';
}

if (file_exists(__DIR__ . '/secret.php'))
{
    require_once('secret.php');
}