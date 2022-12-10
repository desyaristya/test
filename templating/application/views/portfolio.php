  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Student Biodata Details</h2>
          <ol>
            <li><a href="<?php echo base_url(); ?>Home">Home</a></li>
            <li>Student Biodata Details</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Portfolio Details Section ======= -->
    <section id="portfolio-details" class="portfolio-details">
      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-8">  
            <img src="<?php echo base_url(); ?>asset/assets/img/portfolio/portfolio.png" width="750" height="750" alt="Photo Mahasiswa">
          </div>

          <div class="col-lg-4">
            <div class="portfolio-info">
				<h3>Personal Information</h3>
              
				<ul>
				<li><strong>Name</strong>: <?php echo $mahasiswa[0]->name ?></li>
				<li><strong>Birth Place / Date</strong>: <?php echo $mahasiswa[0]->birth_place ?> / <?php echo changeBirthDateFormat($mahasiswa[0]->birth_date) ?></li>
				<li><strong>Gender</strong>: <?php echo $mahasiswa[0]->gender ?></li>
				<li><strong>Nationality</strong>: <?php echo $mahasiswa[0]->nationality ?></li>
				</ul>
			</div>
			<div class="portfolio-description">
				<h3>Education</h3>
				<p><b>University</b></p>
				<p><?php echo $mahasiswa[0]->university ?></p>
				<p>Faculty of <?php echo $mahasiswa[0]->faculty ?> - <?php echo $mahasiswa[0]->univ_major ?> Major</p>
				<p><b>Senior High School</b></p>
				<p><?php echo $mahasiswa[0]->shs ?></p>
				<p><?php echo $mahasiswa[0]->shs_major ?></p>
			
				<h3>Contact</h3>
				<p><strong>Email</strong>: <?php echo $mahasiswa[0]->email ?></p>
				<p><strong>Phone</strong>: <?php echo $mahasiswa[0]->phone ?></p>
				<p><strong>Address</strong>: <?php echo $mahasiswa[0]->address ?></p>

				<a href="<?php echo base_url(); ?>index.php/mahasiswa/update_data/<?php echo $mahasiswa[0]->npm ?>">
				<button type="button" class="btn btn-secondary">
				Update
				</button>
				</a>

				<a href="<?php echo base_url(); ?>index.php/mahasiswa/delete_data/<?php echo $mahasiswa[0]->npm ?>">
				<button type="button" class="btn btn-warning">
				Delete
				</button>
			</a>
			</div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Details Section -->

  </main><!-- End #main -->
