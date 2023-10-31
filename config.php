<?php 
    require 'vendor/autoload.php'; // Load Composer autoload file

    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
    $dotenv->load();

    define('BASE_URL', $_ENV['BASE_URL']);
?>