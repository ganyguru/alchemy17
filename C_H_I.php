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
              <span class="card-title" style="display: inline-block;">Chemical Hazard Investigation</span></div>
              </div></center>
            </div>
            
          </div>
        </div>
      </div>
            
<div class="container">
        <h4>Description</h4>
<p>Chemical process accidents are often the result of an unexpected interaction between automated process equipment and operators. In the drive to improve safety and reliability, chemical process facilities tend to rely heavily on automation, using sophisticated instrumentation, computers, and programmable logic controllers to run their plants. In an effort to improve energy efficiency and reduce pollution, various pieces of equipment are interconnected in ways that complicate their operation. Equipment failures or operator errors can lead to sudden and unexpected changes in the plant operation. If these disruptions to normal process operation exceed the capabilities of the operators or the capacity of the safety systems, a severe accident can occur, potentially resulting in a devastating fire, explosion, or toxic release.</p>
<h4>Rules and Format</h4>
<p>On spot registration.<br><br>
Carry valid ID cards for registration.<br><br>
Participants will be shown a particular hazard and will be asked to identify the hazard and come up with solutions to avoid such hazards taking place in an industry. <br><br>
All points carry equal weightage.<br><br>
Judges decision is final</p>

<h4>Prizes</h4>
<p>First – Rs 3000<br>        Second – Rs 2000<br>       Third – Rs 1000</p>
<h4>Contact</h4>
<p>Lavanya: +91 80562 09684<br>Komal: +91 96294 75279</p>
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