<?php
require_once(__DIR__ . "/includes/header.php");
require_once(__DIR__ . "/includes/mysql.php");

$getData = $_GET;

if (!isset($getData['id'])) {
    echo "A valid ID is needed to display the book";
    return;
}
$getBookQuerry = "SELECT * FROM books WHERE id = ?";
$stmt          = $mysqlClient->prepare($getBookQuerry);
$stmt->bindParam(1, $getData['id']);
$stmt->execute();

$book = $stmt->fetchAll();

?>

<section id="book-details">
    <div class="container-fluid row d-flex justify-content-center p-5">
        <div class="book-cover col-md-6 d-flex justify-content-center">
            <img class="book-cover-img" src="assets/the_alchemist.jpg" alt="Book Cover">
        </div>
        <div class="col-md-6 ">
            <h2> <?php echo htmlspecialchars($book[0]['title']); ?> </h2>
            <h5><em><?php echo htmlspecialchars($book[0]['author']); ?></em></h5>
            <p><?php echo htmlspecialchars($book[0]['description']); ?></p>
        </div>
    </div>
</section>

















<?php require_once(__DIR__ . "/includes/footer.php"); ?>