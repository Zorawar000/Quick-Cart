<?php
include('db.php');
include('new_project_class.php');

$new_project = new new_project_work();
$last_logout_update = $new_project->last_logout_update($connect);
session_destroy();
header("Location: login1.php");
exit();
?>
