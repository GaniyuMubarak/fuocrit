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
          <h6>Reporting</h6>
          <h2>Fountain University Centre for Research,  Innovation and Technology ( FUCRIT )</h2>
        </div>
      </div>
    </div>
  </section>


  <section class="apply-now" id="apply">
    <div class="container">
      <div class="row">
        <div class="col-lg-7 align-self-center">
          <div class="row">

            <div class="col-lg-12">
              <div class="item">
                <h3>Reporting</h3>
                <p> <i> The Committee regularly, but at least once a year, reports to the Academic Board on its operation and activities. The report includes:  </i>
                  </p>
                  <p> • A summary of the work it performed to fully discharge its responsibilities during the preceding year;  </p>
                  <p> • Details of meetings, including the number of meetings held during the relevant period, and the number of meetings each member attended</p>
                  <p> • The Committee may, at any time, report to the Academic Board any other matter it deems of sufficient importance to do so. Administrative Arrangements Meetings and Planning   </p>
                  <p> • The Committee shall meet up to six times per year on dates determined by the Committee. </p>
                  <p> • A forward meeting plan, including meeting dates, location and agenda items, is agreed by the Committee each year. The forward meeting plan covers all its responsibilities, as detailed in this Charter. </p>
                  <p> • The Director is required to convene a meeting subject to the Chair assenting to it, and  at least 50% of the Committee members shown their readiness to attend.  </p>
                  <p> • The Director convenes and presides at all meetings of the Committee at which they are present.  </p>
                  <p> • The Director has a deliberative and a casting vote on all matters before a meeting of the Committee. When the Director is unable to preside at a meeting, the one of Reseach Managers presides. </p>
                  <p> • The procedure at meetings of the Committee is determined by the person presiding over the meeting, taking into account the advice of the Committee members.  </p>
                  <p> • All matters relating to individual persons, including appointments, enrolment, candidacy for degrees, personal details, performance and conduct are treated as confidential. Confidential items are so marked on the agenda and taken before any observers are admitted to the meeting. At the beginning of the meeting, members of the Committee may ask that other particular items on the agenda be treated as confidential and the Committee will determine this. During the course of the meeting, the Director may declare a particular item to be confidential and observers are asked to leave until consideration of that item has finished.  </p>

                  
              </div>
            </div>
          </div>

        </div>
        <div class="col-lg-5">
          <div class="accordions is-first-expanded">
            <article class="accordion">
                <div class="accordion-head">
                    <span>Attendance at Meetings and Quorums </span>
                    <span class="icon">
                        <i class="icon fa fa-chevron-right"></i>
                    </span>
                </div>

                <div class="accordion-body">
                    <div class="content">
                        <p> A quorum consists of at least 50 per cent of Committee members who hold office for the time being. </p>
                        <br> <p> Meetings are held in person, and a Committee member may only participate in a meeting by telephone or videoconference with the prior consent of the Director. </p>
                        <br> <p> An appointed member of a Committee who is unable to attend a meeting of the Committee may nominate an alternate from the same category of membership to attend the meeting on their behalf. An alternate must be a person who would otherwise be eligible to be chosen as a member of the Committee. </p>
                        <br> <p> Meetings of the Committee are open to members of the FUO Council, academic and professional staff of University and to undergraduate and postgraduate students of the University, as observers. Observers register their intention to attend a meeting with the Committee Secretary in advance of the meeting; and are admitted by the Committee Secretary on a "first come first served" basis and within the constraints of available space in the meeting venue.  </p>
                    </div>
                </div>
             
            </article>
          </div>
        </div>

      </div>
    </div>
  </section>
  <?php
    include_once 'includes/footer.php';
  ?>


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
