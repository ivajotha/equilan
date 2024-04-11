<?php include_once('header.php') ?>

    <!-- ======= Contactanos Section ======= -->
    <section id="contact" class="inner-secction contact">
      <div class="container">

        <div class="section-title">
          <h2>Contáctanos</h2>
          <p class="subtitle">Lunes a Sábado (9:00 am a 6:00 pm) <br> Domingo (Cerrado)</p>
        </div>

      </div>

      <div class="container">

        <div class="row" style="max-width: 600px;margin:0 auto;">

<!--           <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div> -->

          <div class="col-lg-12">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-group mt-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre completo:" required="">
              </div>

              <div class="form-group mt-3">
                <input type="email" class="form-control" name="email" id="email" placeholder="Correo electrónico" required="">
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Asunto" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Escríbenos" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center">
                <a id="enviarContacto" class="appointment-btn rounded-pill">CONTÁCTANOS <i class="fa fa-arrow-right"></i></a>
              </div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

<?php include_once('footer.php') ?>