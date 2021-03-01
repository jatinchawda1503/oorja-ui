
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <title>Oorja-Farms</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
    include('./components/header/css.php'); 
    ?>
</head>

<body>
    <!-- <div class="preloader">
    <div class="preloader-inner">
    <h1 class="preloader__container__percent"></h1>
    </div>
    </div> -->

    <?php
    include('./components/header/header.php');
    ?>

<?php
    include('./components/banner/video-banner.php');
    ?>


<?php
    include('./components/banner/banner.php');
    ?>

<?php
    include('./components/gallery/gallery.php');
    ?>


<?php
    include('./components/footer/footer.php');
    ?>

<?php
    include('./components/footer/scripts.php');
    ?>

<script>
					(function() {
						document.documentElement.className = 'js';
						var slideshow = new CircleSlideshow(document.getElementById('slideshow'));
					})();
		</script>
</body>

</html>