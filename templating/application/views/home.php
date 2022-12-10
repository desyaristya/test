<!-- ======= Welcome ======= -->
  <section id="hero" class="d-flex align-items-center justify-content-center">
    <div class="container" data-aos="fade-up">

      <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
        <div class="col-xl-6 col-lg-8">
          <h1>Welcome to <br>UPN Veteran Jatim<br>Official Website<span>.</span></h1>
          <h2>Universitas Unggul Berkarakter Bela Negara</h2>
        </div>
      </div>

    </div>
  </section><!-- End Welcome -->

  <main id="main">
<!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Civitas</h2>
          <p>Check our Students</p>
        </div>


        <div class="row">
		  <?php foreach ($mahasiswa as $mhs) : ?>
          <div class="col-lg-4 col-md-6 align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4><a href="<?php echo base_url(); ?>Mahasiswa/user_portfolio/<?php echo $mhs->npm;?>"><?php echo $mhs->name; ?></a></h4>
              <p><b><?php echo $mhs->npm; ?></b></p>
			  <p>Faculty of <?php echo $mhs->faculty; ?></p>
			  <p><?php echo $mhs->univ_major; ?> Major</p>
            </div>
          </div>
		  <?php endforeach; ?>
        </div>

      </div>
    </section><!-- End Services Section -->

	 <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
	    <div class="section-title">
          <h2>About</h2>
          <p>Visi & Misi</p>
        </div>
	    
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
            <img src="<?php echo base_url(); ?>asset/assets/img/about.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content" data-aos="fade-right" data-aos-delay="100">
            <h3>Visi.</h3>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
			<h3>Misi.</h3>
            <ul>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="ri-check-double-line"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="ri-check-double-line"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

  </main><!-- End #main -->

