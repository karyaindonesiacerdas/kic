<!DOCTYPE html>
<html>
<?php include('./head.php') ?>

<body onload="myFunction()">
    <div id="loading"></div>
    <?php include('./layouts/header.php') ?>
    <section id="portfolios">
        <div class="container wow fadeInUp">

            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Asset Manager</h3>
                    <div class="section-title-divider"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <a class="portfolio-itemm" style="background-image: url(assets/img/banner-SISMA01.jpg);" href="#">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-md-1">
                </div>
                <div class="col-md-10">
                    <a class="portfolio-itemm" style="background-image: url(assets/img/SISMAH.jpg);" href="sismah.php">
                        <div class="detailss">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>


    <?php include("./layouts/footer.php") ?>
    <?php include("./body.php") ?>


</body>

</html>