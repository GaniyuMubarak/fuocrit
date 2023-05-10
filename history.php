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
          <h6>History</h6>
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
                  <a href="meeting-details.html"><h4>HISTORY</h4></a>
                  <p>Fountain University Centre for Research, Innovation and Technology (FUCRIT)</p>
                  <p class="description">
                    Fountain University Centre for Research, Innovation and Technology (FUCRIT) was established in 2014 with the core mandate to pursue the implementation of the university's research policy and facilitate the research efforts of the university which are geared towards fostering a remarkable culture of research excellence at the university. It is the directoriate that focuses on one of tripartite role of the university (reaching, research and community service). Realizing that the remaining roles could not be effectively delivered if the research is lacking, our slogan is to conduct quality research, give quality teaching and create quality environment. 
                    <br> <br>
                    
                    The Directorate of Fountain University Research Innovation and Technology (FUCRIT) is a Unit under the Office of the Vice Chancellor.
                    Core mandate of the Directorate is to pursue the implementation of the University Research Policy and facilitate the research efforts of the University which is geared towards fostering a culture of research excellence at the University. To achieve the goal of the University in Research, the following activities coordinated by the Directorate are being undertaken by the University.

                  </p>
                  <div class="row">
                    <div class="col-lg-6">
                        <ul style="list-style-type: circle !important; text-align: justify; font-size: 15px;">
                          <li class="mb-3">• Organising regular capacity building workshops for staff on research writing and grant seeking to enable them compete for international research grants.</li>

                          <li class="mb-3">• Exploring natural benefits lying in the UNESCO heritage site of Osun Groove Osogbo.</li>

                          <li class="mb-3">• Encouraging academic staff to undertake cutting edge research to enhance the ranking, rating and visibility of the University as a centre of excellence in research</li>

                          <li class="mb-3">• Strengthening the University's Center for Research, Innovation and Technology to promote and coordinate research activities in the University.</li>

                          <li class="mb-3">•  Consolidating the University Research Ethics Committee under FUCRIT to coordinate and regulate all matters pertaining to research ethics and integrity in the University</li>

                          <li class="mb-3">• Publishing research findings of academic staff annually to attract funding from various sources.</li>

                          <li class="mb-3">• Strengthen Postgraduate training to enhance the development of a research culture </li>

                          <li class="mb-3">• Nominating and rewarding staff whose research efforts attracts huge funding and those with publications in high ranking journals for award annually.</li>
                        </ul>
                      </div>
                    
                    <div class="col-lg-6">
                        <ul style="list-style-type: circle !important; text-align: justify; font-size: 15px;">
                          <li class="mb-3">• Encouraging academic staff to engage in result-oriented research activities in their areas of specialization not limited to those in line with the University’s priorities, but are also relevant to the needs of the immediate community, Osun State, Nigeria and the rest of the world.</li>

                          <li class="mb-3">• Providing enabling environment for cutting edge research through the provision of research grants and necessary facilities such as books, journals, laboratories, workshops, studios and ICT equipment.</li>

                          <li class="mb-3">•  Attracting and retaining seasoned research personnel to enhance the conduct of genuine problem solving research.</li>

                          <li class="mb-3">• Initiating and promoting research linkages with reputable institutions and agencies including industry, community, public service and professional organizations within and outside Nigeria.</li>

                          <li class="mb-3">• Implementing the existing policy on promotion as it affects research productivity of staff.</li>

                          <li class="mb-3">• Sourcing international placement for academics to gain more experience from advanced laboratories and colleagues.</li>

                          <li class="mb-3">• Supporting staff attendance at short training courses and learned conferences.</li>

                          <li class="mb-3">• Encouraging academic departments to host learned conferences on campus.</li>
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
