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
              <span class="card-title" style="display: inline-block;">Contacts - Alchemy'17</span></div>
              </div></center>
            </div>
            
          </div>
        </div>
      </div>
            
<div class="container" style="width: 100%">
       
<div class="cholder">
<center>

<div class="cbox">
 <div class="cimg c1"></div>
<span><b>Anushka Sharma</b><br>Chairperson<br>+91 9600800219</span>
</div>

<div class="cbox">
 <div class="cimg c2"></div>
<span><b>Sharan Sridharan</b><br>Overall Coordinator<br>+91 9940677475</span>
</div>

<div class="cbox">
 <div class="cimg c3"></div>
<span><b>Sanjo Simon Jain</b><br>Treasurer<br>+91 8220296158</span>
</div>

<div class="cbox">
 <div class="cimg c4"></div>
<span><b>Pooja Balasubramani</b><br>Technical Secretary<br>+91 9940267294</span>
</div>

<div class="cbox">
 <div class="cimg c5"></div>
<span><b>Yatharth Srivatsava</b><br>Head, Marketing<br>+91 9003232122</span>
</div>

<div class="cbox">
 <div class="cimg c6"></div>
<span><b>Suraj Murthy</b><br>Head, Publicity<br>+91 8124069231</span>
</div>

<div class="cbox">
 <div class="cimg c7"></div>
<span><b>Lavanya Ganti</b><br>Head, Events<br>+91 8056209684</span>
</div>

<div class="cbox">
 <div class="cimg c8"></div>
<span><b>Hari Kishore</b><br>Head, Organising Committee<br>+91 8973138232</span>
</div>

<div class="cbox">
 <div class="cimg c12"></div>
<span><b>Bhanu Ashok Madrametla</b><br>Head, PR & Hospi<br>+91 8919343302</span>
</div>


<div class="cbox">
 <div class="cimg c9"></div>
<span><b>Ganesh Raghavendran</b><br>Head, Web Ops<br>+91 9790892234</span>
</div>

<div class="cbox">
 <div class="cimg c13"></div>
<span><b>Shakthi Hari NV</b><br>Head, Design<br>+91 8526655848</span>
</div>


<div class="cbox">
 <div class="cimg c10"></div>
<span><b>Shruthi Sinha</b><br>Head, Content<br>+91 9840722800</span>
</div>


<div class="cbox">
 <div class="cimg c11"></div>
<span><b>Abinesh Kumar</b><br>Head, Content<br>+91 9677059617</span>
</div>



</center>
</div>
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