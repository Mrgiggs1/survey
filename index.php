<?php

include "header.php";
?>
    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner header-text" id="top">
        <div class="Modern-Slider">
          <!-- Item -->
          <div class="item">
            <div class="img-fill">
                <img src="assets/images/slide-01.jpg" alt="">
                <div class="text-content">
                  <h3>Survey</h3>
                  <a href="fill_survey.php" class="main-stroked-button">Fill Survey</a>
                  <a href="view_survey.php" class="main-filled-button">View Survey</a>
                </div>
            </div>
          </div>
          <!-- // Item -->
          <!-- Item 
			<div class="item">
            <div class="img-fill">
                <img src="assets/images/slide-02.jpg" alt="">
                <div class="text-content">
                  <h3>Integrated Marketing Media</h3>
                  <h5>Best Digital Marketing</h5>
                  <a href="#" class="main-stroked-button">Read More</a>
                  <a href="#" class="main-filled-button">Take Action</a>
                </div>
            </div>
          </div>
		  
		  
		  
          <div class="item">
            <div class="img-fill">
                <img src="assets/images/slide-03.jpg" alt="">
                <div class="text-content">
                  <h3>High Performance</h3>
                  <h5>Robust and Speedy</h5>
                  <a href="#" class="main-stroked-button">Learn More</a>
                  <a href="#" class="main-filled-button">Get It Now</a>
                </div>
            </div>
          </div>
          -->
          <!-- // Item -->
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** --
    <!-- ***** Contact Us Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <?php
   
	include "footer.php"
   ?>
    
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>