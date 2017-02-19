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
              <span class="card-title" style="display: inline-block;">Chem Quiz</span></div>
              </div></center>
            </div>
            
          </div>
        </div>
      </div>
            
<div class="container">
        <h4>Description</h4>
<p>The quiz will test the participant’s understanding of concepts as well as their awareness of recent developments in the fields of chemical engineering which include new findings and company projects. The quiz will consist of oral questions and audio-visual rounds wherein participants will be asked to identify equipment’s and eminent personalities in chemical industry.</p>
<h4>Rules and Format</h4>
<p>Register on spot with a team of maximum 2 members.<br><br>
First round prelims, based on intriguing questions based on application of chemical engineering concepts.<br><br>
Second round: maximum of 6 teams can qualify to this round. , this round will again test your basics in chemical engineering and each team will be asked 3 questions for which each team is awarded +10 if answered correct and +5 for passed question if answered correct.<br><br>
Third round: Audio/ visual identification round, a picture or a short video will be played after which questions will be asked on the same. +20 for right answers and +10 for answering the passed question correctly<br><br>
Final round: Rapid-fire, here 10 questions will be asked and u will have to answer the same in a given time limit, so the quicker you are more points you get.<br><br>
Judges decision is final</p>

<h4>Prizes</h4>
<p>First – Rs 5000<br>        Second – Rs 3000<br>       Third – Rs 2000</p>
<h4>Contact</h4>
<p>Lavanya: +91 80562 09684</p>
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