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
              <span class="card-title" style="display: inline-block;">Poster presentation</span></div>
              </div></center>
            </div>
            
          </div>
        </div>
      </div>
            
<div class="container">
        <h4>Description</h4>
<p>Images rightly serve the best form of learning. They epitomize the subject in the most interactive way that get forever etched in our memories. But, creating such images require extra ordinarily creative minds. Alchemy presents to you the poster presentation contest and the perfect platform to flaunt your technical prudence in the most artistic manner.</p>
<h4>Rules and Format</h4>
<p>Contestants can participate either as individual or in teams with a maximum of 3 team members.<br><br>
Round 1: Abstract submission-Shortlist<br><br>
Round 2: Final poster presentation.<br><br>
Timeline:  8/03/2017, 5PM: Abstract submission: Shortlist ( send the abstract of the poster to alchemyevents17@gmail.com)<br><br>

The poster must follow the given guidelines as follows: <br>

<h5><u>General aim and format: </u></h5>
A poster is a graphically based approach to presenting research. In presenting your research with a poster, you should aim to use the poster as a means for generating active discussion of the research.<br><br>
Limit the text to about one-fourth of the poster space, and use "visuals" (graphs, photographs, schematics, maps, etc.) to tell your "story."

<h5><u>Design and layout specifications:</u></h5>
 The entire poster must be mounted on a 40" x 60" foam-core board. The poster does not necessarily have to fill the entire working area.<br><br>
The board must be oriented in the "landscape" position (long dimension is horizontal).<br><br>
A banner displaying your poster title, name, and department (or class, if appropriate) should be positioned at top-center of the board (see Figure 1).<br><br>
Make it obvious to the viewer how to progressively view the poster. The poster generally should read from left to right, and top to bottom. Numbering the individuals panels, or connecting them with arrows is a standard "guidance system".



<h5><u>Lettering:  </u></h5>
Text should be readable from five feet away. Use a minimum font size of 18 points.<br><br>
Lettering for the title should be large (at least 70-point font). Use all capital letters for the title.
<h5><u>Visuals: </u></h5>
Present numerical data in the form of graphs, rather than tables (graphs make trends in the data much more evident). If data must be presented in table-form, KEEP IT SIMPLE.<br><br>
Visuals should be simple and bold. Leave out or remove any unnecessary details.<br><br>
Make sure that any visual can "stand alone" (i. e., graph axes are properly labeled, maps have north arrows and distance scales, symbols are explained, etc.).<br><br>
Use color to enhance comprehension, not to decorate the poster. Neatly coloring black-line illustrations with color pencils is entirely acceptable.<br><br>
Make sure that the text and the visuals are integrated. Figures should be numbered consecutively according to the order in which they are first mentioned in the text.

<h5><u>Text:</u></h5>
Keep the text brief. Blocks of text should not exceed three paragraphs (viewers won't bother to read more than that). Use text to <br><br>
(a) introduce the study (what hypothesis was tested or what problem was investigated? why was the study worth doing?),<br><br> (b) explain visuals and direct viewers’ attention to significant data trends and relationships portrayed in the visuals, and <br><br>(c) state and explain the interpretations that follow from the data. In many cases, conclusions can be summarized in a bullet-point list.<br><br>
Depending upon the stage or nature of your project, the text could also include sections on future research plans or questions for discussion with viewers.<br><br>
Cite and reference any sources of information other than your own, just as you would do with a research paper. Ask your professor about the particular citation system that you should use (every discipline uses slightly different styles). The "References Cited" is placed at the end of the poster.

 <h5><u>Judges decision is final.</u></h5>
</p>
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
<p>Lavanya: +91 80562 09684<br>Muni Kumar: +91 97904 79642</p>
      </div>

<center><a href="#" target="_blank"><div class="menubtn registerbtn" disabled>Register</div></a></center>
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