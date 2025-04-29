<?php
include('../../db.php');
include('../admin_management_class.php');

$admin_management = new Admin_Management();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $admin_management->add_banner($connect);
}
?>