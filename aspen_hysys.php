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
              <span class="card-title" style="display: inline-block;">Aspen Hysys Workshop</span></div>
              </div></center>
            </div>
            
          </div>
        </div>
      </div>
            
<div class="container">
       
<p>
<center><img src="img/aspen.jpg" width="300px"></center>
<br><br>Aspen Technology, Inc. – known as AspenTech – is a provider of software and services for the process industries headquartered in Bedford, Massachusetts. AspenTech has 30 offices around the world, on 6 continents. HYSYS is powerful software that was created by Hyprotech for simulation of chemical plants and oil refineries. It includes tools for estimation of physical properties and liquid-vapor phase equilibria, heat and material balances, and simulation of many types of chemical engineering equipment.<br><br>
Having the software pre-installed in your system would be appreciated.<br><br>
The workshop will be conducted by <b>Mr S Chakravarthybharath, Senior Principal Engineer, Process Design currently working at Technip India Limited</b>. He has had professional experience in ASPEN HYSYS and ASPEN Plus for several years and recently completed a complex vinyl chloride monomer plant process simulation in ASPEN Plus software.
<h4>Note to participants</h4>
Participants are requested to get their laptops during the workshop. The software will be installed by the organisers on any day of Alchemy or an hour before the workshop begins. Certificates will be provided after successful completion of the workshop.<br><br>
Participants who wish to install it on the day of the workshop are requested to come early, at 11:30 AM. <br><br>
Fee: Rs. 300 per participant (Those who wish to register for both ASPEN and MATLAB need to pay only 500/- combined).<br>
 Duration: 3 hours (2:00 PM to 5:00 PM)<br>
 Date: 18th March 2017 (Day-3)

<h4>Contact</h4>
<p>Soundarya: +91-99402 67294<br>Narayan: +91-97904 85814</p>
      </div>

<center><a href="https://goo.gl/forms/fTCn4diL6d3I8P0A2" target="_blank"><div class="menubtn registerbtn">Register</div></a></center>
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