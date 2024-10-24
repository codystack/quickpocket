<?php
include "./components/header.php";
include "./components/navbar.php";
?>

  <div class="page_wrapper">
    <section class="banner_section">
        <div class='ripple-background'>
          <div class='circle xxlarge shade1'></div>
          <div class='circle xlarge shade2'></div>
          <div class='circle large shade3'></div>
          <div class='circle mediun shade4'></div>
          <div class='circle small shade5'></div>
        </div>
      
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-12" data-aos="fade-up" data-aos-duration="1500">
            <div class="banner_text mb-4">
              <h1>Quick Pocket has you <span>covered.</span></h1>
              <p>Your financial solution is just a tap away. <br>Download Quick Pocket today and access support whenever you need them.</p>
            </div>

            <ul class="app_btn">
              <li>
                <a href="#">
                  <img class="blue_img" src="images/googleplay.png" alt="image">
                </a>
              </li>
              <li>
                <a href="#">
                  <img class="blue_img" src="images/appstorebtn.png" alt="image">
                </a>
              </li>
            </ul>
          </div>

          <div class="col-lg-6 col-md-12" >
            <div class="banner_slider">
              <div class="left_icon">
                <img src="images/smallStar.png" alt="image">
              </div>
              <div class="right_icon">
                <img src="images/bigstar.png" alt="image">
              </div>
              <div id="frmae_slider" class="owl-carousel owl-theme">
                <div class="item">
                  <div class="slider_img">
                    <img src="images/bannerScreen2.png" alt="image">
                  </div>
                </div>
                <div class="item">
                  <div class="slider_img">
                    <img src="images/bannerScreen1.png" alt="image">
                  </div>
                </div>
                <div class="item">
                  <div class="slider_img">
                    <img src="images/bannerScreen3.png" alt="image">
                  </div>
                </div>
              </div>
              <div class="slider_frame">
                <img src="images/iphonescren.png" alt="image">
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    <section class="how_it_section ">
      <div class="how_it_inner" data-aos="fade-in" data-aos-duration="1500">

        <div class="container">
          <div class="section_title" data-aos="fade-up" data-aos-duration="1500">
            <span class="title_badge">Quick & easy</span>
            <h2>How it works in 3 steps</h2>
          </div>
          <div class="row">
            <div class="col-md-4">
              <div class="steps_block step_border" data-aos="fade-up" data-aos-duration="1500">
                <div class="steps">
                  <div class="icon">
                    <img src="images/howstep1.png" alt="image">
                  </div>
                  <div class="text">
                    <h3>Download app</h3>
                    <ul class="social">
                      <li><a href="#"><i class="icofont-brand-android-robot"></i></a></li>
                      <li><a href="#"><i class="icofont-brand-apple"></i></a></li>
                    </ul>
                    <p>Download App. It will work for <br> Android & IOS</p>
                  </div>
                </div>
                <span class="step">01</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="steps_block step_border" data-aos="fade-up" data-aos-duration="1500">
                <div class="steps">
                  <div class="icon">
                    <img src="images/howstep2.png" alt="image">
                  </div>
                  <div class="text">
                    <h3>Create account</h3>
                    <span class="tag_text">Free account creation</span>
                    <p>Our app is FREE, create account and start scheduling appointments.</p>
                  </div>
                </div>
                <span class="step">02</span>
              </div>
            </div>
            <div class="col-md-4">
              <div class="steps_block" data-aos="fade-up" data-aos-duration="1500">
                <div class="steps">
                  <div class="icon">
                    <img src="images/howstep3.png" alt="image">
                  </div>
                  <div class="text">
                    <h3>Enjoy the app</h3>
                    <span class="tag_text">Read FAQs for any query</span>
                    <p>Enjoy our app & share <br> most amazing app experience</p>
                  </div>
                </div>
                <span class="step">03</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <?php include "./components/slidetext.php"; ?>
    
    <?php include "./components/cta.php"; ?>

<?php include "./components/footer.php"; ?>