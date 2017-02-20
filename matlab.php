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
              <span class="card-title" style="display: inline-block;">Matlab Workshop</span></div>
              </div></center>
            </div>
            
          </div>
        </div>
      </div>
            
<div class="container">
       
<p>
<center><img src="img/matlab.png" width="300px"></center>
<br><br>MATLAB (matrix laboratory) is a multi-paradigm numerical computing environment and fourth-generation programming language. A proprietary programming language developed by MathWorks, MATLAB allows matrix manipulations, plotting of functions and data, implementation of algorithms, creation of user interfaces, and interfacing with programs written in other languages, including C, C++, C#, Java, Fortran and Python. Apart from having various applications in the computer science field, it is widely used in Chemical Engineering for the design of reactors.<br><br>
The workshop conducted will begin with the basics of MATLAB, followed by the design of a single-input single-output reactor and solving a numerical problem based on a chemical engineering industry.<br><br>
Having the software pre-installed in your system would be appreciated.<br><br>
The workshop will be conducted by <b>Dr. Arun Tangirala, Professor in Department of Chemical Engineering at Indian Institute of Technology, Madras (IIT-M)</b>. He has had professional experience in MATLAB for over 10 years. Along with Dr. Arun, a person from MathWorks will also be joining to conduct the workshop.
<h4>Note to participants</h4>
Participants are requested to get their laptops during the workshop. The software will be installed by the organisers on any day of Alchemy or an hour before the workshop begins. We will also be e-mailing you a link to download and install the software a week before Alchemy. Certificates will be provided after successful completion of the workshop.<br><br>   
Participants who wish to install it on the day of the workshop are requested to come early, at 7:30 AM. <br><br>
Fee: Rs. 300 per participant (Those who wish to register for both ASPEN and MATLAB need to pay only 500/- combined).<br>
 Duration: 4 hours (9:00 AM to 1:00 PM)<br>
 Date: 18th March 2017 (Day-3)<br>

<h4>Contact</h4>
<p>Soundarya: +91-99402 67294<br>Shweta: +91-86557 75374</p>
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