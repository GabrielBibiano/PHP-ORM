<?php
    require_once "autoload.php"; 
    use Erp\Database;

    $DB->conn("localhost", "mysql", "root", "root");

    include_once "User.class.php";

    $user = new User();
    $user->all();

?>