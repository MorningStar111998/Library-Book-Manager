<?php 
require_once(__DIR__ . "/includes/header.php");
$getData = $_GET;

if (!isset($getData['id'])) {
    echo "A valid ID is needed to display the book";
    return ;
}

echo $getData['id'];
?>


















<?php require_once(__DIR__ . "/includes/footer.php"); ?>