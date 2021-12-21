<!DOCTYPE html>
<html>
<?php include('./head.php') ?>

<body onload="myFunction()">
    <div id="loading"></div>
    <?php include('./layouts/header.php') ?>
    <section id="contact">
        <div class="container wow fadeInUp">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="section-title">Kontak</h3>
                    <div class="section-title-divider"></div>
                    <!--  <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-lg-offset-2">
                    <div class="info">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>Wisma NH Building Lantai 1 Pancoran Kota<br> Jakarta Selatan</p>
                        </div>


                        <div>
                            <i class="fa fa-envelope"></i>
                            <p>info@karya-indonesia-cerdas.com</p>
                        </div>
                        <br>
                        <div>
                            <i class="fa fa-phone"></i>
                            <span>+62 812-3395-0085</span>
                            <br>
                            <span>+62 821-2539-2881</span>
                            <br>
                            <span>+62 815-7330-9155 (WA)</span>
                        </div>

                    </div>
                </div>
                <div class="col-md-5">
                    <div class="form">
                        <div id="sendmessage">Your message has been sent. Thank you!</div>
                        <div id="errormessage"></div>


                        <form id="contact-form" action="contact.php" method="post" role="form" class="contactForm">

                            <div class="messages"></div>
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" required="required" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" required="required" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" name="subject" required="required" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" id="form_message" name="message" required="required" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
                <div style="margin-top: 20px" class="col-lg-12">
                    <div class="map mb-4 mb-lg-0">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d991.535229957781!2d106.84272132914671!3d-6.245153099717464!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3b85bf3e09d%3A0x160234e756fdf17b!2sWisma%20NH!5e0!3m2!1sid!2sid!4v1573120408965!5m2!1sid!2sid" width="600" frameborder="0" style="border:0; width: 100%; height: 312px;" allowfullscreen></iframe>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <?php include("./layouts/footer.php") ?>
    <?php include("./body.php") ?>
</body>

</html>