<?php
require_once(__DIR__ . "/includes/header.php");
require_once(__DIR__ . "/includes/mysql.php");
require_once(__DIR__ . "/includes/upload.php");
require_once(__DIR__ . "/classes/book.php");

$allowedGenres = Book::getAllowedGenres();

// $getBookQuerry = "SELECT * FROM books WHERE id = ?";
// $stmt          = $mysqlClient->prepare($getBookQuerry);
// $stmt->bindParam(1, $getData['id']);
// $stmt->execute();

// $book = $stmt->fetchAll();

?>

<h1 class="pt-5">Add a Book</h1>
<div class="container-fluid form-container pt-5">
    <form action="submit_add_book.php" method="POST" enctype="multipart/form-data">
        <div class="row d-flex">
            <div class="col-md-6">
                <img src="" alt="Book cover" class="book-cover-image invisible">
            </div>
            <div class="d-flex flex-column col-md-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input class="form-control" type="text" name="title" id="title" required>
                </div>
                <div class="mb-3">
                    <label for="author" class="form-label">Author</label>
                    <input class="form-control" type="text" name="author" id="author" required>
                </div>
                <div class="mb-3">
                    <label for="year" class="form-label">Year of publication</label>
                    <input class="form-control" type="number" name="year" id="year" min="0" max="<?php echo (int)date("Y"); ?>" required>
                </div>
                <div class="mb-3">
                    <label for="genre" class="form-label">Genre</label>
                    <select name="genre" class="form-select" id="genre" required>
                        <option value="" selected disabled>Select a genre</option>
                        <?php foreach($allowedGenres as $genre): ?>
                            <option value=" <?php echo htmlspecialchars($genre) ?> "> <?php echo htmlspecialchars($genre) ?> </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea name="description" id="description" class="form-control" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="cover" class="form-label">Book Cover (Optional)</label>
                    <input type="file" class="form-control" name="cover" id="cover" accept="image/png, image/jpeg, image/jpg">
                </div>
                <button type="submit" class="btn btn-dark btn-lg">Add Book</button>
            </div>
        </div>
    </form>
</div>

















<?php require_once(__DIR__ . "/includes/footer.php"); ?>