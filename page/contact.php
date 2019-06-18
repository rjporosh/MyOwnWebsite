
<?php include '../header.php';?>

<script>
  document.getElementById("myNavigation").classList.remove('navbar-light');
  document.getElementById("myNavigation").classList.add('navbar-dark');


</script>
  
    <!-- Header -->
    <header class="header pt-10 pb-0">
      <div class="container text-center">
        <h1 class="display-4">Let's Get In Touch</h1>
        <p class="lead-2 mt-6">Here are the ways you can contact us with any questions you have</p>
      </div>
    </header><!-- /.header -->


    <!-- Main Content -->
    <main class="main-content">


      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Map
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section text-white bg-dark bg-img" style="background-image: url(../assets/img/thumb/14.jpg)" data-overlay="6">
        <div class="container">
          <div class="row gap-y align-items-center">

            <div class="col-md-5">
              <p class="text-uppercase small opacity-70 fw-600 ls-1">Head Office</p>
              <h5>Dhaka, Bangladesh</h5>
              <br>
              <p>Savar Bus Stand, Savar<br>Dhaka-1340, Bangladesh</p>
              <p>Phone: +88 01681942299<br>Email: abduttawabcse@gmail.com</p>
              <br>
              <!--<h6>Follow Us</h6>
              <div class="social social-sm social-inverse">
                <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                <a class="social-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
              </div>-->
            </div>


            <div class="col-md-7">
              <!--<div class="h-400 rounded" data-provide="map" data-lat="23.847122" data-lng="90.257299" data-zoom="10" data-marker-lat="23.847122" data-marker-lng="90.257299" data-info="&lt;strong&gt;Our office&lt;/strong&gt;&lt;br&gt;3652 Seventh Avenue, Los Angeles, CA" data-style="light"></div>
           -->
           <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.1974327656376!2d90.25511031416306!3d23.847121984541804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDUwJzQ5LjYiTiA5MMKwMTUnMjYuMyJF!5e0!3m2!1sen!2sbd!4v1532668273267" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
           
            </div>

          </div>
        </div>
      </section>
    <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Contact form
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section">
        <div class="container">

          <div class="row">
            <form class="col-lg-6 mx-auto p-6 bg-gray rounded" action="#" method="POST" data-form="mailer">
              <div class="alert alert-success d-on-success">We received your message and will contact you back soon.</div>

              <div class="form-row">
                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="text" name="name" placeholder="Your Name">
                </div>

                <div class="form-group col-md-6">
                  <input class="form-control form-control-lg" type="email" name="email" placeholder="Your Email Address">
                </div>
              </div>


              <div class="form-group">
                <textarea class="form-control form-control-lg" rows="4" placeholder="Your Message" name="message"></textarea>
              </div>

              <div class="text-center">
                <button class="btn btn-lg btn-primary" type="submit">Submit Inquiry</button>
              </div>
            </form>
          </div>

        </div>
      </section>





     <?php include '../footer.php';?>