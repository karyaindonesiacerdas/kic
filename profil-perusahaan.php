<!DOCTYPE html>
<html>
<?php include('./head.php') ?>

<body onload="myFunction()">
    <div id="loading"></div>
    <?php include('./layouts/header.php') ?>
    <section id="services">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Profil Perusahaan</h3>
                    <div class="section-title-divider"></div>
                </div>
            </div>
            <section id="about">
                <div class="container">
                    <div class="row about-container">
                        <div class="col-lg-6">
                            <div class="icon-box wow fadeInUp">
                                <div class="icon"><i class="fa fa-location-arrow"></i></div>
                                <h4 class="title text-left"><a href="">Visi</a></h4>
                                <p class="description text-left">“Menjadi Perusahaan yang terpercaya untuk membuat Indonesia lebih cerdas”</p>
                            </div>
                            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
                                <div class="icon"><i class="fa fa-list"></i></div>
                                <h4 class="title text-left"><a href="">Misi</a></h4>
                                <ol type="" style="margin-left: 55px; line-height: 24px; font-size: 14px; margin-bottom: 0px;">
                                    <li class="text-left ml-2"><i>Melaksanakan Hidup sehat. </i></li>
                                    <li class="text-left ml-2"><i>Melaksanakan pekerjaan secara berencana. </i></li>
                                    <li class="text-left ml-2"><i>Selalu belajar untuk lebih baik. </i></li>
                                    <li class="text-left ml-2"><i>Menghasilkan karya- karya berkualitas tinggi.</i></li>
                                    <li class="text-left ml-2"><i>Melaksanakan kerjasama yang saling menguntungkan</i></li>

                                </ol>
                            </div>
                            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon"><i class="fa fa-heart"></i></div>
                                <h4 class="title text-left"><a href="">Nilai</a></h4>
                                <ol type="" style="margin-left: 55px; line-height: 24px; font-size: 14px; margin-bottom: 0px;">
                                    <li class="text-left ml-2"><i>Internasional Quality (IQ)</i></li>
                                    <li class="text-left ml-2"><i>Cost Effective (C)</i></li>
                                    <li class="text-left ml-2"><i>On Time (O)</i></li>
                                    <li class="text-left ml-2"><i>Smart (Innovative) (S)</i>
                                    <li class="text-left ml-2"><i>Team Work (T)</i></li>

                                </ol>

                            </div>


                            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
                                <div class="icon"><i class="fa fa-star"></i></div>
                                <h4 class="title text-left"><a href="">Definisi</a></h4>
                                <p class="description text-left">"Cerdas adalah kemampuan untuk memahami situasi, mengolah informasi dan memberikan respon secara tepat dan cepat."</p>
                            </div>
                        </div>
                        <div class="col-lg-6 wow fadeInUp">
                            <img style="padding-top: 80px" src="assets/img/profil.jpg" class="img-fluid img-responsive" width="500" height="500" alt="">
                        </div>
                    </div>
            </section>
        </div>
    </section>
    <?php include("./layouts/footer.php") ?>
    <?php include("./body.php") ?>
</body>

</html>