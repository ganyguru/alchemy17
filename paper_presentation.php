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
              <span class="card-title" style="display: inline-block;">Paper presentation</span></div>
              </div></center>
            </div>
            
          </div>
        </div>
      </div>
            
<div class="container">
        <h4>Description</h4>
<p>Alchemy invites technical papers related to different sectors in chemical engineering. This serves as a platform for students to showcase pure research work and get it judged by an eminent panel of technical experts. The papers will be evaluated based on your understanding of the subject, originality and feasibility</p>
<h4>Rules and Format</h4>
<p>Contestants can participate either as individual or in teams with a maximum of 2 team members.<br>
Round 1: Abstract submission-Shortlist<br>
Round 2: Final paper presentation.<br>
Timeline:  8/03/2017, 5PM: Abstract submission: Shortlist ( send the abstract of the paper to alchemyevents17@gmail.com)</p>
<h4>Paper Format:</h4>
<p>Paper should be written in standard format in Times New Roman, font size-12, standard margin on all 4 sides and line spacing of 1.5.<br>
It must be well documented and must contain the following sections: <br>
<ol>
<li>Abstract</li>

<li>Introduction</li>

<li>Background / literature review.</li>

<li>Materials and methods.</li>

<li>Procedure</li>

<li>Results and discussions.</li>

<li>Judges decision is final.</li></ol>
</p>
<h4>Prizes</h4>
<p>First – Rs 4000<br>        Second – Rs 2000<br>       Third – Rs 1000</p>
<h4>Contact</h4>
<p>Lavanya: +91 80562 09684<br>Muthukrishnan: +91 84894 15496</p>
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