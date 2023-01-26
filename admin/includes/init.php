<?php
    defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);
    define('SITE_ROOT', DS . 'wamp64' . DS . 'www' . DS . 'how_to');
    defined('INCLUDES_PATH') ? null : define('INCLUDES_PATH',SITE_ROOT.DS.'admin'.DS.'includes');
    defined('IMAGES_PATH') ? null : define('IMAGES_PATH', SITE_ROOT.DS.'admin'.DS.'assets'.DS.'images'.DS.'photos');

    require_once("functions.php");
    require_once("config.php");
    require_once("Database.php");
    require_once("Session.php");
    /*include("Db_object.php");
    include("User.php");*/

?>