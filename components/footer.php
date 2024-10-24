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
                  <li><a href="terms">Terms of use</a></li>
                  <li><a href="privacy">Privay policy</a></li>
                  <li><a href="contact">Contact us</a></li>
                </ul>
              </div>
            </div>
          </div>
      </footer>

    </div>


    
  <script src="js/jquery.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/aos.js"></script>
  <script src='js/typed.min.js'></script>
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