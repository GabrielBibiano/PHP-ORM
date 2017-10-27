<?php
    ini_set('display_errors', 1);
    require_once "autoload.php"; 
    use Erp\Database;
    use Erp\User;

    $DB->conn("localhost", "mysql", "root", "root");

    $user = new User();
    $user->all();
?>