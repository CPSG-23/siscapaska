<?= $this->extend('layouts/front_layout') ?>
<?= $this->section('content') ?>
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12 col-sm-8 col-lg-6">
            <!-- Section Heading-->
            <div class="section_heading text-center wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <h3>CPSG-23 <span> GROUP</span></h3>
              <div class="line"></div>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_profile wow fadeInUp" data-wow-delay="0.2s" style="visibility: visible; animation-delay: 0.2s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="<?=base_url('public/assets/about_image/yahya.png')?>" height='315px' alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="https://facebook.com/yahya.nobericcirebon" target='_blank'><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_details_info">
                <h6>Moh. Yahya</h6>
                <p class="designation">F2370A359 - STMIK IKMI CIREBON</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_profile wow fadeInUp" data-wow-delay="0.3s" style="visibility: visible; animation-delay: 0.3s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="<?=base_url('public/assets/about_image/ikhlashulm.png')?>" height='315px' alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_details_info">
                <h6>Ikhlashul Muslimin</h6>
                <p class="designation">F2152A119 - Sekolah Tinggi Teknologi Bandung</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_profile wow fadeInUp" data-wow-delay="0.4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="<?=base_url('public/assets/about_image/rama.png')?>" height='315px'alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-twitter"></i></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_details_info">
                <h6>Rama Aditya Saputra</h6>
                <p class="designation">F2111C073 - Institut Teknologi Adhi Tama Surabaya</p>
              </div>
            </div>
          </div>
          <!-- Single Advisor-->
          <div class="col-12 col-sm-6 col-lg-3">
            <div class="single_profile wow fadeInUp" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeInUp;">
              <!-- Team Thumb-->
              <div class="advisor_thumb"><img src="<?=base_url('public/assets/about_image/fricylia.png')?>" height='315px' alt="">
                <!-- Social Info-->
                <div class="social-info"><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><span class="fa fa-twitter"></span></a><a href="#"><i class="fa fa-linkedin"></i></a></div>
              </div>
              <!-- Team Details-->
              <div class="single_details_info">
                <h6>Fricylia Rusdiana Putri</h6>
                <p class="designation">F7314A306 - Universitas Singaperbangsa Karawang</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <?= $this->endSection() ?>