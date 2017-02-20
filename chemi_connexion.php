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
              <span class="card-title" style="display: inline-block;">Chemi-Connexion</span></div>
              </div></center>
            </div>
            
          </div>
        </div>
      </div>
            
<div class="container">
        <h4>Description</h4>
<p>Chemi-connexion is a fun event meant to spark the minds of the young with the use of visual aid of pictures. The participants interested in this amusing event will be shown two pictures of different end products/goods. They are required to guess correctly the process which is common to both these products and follow it up with a small description on the process guessed with respect to the entailed products.</p>
<h4>Rules and Format</h4>
<p>All the students must register in the form teams of 2 or 3 to participate in this event.<br><br>

There are two categories of answering to a picturist's question.<br>
A - Naming the process common between both the end products shown in the respective pictures <br>
B - Describing the process in a few sentences.<br>
(A) will be awarded 5 points and (B) will be awarded another 3 points <br><br>
The event begins with a prelims round which is conducted where all the teams write down their answers on a piece of paper. The pictures will be held up for a span of 20 seconds. Then about 6 teams (depending on the number of teams that register) will be shortlisted for the finals round.<br><br>

There will be a set of 2 rounds for the finals. In the first round, each team will be asked questions one after the other, where the set of 2 pictures will be held up for 10 seconds. For the second round, all the teams will be provided buzzers.<br><br> A set of 2 pictures will be held up and the team that presses the buzzer first, will get the chance to answer the question. If the question is answered wrong, the question gets passed on to the next team in order of seating.<br><br>

The points of both the final rounds will be added, and the team that scores the maximum number of points, wins.<br><br>

Any sort of misbehavior (screaming/shouting/laughing) will be awarded negative points of -2.</p>

<h4>Prizes</h4>
<p>First – Rs 3500<br>First – Rs 1500</p>
<h4>Contact</h4>
<p>Lavanya: +91 80562 09684<br>Shruti Nambiar: +91 95973 12042</p>
      </div>

<center><a href="https://goo.gl/forms/71sB0XpM0OyQ4o5a2" target="_blank"><div class="menubtn registerbtn">Register</div></a></center>
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