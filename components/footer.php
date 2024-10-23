    <footer class="white_text" data-aos="fade-in" data-aos-duration="1500">
        <div class="footer_overlay"> <img src="images/overlay-bg1.svg" alt="img"> </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="logo_side">
                            <div class="logo">
                                <a href="#">
                                    <img src="images/logo-light.svg" width="250" alt="Logo">
                                </a>
                            </div>
                            <ul class="contact_info">
                              <li><a href="mailto:hello@quickpocket.com">hello@quickpocket.com</a></li>
                              <li><a href="tel:+2348061360063">+234 806-136-0063</a></li>
                            </ul>
                            <ul class="social_media">
                                <li><a href="#"><i class="icofont-facebook"></i></a></li>
                                <li><a href="#"><i class="icofont-twitter"></i></a></li>
                                <li><a href="#"><i class="icofont-instagram"></i></a></li>
                                <li><a href="#"><i class="icofont-pinterest"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer_bottom">
                <div class="container">
                <div class="ft_inner">
                    <div class="copy_text">
                      <p>&copy; <script>document.write(new Date().getFullYear());</script> Quick Pocket&reg; All Rights Reserved.</p>
                    </div>
                    <ul class="links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About us</a></li>
                    <li><a href="pricing.html">Pricing</a></li>
                    <li><a href="blog-list.html">Blog</a></li>
                    <li><a href="contact.html">Contact us</a></li>
                    </ul>
                    <div class="design_by">
                      <p>Crafted by <a href="https://themeforest.net/user/kalanidhithemes" target="blank">Kalanidhi Themes</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    

    <!-- Video Model Start -->
    <div class="modal fade youtube-video" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <button id="close-video" type="button" class="button btn btn-default text-right" data-dismiss="modal">
            <i class="icofont-close-line-circled"></i>
          </button>
          <div class="modal-body">
            <div id="video-container" class="video-container">
              <iframe id="youtubevideo" width="640" height="360" allowfullscreen></iframe>
            </div>
          </div>
          <div class="modal-footer">
          </div>
        </div>
      </div>
    </div>
    <!-- Video Model End -->
  </div>
  <!-- Page-wrapper-End -->

  <!-- Jquery-js-Link -->
  <script src="js/jquery.js"></script>
  <!-- owl-js-Link -->
  <script src="js/owl.carousel.min.js"></script>
  <!-- bootstrap-js-Link -->
  <script src="js/bootstrap.min.js"></script>
  <!-- aos-js-Link -->
  <script src="js/aos.js"></script>
  <!-- Typed Js Cdn -->
  <script src='js/typed.min.js'></script>
  <!-- main-js-Link -->
  <script src="js/main.js"></script>

  <script>
    $("#typed").typed({
      strings: ["Type Writing Text", "Auto Type Text", "Add any text you like here."],
      typeSpeed: 100,
      startDelay: 0,
      backSpeed: 60,
      backDelay: 2000,
      loop: true,
      cursorChar: "|",
      contentType: 'html'
    });

    // Fixed Discount Dish JS
    $(document).ready(function () {
      let cardBlock = document.querySelectorAll('.task_block');
      let topStyle = 120;

      cardBlock.forEach((card) => {
        card.style.top = `${topStyle}px`;
        topStyle += 30;
      })

    }
    );

  </script>

</body>

</html>