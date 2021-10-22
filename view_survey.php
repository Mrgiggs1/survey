<?php

include "header.php";
?>
        <div class="Modern-Slider">
            <div class="img-fill">
                <img src="assets/images/slide-02.jpg" style="height: 100%; width: 150%;" alt="">
                <div class="text-content" style="text-align: left;">
                  <h3>Survey Results</h3>
						<table class="table" border=0px">
							  <thead>
								<tr>
								  <th scope="col"></th>
								  <th scope="col">Content</th>
								  <th scope="col">Results</th>
								</tr>
							  </thead>
							  <tbody class="text-white">
								<tr>
								  <th >1</th>
								  <td>Total Number of Survey</td>
								  <?php
									$total = "select count(phone) as tot from user";
									$query = mysqli_query($conn,$total);
									$count = mysqli_fetch_assoc($query);?>
								  <td><?php echo $count['tot'] ?></td>
								</tr>
								<tr>
								  <th scope="row">2</th>
								  <td>Average age</td>
								  <td></td>
								</tr>
								<tr>
								  <th scope="row">3</th>
								  <td>Oldest Person who participated in survey</td>
								  <?php
									$total = "select max(age) as MaxAge from user";
									$query = mysqli_query($conn,$total);
									$count = mysqli_fetch_assoc($query);?>
								  <td><?php echo $count['MaxAge'] ?> years</td>
								</tr>
								<tr>
								  <th scope="row">4</th>
								  <td>Youngest Person who participated in survey</td>
								  <?php
									$total = "select min(age) as minAge from user";
									$query = mysqli_query($conn,$total);
									$count = mysqli_fetch_assoc($query);?>
								  <td><?php echo $count['minAge'] ?> years</td>
								</tr>
								<tr>
								<td> </td>
								</tr>
								<?php
									$totalNum = "select count(phoneID) as tot from fav_food";
									$all = mysqli_query($conn,$totalNum);
									$allTot = mysqli_fetch_assoc($all);?>
								<tr>
								  <th scope="row">1</th>
								  <td>Percentage Of People who like Pizza: </td>
								  <?php
									$total = "select count(Pizza) as totPiz from fav_food where pizza is not null";
									$query = mysqli_query($conn,$total);
									$count = mysqli_fetch_assoc($query);?>
								  <td><?php echo ($count['totPiz']/$allTot['tot'])*100 ?>%</td>
								</tr>
								<tr>
								  <th scope="row">2</th>
								  <td>Percentage of People who like Pasta</td>
								 <?php
									$tota = "select count(pasta) as totPas from fav_food where pasta is Not NULL";
									$query = mysqli_query($conn,$tota);
									$cou = mysqli_fetch_assoc($query);?>
								  <td><?php echo ($cou['totPas']/$allTot['tot'])*100 ?>%</td>
								</tr>
								<tr>
								  <th scope="row">3</th>
								  <td>Percentage of People who like Pap and Wors</td>
								  <?php
									$tota = "select count(pap_wors) as totPap from fav_food where pap_wors is Not NULL";
									$query = mysqli_query($conn,$tota);
									$check = mysqli_fetch_assoc($query);?>
								  <td><?php echo ($check['totPap']/$allTot['tot'])*100 ?>%</td>
								</tr>
								<tr>
								<td> </td>
								</tr>
								<tr>
								  <th scope="row">1</th>
								  <td>People like to eat out</td>
								  <td></td>
								</tr>
								<tr>
								  <th scope="row">2</th>
								  <td>People like to watch movies</td>
								  <td></td>
								</tr>
								<tr>
								  <th scope="row">3</th>
								  <td>People like to watch TV</td>
								  <td></td>
								</tr>
								<tr>
								  <th scope="row">4</th>
								  <td>People like to listen to the radio</td>
								  <td></td>
								</tr>
							  </tbody>
							</table>
                </div>
            </div>
	</div>
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