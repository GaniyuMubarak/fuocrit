<!--Include Area Start -->
<?php
// head area start  
  include_once 'includes/head.php';
  // head area end 

// Header Area Start 
  include_once 'includes/header.php';
  // Header Area End
?>
<!-- Include Area End -->

  <section class="heading-page header-text" id="top">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>University thematic areas of research</h6>
          <h2>Fountain University Centre for Research,  Innovation and Technology ( FUCRIT )</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
               <!--  <div class="thumb">
                  <div class="price">
                    <span>$14.00</span>
                  </div>
                  <div class="date">
                    <h6>Nov <span>12</span></h6>
                  </div>
                  
                </div> -->
                <div class="down-content">
                  <a href="meeting-details.html"><h4>University thematic areas of research</h4></a>
                  <p>Fountain University Centre for Research, Innovation and Technology (FUCRIT)</p>
                  
                  <div class="row">
                    <div class="col-lg-6">
                        <ul style="list-style-type: circle !important; text-align: justify; font-size: 15px;">
                          <li class="mb-3">• Molecular Biology and Genetic Diversity </li>

                          <li class="mb-3">• Toxicology and Reproductive Medicine</li>

                          <li class="mb-3">• Cellular and Infectious Disease</li>

                          <li class="mb-3">• Bioinformatic </li>

                          <li class="mb-3">• Applied Microbiology and Biotechnology Group</li>

                          <li class="mb-3">• Synthesis and Coordination Group</li>

                          <li class="mb-3">• Computation Chemistry and Drug Design Group </li>

                          <li class="mb-3">• Information Technology Research Group</li>

                          <li class="mb-3">• Neglected Tropical Disease Group</li>

                          <li class="mb-3">• Public Health and Parasitology Group </li>
                        </ul>
                      </div>
                    
                    <div class="col-lg-6">
                        <ul style="list-style-type: circle !important; text-align: justify; font-size: 15px;">
                          <li class="mb-3">• Softtware Development and Control Research Group</li>

                          <li class="mb-3">• Material Research Group</li>

                          <li class="mb-3">• Radio Propagation Research Group</li>

                          <li class="mb-3">• Energy Storage Research Group</li>

                          <li class="mb-3">• Economic System and Modeling Research Group</li>

                          <li class="mb-3">• Business Risk and Finance Research Group</li>

                          <li class="mb-3">• Digital Humanity Research Group</li>

                          <li class="mb-3">• Neurobiology Research Group </li>
                        </ul>

                    </div>
                  </div>
                
                </div>
              </div>
            </div>
            <?php
            include_once 'includes/backhome.php';
           ?>
          </div>
        </div>
      </div>
    </div>
    <?php
    include_once 'includes/footer.php';
    ?>
  </section>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/lightbox.js"></script>
    <script src="assets/js/tabs.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/slick-slider.js"></script>
    <script src="assets/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .responsive-menu, .scroll-to-section').on('click', 'a', function (e) {
          e.preventDefault();
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>


  </body>

</html>
