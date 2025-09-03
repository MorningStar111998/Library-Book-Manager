<?php
require_once(__DIR__ . "/includes/header.php");
require_once(__DIR__ . "/classes/library.php");
$books = $library->getBooks();
?>

<div class="container">
    <h3 class="pt-3">Browse in our library</h3>
</div>

<div class="container container-genre">
    <div class="row g-3">
        <?php foreach ($books as $book) : ?>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                <div class="card h-100 text-center">
                    <img src="assets/freepik_assistant_1756211321087.png" class="card-img-top mx-auto" alt="<?php echo htmlspecialchars($book->getTitle()) ; ?>">
                    <div class="card-body">
                        <h5 class="card-title"> <?php echo htmlspecialchars($book->getTitle()); ?> </h5>
                        <p class="card-text">By <?php echo htmlspecialchars($book->getAuthor()) ; ?> </p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>


<?php require_once(__DIR__ . "/includes/footer.php"); ?>