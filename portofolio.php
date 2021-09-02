<!DOCTYPE html>
<html>
<?php include('./head.php') ?>

<body onload="myFunction()">
    <div id="loading"></div>
    <?php include('./layouts/header.php') ?>
    <section id="portfolio">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Portofolio</h3>
                    <div class="section-title-divider"></div>
                    <p class="section-description">PT. Karya Indonesia Cerdas memiliki empat bidang keahlian utama</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                    <a class="portfolio-itemm" style="background-image: url('./assets/img/Biomedical1.jpg');" href="pf-Biomedical-Engineering.php">
                    </a>
                </div>


                <div class="col-md-4">

                    <a class="portfolio-itemm" style="background-image: url('./assets/img/Electrical1.jpg'); " href="pf-Electrical-Engineering.php">

                    </a>
                </div>

            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">

                    <a class="portfolio-itemm" style="background-image: url('./assets/img/smartmanagement1.png');" href="pf-Smart-Management.php">

                    </a>
                </div>

                <div class="col-md-4">

                    <a class="portfolio-itemm" style="background-image: url('./assets/img/informaticsengineering1.jpg');" href="pf-Informatics-Engineering.php">

                    </a>
                </div>

            </div>


    </section>



    <?php include("./layouts/footer.php") ?>
    <?php include("./body.php") ?>


</body>

</html>