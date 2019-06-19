<?php include '../header.php';?>

<script>
  document.getElementById("myNavigation").classList.remove('navbar-light');
  document.getElementById("myNavigation").classList.add('navbar-dark');


</script>
<!-- Header -->
    <header class="header">
      <div class="container">
        <div class="row align-items-center h-100">

          <div class="col-md-7 mx-auto">
            <h1>About us</h1>
            <p class="lead-3">
             Our company was founded in 2018 with a mission to create smart softwares for great startups. We can combine beautiful, modern designs with clean, functional and high-performance code to produce stunning websites. And best of all, we are super passionate about our work. Thought does cognitive into follow and rationale annoyed.
             </p>
          </div>

        </div>
      </div>
    </header><!-- /.header -->

    <!-- Main Content -->
    <main class="main-content">



      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Portfolio
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section overflow-hidden">
        <div class="container">

          <div data-provide="shuffle">
            <ul class="nav nav-center nav-bold nav-uppercase nav-slash mb-7" data-shuffle="filter">
              <li class="nav-item">
                <a class="nav-link active" href="#" data-shuffle="button">All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sms.php" data-shuffle="button" data-group="sms">School Management System (SMS)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="dms.php" data-shuffle="button" data-group="dms">Dealer Management Software (DMS)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="pos.php" data-shuffle="button" data-group="pos">Point on Sale (POS)</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="hms.php" data-shuffle="button" data-group="hms">Hospital Management System (HMS)</a>
              </li>
			  <li class="nav-item">
                <a class="nav-link" href="umr.php" data-shuffle="button" data-group="umr">Universal Medical Informatics(UMR)</a>
              </li>
            </ul>


            <div class="row gap-y gap-2" data-shuffle="list">

              <div class="col-6 col-lg-3" data-shuffle="item" data-groups="sms">
                <a class="portfolio-1" href="sms.php">
                  <img src="../assets/img/portfolio/demo-sms.jpg" alt="screenshot">
                  <div class="portfolio-detail">
                    <h5>School Management System (SMS)</h5>
                    <p>SMS</p>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3" data-shuffle="item" data-groups="dms">
                <a class="portfolio-1" href="dms.php">
                  <img src="../assets/img/portfolio/demo-dms.jpg" alt="screenshot">
                  <div class="portfolio-detail">
                    <h5>Dealer Management Software(DMS)</h5>
                    <p>DMS</p>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3" data-shuffle="item" data-groups="pos">
                <a class="portfolio-1" href="pos.php">
                  <img src="../assets/img/portfolio/demo-pos.jpg" alt="screenshot">
                  <div class="portfolio-detail">
                    <h5>Point On Sale(POS)</h5>
                    <p>POS</p>
                  </div>
                </a>
              </div>


              <div class="col-6 col-lg-3" data-shuffle="item" data-groups="hms">
                <a class="portfolio-1" href="hms.php">
                  <img src="../assets/img/portfolio/demo-hms.jpg" alt="screenshot">
                  <div class="portfolio-detail">
                    <h5>Hospital Management System(HMS)</h5>
                    <p>HMS</p>
                  </div>
                </a>
              </div>
                 
				  <div class="col-6 col-lg-3" data-shuffle="item" data-groups="umr">
                <a class="portfolio-1" href="umr.php">
                  <img src="../assets/img/portfolio/demo-umr.jpg" alt="screenshot">
                  <div class="portfolio-detail">
                    <h5>Universal Medical Informatics(UMR)</h5>
                    <p>UMR</p>
                  </div>
                </a>
              </div>

              

            </div>
          </div>


        </div>
      </section>



      <!--
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      | Get a Quote
      |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
      !-->
      <section class="section bg-gray text-center">

        <h2 class="mb-6">Get a Quote</h2>
        <p class="lead text-muted">We’ve completed more than 100+ project for our amazing clients, if you interested?</p>
        <hr class="w-50px">
        <a class="btn btn-lg btn-round btn-success" href="#">Design your site now</a>

      </section>


    </main><!-- /.main-content -->


    

    <!-- Scripts -->
    <script src="../assets/js/page.min.js"></script>
    <script src="../assets/js/script.js"></script>

  
 <?php include '../footer.php';?>
