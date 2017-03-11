

<?php include 'header.php'; ?>



<div class="startscreen whitescreen">
<a href="index.php"><div class="colorlogo">


</div></a>


<div class="btncontainer">

<div class="row" style="margin-bottom: 0px">
        <div class="input-field col s12">
          <input name="emailid" id="emailid" type="email" class="validate" style="width: 200px;" placeholder="Email for Registration"><img src="img/loading.gif" class="loadergif" style="display: none;" width="15px" height="15px">
          
        </div>
</div>

<div class="menubtn registerbtn" id="register" style="font-size: 10px !important;">Get/Check Alchemy ID</div><br><center><br>
<div class="g-recaptcha" data-sitekey="6Lfi4hkTAAAAAN_jxtacgn6K_FJxt1jq6vWJgaQv"></div></center>
</div>



</div>





				<span class="footer" style="color:#000;">Made with <span style="color:red;">&hearts;</span> by <a href="https://www.facebook.com/GaneGuru" target="_blank" style="color: #ECC82C !important;">Ganesh Raghavendran</a></span>
</div>



<div id="alcid" class="modal">
    <div class="modal-content">
     
    </div>
   
  </div>



<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script type="text/javascript">
      	 $(".button-collapse").sideNav();
      	 $(".eventsbtn").sideNav();
      	 $(".seventsbtn").sideNav();

          $("#register").click(function(){
            $(".loadergif").show();
if ($("#g-recaptcha-response").val()) {

     $.post("alcid.php",
    {
        email:$("#emailid").val(),
        captcha:$("#g-recaptcha-response").val()
    },
    function(data, status){
        $(".modal-content").html(data);
        grecaptcha.reset();
        $(".loadergif").hide();
        $(".modal").modal();
        $(".modal").modal('open');
    });
}
else
{
alert("Enter Captcha");
$(".loadergif").hide();
}

});

      </script>
</body>
</html>