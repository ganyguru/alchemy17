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
              <span class="card-title" style="display: inline-block;">About Alchemy'17</span></div>
              </div></center>
            </div>
            
          </div>
        </div>
      </div>
            
<div class="container">
       
<p style="font-size: 20px;">
<br><br><br>
Ancient legend has it that Alchemy was the art of transforming lead into gold and discovering the "elixir of life". NIT-Trichy's version of Alchemy serves an excellent platform for budding chemical engineers and research enthusiasts to showcase their technical prudence.<br><br>

With the theme of "Biochemical Society", Alchemy pledges to take us all into a spectacular voyage deep into the realm of biochemical engineering. This year, the challenges have become tougher, the workshops and guest lectures, more enthralling and the engineer in you will inevitably be aroused. So Unwind, Ideate and Unleash.<br><br><br> </p>
      </div>


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