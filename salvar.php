<?php
    $upload_dir = "uploads";
    if(isset($_FILES['file']['tmp_name'])) {
        $tmp = $_FILES['file']['tmp_name'];
        $name = uniqid()."".$_FILES['file']['name'];
        move_uploaded_file( $tmp, "$upload_dir/$name");
        header('location: index.php');
    }