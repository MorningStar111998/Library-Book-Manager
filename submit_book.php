<?php
require_once(__DIR__ . "/includes/header.php");
$image = $_FILES;

if(isset($image['cover']) && $image['cover']['error'] == 0) {
    if (mb_strlen($image['cover']['name'] > 255)){
        echo "Error : The filename exceeds the maximum length of 255 characters.";
        return;
    }

    if($image['cover']['size'] > 1000000){
        echo "Upload failed: The image is too large or an error occurred.";
        return;
    }

    $fileInfo = pathinfo($image['cover']['name']);
    $extension = $fileInfo['extension'];
    $allowedExtensions = ["png", "jpeg", "jpg"];
    if (!in_array($extension, $allowedExtensions)){
        echo "Upload failed: File type '{$extension}' is not permitted. ";
        return;
    }

    $path = __DIR__ . "/uploads/covers/";
    if (!is_dir($path)){
        echo "Upload failed. The 'uploads' folder is missing";
        return;
    }

    move_uploaded_file(($image['cover'][]));

}





?>







<?php 
require_once(__DIR__ . "/includes/header.php");
?>