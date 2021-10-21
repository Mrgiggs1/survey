<?php

include "header.php";
?>

        <div class="Modern-Slider">
            <div class="img-fill">
                <img src="assets/images/slide-03.jpg" style="width:140%" alt="">
                <div class="text-content" style="text-align: left;">
					<label> <h3 class="text-white">Take our Survey</h3></label><br>
					<label  > <h4 class="text-white">Personal Details:</h4></label>
					<form class="text-white">
						  <div class="form-group row">
							<label for="inputEmail3" class="col-sm-2 col-form-label">Surname</label>
							<div class="col-sm-6">
							  <input type="text" class="form-control" id="inputEmail3" placeholder="Last Name">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">First Names</label>
							<div class="col-sm-6">
							  <input type="text" class="form-control" id="inputPassword3" placeholder="First Name">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Contact Number</label>
							<div class="col-sm-6">
							  <input type="text" class="form-control" id="inputPassword3" placeholder="Phone Number">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Date Of Birth</label>
							<div class="col-sm-6">
							  <input type="date" class="form-control" max="2016-01-31" min="1940-01-31" id="inputPassword3" placeholder="Date">
							</div>
						  </div>
						  <div class="form-group row">
							<label for="inputPassword3" class="col-sm-2 col-form-label">Age</label>
							<div class="col-sm-2">
							  <input type="text" name="age" class="form-control" id="inputPassword3" placeholder="Age">
							</div>
						  </div>
						  
						  <br><br>
						  <div class="form-group" style="text-color: primary;">
							<label  > <p class="text-white">What is your favourite food? (You can choose more than 1 answer)</p></label>
						  </div>
						  <div class="form-group row">
							<div class="col-sm-2">
							  <div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck1">
									<label class="form-check-label" style="text-color: primary" value="pizza">
									  <p class="text-white">Pizza</p>
									</label>
								  </div>
							</div>
						  </div>
						  <div class="form-group row">
							<div class="col-sm-3">
							  <div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck1">
									<label class="form-check-label" style="text-color: primary" value="pizza">
									  <p class="text-white">Pasta</p>
									</label>
								  </div>
							</div>
						  </div>
						  <div class="form-group row">
							<div class="col-sm-3">
							  <div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck1">
									<label class="form-check-label" style="text-color: primary" value="pizza">
									  <p class="text-white">Pap and Wors</p>
									</label>
								  </div>
							</div>
						  </div>
								
						  <div class="form-group row">
							<div class="col-sm-3">
							  <div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck1">
									<label class="form-check-label" style="text-color: primary" value="pizza">
									  <p class="text-white">Chicken stir fry</p>
									</label>
								  </div>
							</div>
						  </div>
						  <div class="form-group row">
							<div class="col-sm-3">
							  <div class="form-check">
									<input class="form-check-input" type="checkbox" id="gridCheck1">
									<label class="form-check-label" style="text-color: primary" value="pizza">
									  <p class="text-white">Beef stir fry</p>
									</label>
								  </div>
							</div>
						  </div>
						  <div class="input-group mb-3">
							  <div class="input-group-prepend">
								<div class="input-group-text">
								  <input type="checkbox" aria-label="Checkbox for following text input">
								</div>
							  </div>
							  <input type="text" name="other" class="col-sm-2" placeholder="Other" aria-label="Text input with checkbox">
							</div>
							<br><br>
							 <div class="form-group" style="text-color: primary;">
							<label  > <p class="text-white">On Scale of 1 to 5 indicate whether you strongly agree or strongly Desagree</p></label>
						  </div>
							<table class="table">
							  <thead class="thead-dark">
								<tr style="text-align: center;">
								  <th scope="col"></th>
								  <th scope="col" style="text-align: center;">Strongly Agree<br>(1)</th>
								  <th scope="col" style="text-align: center;">Agree<br>(2)</th>
								  <th scope="col" style="text-align: center;">Neutral<br>(3)</th>
								  <th scope="col" style="text-align: center;">Disagree<br>(4)</th>
								  <th scope="col" style="text-align: center;">Strongly Disagree<br>(5)</th>
								</tr>
							  </thead>
							  <tbody style="text-align: center;" class="text-white">
								<tr>
								  <td>I like to eat Out</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="eat" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="eat">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="eat" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="eat">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="eat" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="eat">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="eat" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="eat">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="eat" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="eat">
											  </label>
											</div>
										</td>
								</tr>
								<tr>
								  <td>I like to watch Movies</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="movies" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="movies">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="movies" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="movies">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="movies" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="movies">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="movies" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="movies">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="movies" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="movies">
											  </label>
											</div>
										</td>
								</tr>
								<tr>
								  <td>I like to watch TV</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="tv" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="tv">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="tv" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="tv">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="tv" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="tv">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="tv" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="tv">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="tv" id="exampleRadios2" value="option2">
											  <label class="form-check-label" for="tv">
											  </label>
											</div>
										</td>
								</tr>
								<tr>
								  <td>I like to listen to the radio</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="fmradio" id="exampleRadios2" value="1">
											  <label class="form-check-label" for="fmradio">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="fmradio" id="exampleRadios2" value="2">
											  <label class="form-check-label" for="fmradio">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="fmradio" id="exampleRadios2" value="3">
											  <label class="form-check-label" for="fmradio">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="fmradio" id="exampleRadios2" value="4">
											  <label class="form-check-label" for="fmradio">
											  </label>
											</div>
										</td>
										<td>
											<div class="form-check">
											  <input class="form-check-input" type="radio" name="fmradio" id="exampleRadios2" value="5">
											  <label class="form-check-label" for="fmradio">
											  </label>
											</div>
										</td>
								</tr>
							  </tbody>
							</table>
						  
								  <div class="form-group row">
									<div class="col-sm-10">
									  <button type="submit" class="btn btn-primary">Submit</button>
									</div>
								  </div>
				</form>
                 
                </div>
            </div>
          <!-- // Item -->
        </div>
    
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