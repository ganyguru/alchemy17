<?php include 'header.php'; ?>

  <div class="backframe"></div>
 


<div class="row">
        <div class="col s6 offset-s3">
          <div class="card white darken-1">
            <div class="card-content black-text" style="padding-top: 0;padding-bottom: 0;">
            <center><div class="row">

                  <div class="col s2" style="height: 100px;">
                  <a href="index.php"><img src="img/colorlogo.jpg" width="100px"></a>
                  </div>
              <div class="col s10" style="line-height: 100px;">
              <span class="card-title" style="display: inline-block;">Model Making</span></div>
              </div></center>
            </div>
            
          </div>
        </div>
      </div>
            
<div class="container">
        <h4>Description</h4>
<p>The point of having an open exhibition is that there are no boundaries for any team, they can present a model which can help the community in any way possible but in relation to chemical engineering<br>
Ever wondered how ideas that appear totally impractical become the basis of incredible research works? Have you ever been provoked to wonder how air and water purifiers work? Have you ever given a thought to how non-conventional sources of energy are replacing the conventional ones in a more efficient and environment-friendly way?<br>
A tangible platform to exhibit your model, projects and experiments to demonstrate the uniqueness and advancements in chemical engineering.</p>
<h4>Rules and Format</h4>
<p>All students (UG/PG) are eligible to take part in this event<br><br>
Contestants can participate either as individual or in teams with a maximum of 3 team members<br><br>
Submit the details of your model along with a brief description in word/PDF format<br><br>
Showcase your model during ALCHEMY in front of experienced panel of judges</p>

<h4>Prizes</h4>
<p>First – Rs 4000<br>First – Rs 2000</p>
<h4>Contact</h4>
<p>Lavanya: +91 80562 09684<br>Raghavendra: +91 82391 21430</p>
      </div>

<center><a href="https://goo.gl/forms/vXMIsp7FaCePPFE63" target="_blank"><div class="menubtn registerbtn">Register</div></a></center>
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