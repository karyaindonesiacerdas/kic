 <section id="contact">
     <div class="container wow fadeInUp">
         <div class="row">
             <div class="col-md-12">
                 <h3 class="section-title">Hubungi Kami</h3>
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
                         <p>+62895385290704</p>
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

         </div>
     </div>
 </section>