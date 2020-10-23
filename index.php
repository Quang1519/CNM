<?php

require 'config.php';
// require 'lib/loader.php';
// require 'lib/model.php';
// require 'lib/controller.php';
// require 'lib/view.php';
spl_autoload_register(function ($class_name) {
    require_once 'lib/'.$class_name . '.php';
});

session_start();

$loader = new Loader();


?>