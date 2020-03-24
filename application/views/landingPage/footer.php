<div class="footer">
            <!--Footer Contents here-->
            <div class="socialBar">
                  <a href = "https://www.linkedin.com/company/vidyarthi-solutions">             <i class="fa fa-linkedin      fa-2x"></i></a>
                  <a href = "https://instagram.com/vidyarthisolutions?igshid=15mslmn9j3j2n">    <i class="fa fa-instagram     fa-2x"></i></a>
                  <a href = "https://twitter.com/VidyarthiSolut1">                              <i class="fa fa-twitter       fa-2x"></i></a>
                  <a href = "https://www.facebook.com/Vidyarthi-Solutions-104925931132218/1">   <i class="fa fa-facebook      fa-2x"></i></a>
            </div>

            <div class="footerleft">
                  <h4>Vidyamin</h4>
                  <a href = "#">Resume Templates</a><br>
                  <a href = "#">CV Templates</a><br>
                  <a href = "#">Cover Letters</a><br>
                  <a href = "#">Samples</a><br><br>
            </div>

            <div class="footerleft">
                  <h4>Resources</h4>
                  <a href = "#" >Blog</a>&nbsp<br>
                  <a href = "#" >Career Development</a>&nbsp<br>
                  <a href = "#" >Interview Tips</a><br>
            </div>
            
            <div class="footerleft">
                  <h4>Others</h4>
                  <a href="#">About Us</a>&nbsp<br>
                  <a href="#">Work with Us</a>&nbsp<br>
                  <a href="#">Contact Us</a>&nbsp<br>
                  <a href="#">FAQs</a>
            </div>
            
            <div class="footerleft">
                  <h4>Legal</h4>
                  <a href="#">Privacy Policy</a>&nbsp<br>
                  <a href="#">Terms of Use</a>&nbsp<br>
                  <a href="#">Affiliates</a>&nbsp<br>
            </div>
            
            <br>
            
            <div class="addressbar">
                  Vivekananda Sarani<br>
                  Kolkata 700078 India<br>
                  Copyright © 2019 Vidyarthi Foundations All Rights Reserved.<br>
            </div>      
      </div>

      <!--JQUERY FILES-->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
      
      <!--ANGULAR FILES-->
      <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.2.15/angular.min.js"></script>
      <script src='<?=base_url("assets/js/courseList.js")?>'></script>
      
      <script src="<?=base_url('assets/lib/jquery/jquery.min.js')?>"></script>
      <script src="<?=base_url('assets/lib/jquery/jquery-migrate.min.js')?>"></script>
      <script src="<?=base_url('assets/lib/bootstrap/js/bootstrap.bundle.min.js')?>"></script>
      <script src="<?=base_url('assets/lib/easing/easing.min.js')?>"></script>
      <script src="<?=base_url('assets/lib/easing/easing.min.js')?>"></script>
      <script src="<?=base_url('assets/lib/wow/wow.min.js')?>"></script>
      <script src="<?=base_url('assets/lib/superfish/hoverIntent.js')?>"></script>
      <script src="<?=base_url('assets/lib/superfish/superfish.min.js')?>"></script>
      <script src="<?=base_url('assets/lib/magnific-popup/magnific-popup.min.js')?>"></script>


      <!-- Template Main Javascript File -->
      <script src='<?=base_url("assets/js/landingPage.js")?>'></script>

      <script type="text/javascript">
      
      $(document).ready(function() {
            $(".menu-icon").on("click", function() {
                  $("nav ul").toggleClass("showing");
            });
      });


      $(window).on("scroll", function() {
            if($(window).scrollTop()) {
                  $('nav').addClass('black');
                  $('.logo').addClass('black');
            }

            else {
                  $('nav').removeClass('black');
                  $('.logo').removeClass('black');
            }
      });
      </script>
</body>
</html>