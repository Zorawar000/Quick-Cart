<?php
include (dirname(__FILE__).'/../../db.php');

// Ensure db_connect function is defined
if (!function_exists('db_connect')) {
    function db_connect() {
        global $host, $user, $password, $db_name;
        $conn = new mysqli($host, $user, $password, $db_name);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        return $conn;
    }
}
?>
