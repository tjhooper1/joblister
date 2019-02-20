<?php
// SESSION START
session_start();

require_once 'config.php';

//include helper file
require_once 'helpers/system_helper.php';

function __autoload($class_name){
    require_once 'lib/'.$class_name.'.php';
}

