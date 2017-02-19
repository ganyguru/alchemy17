<?php include 'header.php'; ?>
  <div class="backframe"></div>
  

<div class="row">
        <div class="col s6 offset-s3">
          <div class="card white darken-1">
            <div class="card-content black-text" style="padding-top: 0;padding-bottom: 0;">
            <center><div class="row">

                  <div class="col s2" style="height: 100px;">
                  <img src="img/colorlogo.jpg" width="100px">
                  </div>
              <div class="col s10" style="line-height: 100px;">
              <span class="card-title" style="display: inline-block;">Chem-mazing Hunt</span></div>
              </div></center>
            </div>
            
          </div>
        </div>
      </div>
            
<div class="container">
        <h4>Description</h4>
<p>In the past, treasures have always been associated with gold and precious stones. For all those Chemical Engineering enthusiasts with a knack for puzzle-solving, here is a golden opportunity. This Alchemy, galvanize your grey cells, swim through the intricate concepts of Chemical Engineering as you solve cryptic clues and unlock the prized treasure.</p>
<h4>Rules and Format</h4>
<p>On spot registration <br><br>
Participants can participate with a maximum of 3 or 4 members in a team.<br><br>
Includes tech based clues, focusing on basic chemical engineering concepts. <br><br>
Only 1st position is awarded, based on how fast the team finishes the hunt.<br><br>
Judges decision is final.</p>

<h4>Prizes</h4>
<p>First – Rs 4000<br></p>
<h4>Contact</h4>
<p>Lavanya: +91 80562 09684<br>Shubham: +91 96296 31689</p>
      </div>

<center><a href="#"><div class="menubtn registerbtn" disabled>Coming Soon</div></a></center>
<br><br>
<footer class="page-footer" style="padding-top:0px;background-color: transparent;">
         
          <div class="footer-copyright">
            <div class="container" style="color:#000">
            <center>Made with <span style="color:red;">&hearts;</span> by <a href="https://www.facebook.com/GaneGuru" target="_blank" style="color: #ECC82C !important;">Ganesh Raghavendran</a>
            </div>
          </div>
        </footer>
</div>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
      	 $(".button-collapse").sideNav();
      	 $(".eventsbtn").sideNav();
      	 $(".seventsbtn").sideNav();

          $("#register").click(function(){

if ($("#g-recaptcha-response").val()) {

     $.post("alcid.php",
    {
        email:$("#emailid").val(),
        captcha:$("#g-recaptcha-response").val()
    },
    function(data, status){
        alert(data);
        grecaptcha.reset();
    });
}
else
alert("Enter Captcha");

});

      </script>
</body>
</html>