<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <title>Contact Cresent Villa : Boutique Hotel Varanasi</title>
      <meta content="Contact Cresent Villa : Boutique Hotel Varanasi" name="description">
      <meta content="Contact Us, Call, Email, Location" name="keywords">
      <!-- Include css Start-->
      <?php include 'common/header.php';?>
      <!-- Include css End-->
   </head>
   <body>
      <!-- ======= Header Start ======= -->
      <?php include 'common/header_link.php';?>
      <!-- ======= Header End ======= -->
      <main id="main">
         <!-- ======= Events Section ======= -->
         <section id="events" class="contact-us">
            <div class="container">
               <div>
                  <h1 class="btn-book animate__animated animate__fadeInUp scrollto"><span>Cresentvilla Contact </span></h1>
               </div>
            </div>
         </section>
         <!-- End Events Section -->
         <!-- ======= Contact Section ======= -->
         <section id="contact" class="contact">
            <div class="container">
               <div class="section-title">
                  <!--<h2><span>Contact</span> Us</h2>-->
                  <!--<p>Ut possimus qui ut temporibus culpa velit eveniet modi omnis est adipisci expedita at voluptas atque vitae autem.</p>-->
               </div>
            </div>
            <div class="container mt-5">
               <div class="info-wrap">
                  <div class="row">
                     <div class="col-lg-4 col-md-6 info">
                        <i class="icofont-google-map"></i>
                        <h4>Location:</h4>
                        <p>126-A, Ravindrapuri Rd, Ravindrapuri Colony, Anandbagh, Bhelupur, Varanasi, Uttar Pradesh 221001 - INDIA
                        </p>
                     </div>
                     <div class="col-lg-4 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-envelope"></i>
                        <h4>Email:</h4>
                        <p>cresentvilla@yahoo.com<br>cresentvilla11@gmail.com</p>
                     </div>
                     <div class="col-lg-4 col-md-6 info mt-4 mt-lg-0">
                        <i class="icofont-phone"></i>
                        <h4>Call:</h4>
                        <p>+91 91612 88222<br>+91 542 2276193</p>
                     </div> 
                  </div>
               </div>
               <form action="forms/contact.php" method="post" role="form" class="php-email-form mb-4">
                  <div class="form-row">
                     <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                        <div class="validate"></div>
                     </div>
                     <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                        <div class="validate"></div>
                     </div>
                  </div>
                  <div class="form-group">
                     <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                     <div class="validate"></div>
                  </div>
                  <div class="form-group">
                     <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                     <div class="validate"></div>
                  </div>
                  <div class="mb-3">
                     <div class="loading">Loading</div>
                     <div class="error-message"></div>
                     <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
               </form>
            </div>
            <div class="map">
               <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d30796.904358520867!2d82.99115127122278!3d25.290420078174993!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe25501e876f54ef0!2sCresent%20Villa!5e0!3m2!1sen!2sin!4v1604662629125!5m2!1sen!2sin"frameborder="0" style="border:0; width: 100%; height: 350px;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
         </section>
         <!-- End Contact Section -->
      </main>
      <!-- End #main -->
      <!-- ======= Footer Start ======= -->
      <?php include 'common/footer.php';?>
      <!-- ======= Footer End ======= -->
   </body>
</html>