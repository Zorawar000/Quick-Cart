<?php

include('db.php');
include('new_project_class.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $new_project = new new_project_work;
    $edit_profile = $new_project->new_project_update($connect);
}
?>
