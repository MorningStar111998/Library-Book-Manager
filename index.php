<?php
require_once(__DIR__ . '/includes/header.php');
require_once(__DIR__ . '/includes/mysql.php');
require_once(__DIR__ . '/Classes/Library.php')
?>

<h1 class="pt-3">Welcome to Open Library</h1>
<p>Discover, track, and enjoy your books</p>



<h3 class=" mt-5">Our Top 3 books</h3>
<div id="bookCarroussel" class="carousel slide carousel-dark" data-bs-ride="carousel" data-bs-interval="3000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="" src="assets/12_Rules_for_Life_Front_Cover_(2018_first_edition).jpg" alt="First slide">
            <h4>12 Rules for Life</h4>
            <p>By Jordan Peterson</p>
        </div>
        <div class="carousel-item">
            <img class="" src="assets/the_alchemist.jpg" alt="Second slide">
            <h4>The Alchemist</h4>
            <p>By Paulo Coellho</p>
        </div>
        <div class="carousel-item">
            <img class="" src="assets/the_richest_man_in_babylon.jpg" alt="Third slide">
            <h4>The Richest Man in Babylon</h4>
            <p>By Heroge S. Clason</p>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#bookCarroussel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon " aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#bookCarroussel" data-bs-slide="next">
        <span class="carousel-control-next-icon " aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<div class="container cta text-center mt-5">
    <a href="library-genres.php" class="btn btn-primary text-decoration-none text-white">
        Check our Library
    </a>

</div>









<?php require_once(__DIR__ . '/includes/footer.php'); ?>