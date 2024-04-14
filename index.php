<?php include 'includes/connection.php';?>
<?php 
// include 'includes/header.php';
?>
<?php 
include 'navbar.php';
?>


<item rel="stylesheet" type="text/css" href="styles.css" media="all" />
    <item rel="stylesheet" type="text/css" href="demo.css" media="all" />
    <item href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<!-- chatbot -->
<script src="https://cdn.botpress.cloud/webchat/v1/inject.js"></script>
<script src="https://mediafiles.botpress.cloud/797fde94-b406-4bbc-b043-b7225fcc462c/webchat/config.js" defer></script>



   <!-- jQuery -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <!-- FlexSlider -->
    <script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
<script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>

<link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
"></script>
<link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

<!-- nav  -->
<link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <title>NoteSpace!</title>
    
    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-grad-school.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/lightbox.css">



<!-- header-->


  <!-- ***** Main Banner Area Start ***** -->
  <section  class="section main-banner" id="section1" data-section="">
      <video autoplay muted loop id="bg-video">
          <source src="assets/images/course-video.mp4" type="video/mp4" />
      </video>

      <div class="video-overlay header-text">
          <div class="caption">
              <h6>A study material sharing platform</h6>
              <h2 style="text-transform: none;"><em>Note</em>Space!</h2>
        
              
              <div class="main-button">
                <a href="signup.php" class="btn hero-btn" data-animation="fadeInLeft" data-delay="0.7s">Join for Free</a>
              </div>
              
          </div>
      </div>


      
  </section>

 
  <!-- ***** Main Banner Area End ***** -->


  <section class="features">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-12">
          <div class="features-post">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-pencil"></i>Study effectively.</h4>
              </div>
              <div class="content-hide">
                <p>Students share study materials, organized either by course or by specific textbooks they're using for study.</p>
                <p class="hidden-sm">Due to the imperfections in your planning, it's essential to have the flexibility to study at any time and in any place to ensure academic success.</p>
                <div class="scroll-to-section"><a href="#section2">More Info.</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post second-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-graduation-cap"></i>Study flexibly.</h4>
              </div>
              <div class="content-hide">
                <p>Due to the imperfections in your planning, it's essential to have the flexibility to study at any time and in any place to ensure academic success.</p>
                <p class="hidden-sm">Due to the imperfections in your planning, it's essential to have the flexibility to study at any time and in any place to ensure academic success.</p>
                <div class="scroll-to-section"><a href="#section3">Details</a></div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-12">
          <div class="features-post third-features">
            <div class="features-content">
              <div class="content-show">
                <h4><i class="fa fa-book"></i>Practice perfect.</h4>
              </div>
              <div class="content-hide">
                <p>We routinely develop practice sets for each document, comprising a definition list, a set of flashcards, and a series of practice questions to reinforce learning and comprehension.</p>
                <p class="hidden-sm">We routinely develop practice sets for each document, comprising a definition list, a set of flashcards, and a series of practice questions to reinforce learning and comprehension.</p>
                <div class="scroll-to-section"><a href="#section4">Read More</a></div>
            </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="section4" class="section why-us" data-section="#section4">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Why choose NoteSpace! ?</h2>
          </div>
        </div>
        <div class="col-md-12">
          <div id='tabs'>
            <ul>
              <li><a href='#tabs-1'>What ?</a></li>
              <li><a href='#tabs-2'>Why ?</a></li>
              <li><a href='#tabs-3'>How ?</a></li>
            </ul>
            <section class='tabs-content'>
              <article id='tabs-1'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-01.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Best Education</h4>
                    <p>NoteSpace! is a open and free-for-all study material sharing platform. The students can upload, download and share any type of study material with their friends. Teachers can also share study material with students.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-2'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-02.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Top Level</h4>
                    <p>When there are 50+ colleges affiliated to a single university having the same curriculum but lack the infrastructure for sharing study material, students are left to their own to collect and assemble notes. Students belonging to a particular year collate notes and sit for the exams. Post exams the notes are either discarded or are passed on to some relative/friend but never uploaded to a common platform.</p> 
                    <p>As a result, every year the same story is repeated - by a new set of students. This resulted in a lot of wastage of time, paper (photocopied notes), money, and energy.

Hence, NoteSpace! - a study material sharing platform where students can just upload whatever study material they have and create a free-for-all open library.</p>
                  </div>
                </div>
              </article>
              <article id='tabs-3'>
                <div class="row">
                  <div class="col-md-6">
                    <img src="assets/images/choose-us-image-03.png" alt="">
                  </div>
                  <div class="col-md-6">
                    <h4>Quality Meeting</h4>
                    <p>Even though NoteSpace! is open, one cannot upload irrelevant stuff. There is a layer of NotesHub admins that accept/reject every single contribution by the students. Once the admin accepts a contribution, the study material is visible to everyone.</p>
                  </div>
                </div>
              </article>
            </section>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="section2" class="section contact" data-section="#section2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="section-heading">
            <h2>Let’s Keep In Touch</h2>
          </div>
        </div>
        <div class="col-md-6">
      
<section class="email-map-section">
    <div class="container">
        <div class="row">
            <!-- Email Button Column -->
            <div class="col-md-6">
                <div class="email-button-container">
                    <a href="mailto:your-email@example.com" class="email-button">Send Email</a>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
  /* Style for the email button container */
  .email-button-container {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100%; /* Adjust based on your layout */
  }
  
  /* Style the email button */
  .email-button {
      display: inline-block;
      padding: 15px 30px; /* Increase padding to increase size */
      background-color: #007BFF; /* Blue background */
      color: #fff; /* White text */
      text-decoration: none;
      border-radius: 5px;
      transition: background-color 0.3s ease;
      font-size: 18px; /* Increase font size */
      width: auto; /* Adjust width as needed */
  }
  
  /* Hover effect for the email button */
  .email-button:hover {
      background-color: #0056b3; /* Darker blue on hover */
  }
</style>
  
  
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2024 by NoteSpace! 
          
           | Design: <a href="https://vr1235space.netlify.app/
" rel="sponsored" target="_parent">Vishal Rajput</a></p>
        </div>

      </div>
    </div>
  </footer>

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

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>








</body>
</html>









































<?php 
// include 'includes/footer.php';
?>

        