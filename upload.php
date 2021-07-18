<?php
date_default_timezone_set('Asia/Tashkent');
user_error(print_r($_FILES, true));
$uploads_dir = 'uploads/';
$target_path = $uploads_dir . basename($_FILES['file']['name']);

if (move_uploaded_file($_FILES['file']['tmp_name'], $target_path)) {
    echo 'File uploaded: ' . $target_path;
} else {
    echo 'Error in uploading file ' . $target_path;
}
