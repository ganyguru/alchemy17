<?php include 'header.php'; ?>
<style type="text/css">
	.wrapper
	{
		background: #303030 !important;
	}
</style>

  <ul id="events" class="side-nav" style="z-index: 99999;color: #000 !important;">
    <li style="height: 200px;"><div class="userView">
      <div class="background" style="height: 200px;">
        <center><img src="img/colorlogo.jpg" style="width: 200px;"></center>
      </div> 
    </div></li>    
    <li><a href="paper_presentation.php">Paper Presentation</a></li>
    <li><a href="poster_presentation.php">Poster Presentation</a></li>
    <li><a href="chem_quiz.php">Chem Quiz</a></li>
    <li><a href="C_H_I.php">Chemical hazard Investigation</a></li>
    <li><a href="chem_mazing.php">Chem-mazing Hunt</a></li>
    <li><a href="chemi_connexion.php">Chemi-Connexion</a></li>
    <li><a href="model_making.php">Model making</a></li>
    
  </ul>



  <ul id="workshops" class="side-nav" style="z-index: 99999;color: #000 !important;">
    <li style="height: 200px;"><div class="userView">
      <div class="background" style="height: 200px;">
        <center><img src="img/colorlogo.jpg" style="width: 200px;"></center>
      </div>    
    </div></li>    
    <li><a href="matlab.php">MATLAB</a></li>
    <li><a href="aspen_hysys.php">ASPEN HYSYS</a></li>
   
  </ul>



  <ul id="lectures" class="side-nav" style="z-index: 99999;color: #000 !important;">
    <li style="height: 200px;"><div class="userView">
      <div class="background" style="height: 200px;">
        <center><img src="img/colorlogo.jpg" style="width: 200px;"></center>
      </div>    
    </div></li>    
    <li><a href="#!">Coming Soon!</a></li>
   
  </ul>




<div class="startscreen">
<div class="logo">

<div class="wheel rotate">
</div>

<div class="kodu silping">
</div>



</div>


<div class="btncontainer">

<a href="coming_soon.php" target="_blank"><div class="menubtn"><span class="newbadge"></span>Panel Discussion</div></a> <div data-activates="events" class="menubtn eventsbtn" >Events</div>   <div data-activates="workshops" class="menubtn workshopsbtn">Workshops</div>    <div data-activates="lectures" class="menubtn lecturesbtn">Guest Lectures</div>
<br><br>
<a href="register.php" target="_blank"><div class="menubtn registerbtn">Register</div></a>

</div>


<span class="titledate">MARCH 16<sup>th</sup> - 18<sup>th</sup>, 2017</span>
</div>



<div class="trapicons">


				<a href="about.php" ><div class="sideabout trapicon">
					
					<span>About</span> <img src="img/about.png">

				</div></a>


				<a href="accomodation.php" ><div class="sideacco trapicon">
					<span>Accomodation</span> <img src="img/acco.png">
				</div></a>


				<a href="contact.php" ><div class="sidecontact trapicon">
					<span>Contacts</span> <img src="img/contacts.png">
				</div></a>

				<a href="coming_soon.php" ><div class="sidesch trapicon">
					<span>Schedule</span> <img src="img/schedule.png">
				</div></a>
					
				</div>

				<span class="footer">Made with <span style="color:red;">&hearts;</span> by <a href="https://www.facebook.com/GaneGuru" target="_blank" style="color: #ECC82C !important;">Ganesh Raghavendran</a></span>
</div>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
      	 $(".button-collapse").sideNav();
      	 $(".eventsbtn").sideNav();
      	 $(".workshopsbtn").sideNav();
      	 $(".lecturesbtn").sideNav();
      	 $(".seventsbtn").sideNav();
      </script>
</body>
</html>