<?php
session_start();
require 'includes/header.php';
?>
    <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="container">
            <div class="carousel-caption">
                <h1>LibNum Librairie Numérique en Ligne</h1>
				<p>LibNum vous permet de visualiser les livres disponible dans notre librairie. En vous inscrivant sur notre site, vous pourrez acheter les livres de votre choix, ou benéficier de suggestion du site. </p>
            </div>
            </div>
        </div>
        <div class="carousel-item">
        <div class="overlay-image" style="background-image:url(./images/slide2.webp);"></div>
            <div class="container">
            <div class="carousel-caption">
                <h1>Un annuaire !</h1>
                <p>LibNum vous permet de retrouver tout les livres que vous voulez lire!</p>
            </div>
            </div>
        </div>
        </div>
    </div>


<?php
require 'includes/footer.php';
?>