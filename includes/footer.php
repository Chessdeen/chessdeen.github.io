<footer class="pt-5 pb-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-12"> <ul class="footer-icons list-unstyled list-inline text-center">
                    <li class="list-inline-item"><a href="https://www.facebook.com/AdeolaMubarak" target="_blank" class=" facebook-bg-color"><i class="mdi mdi-facebook"></i></a></li>
                    <li class="list-inline-item"><a href="https://twitter.com/Adebest_pro" target="_blank" class="twitter-bg-color"><i class="mdi mdi-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/Ade Codes" target="_blank" class="linkedin-bg-color"><i class="mdi mdi-linkedin"></i></a></li>
                    <li class="list-inline-item"><a href="https://github.com/Chessdeen" target="_blank" class="linkedin-bg-color"><i class="mdi mdi-git"></i></a></li>
                </ul>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p class="footer-copy-right mt-2 text-center">Ade Codes © <?php echo date("Y"); ?> All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- Footer end-->

<!-- this is to open a file on another page -->
  <!-- target="_blank" -->

<!-- JAVASCRIPTS -->

<script language="JavaScript">
var frmvalidator  = new Validator("contactform");
frmvalidator.addValidation("name","req","Please provide your name");
frmvalidator.addValidation("email","req","Please provide your email");
frmvalidator.addValidation("email","email",
  "Please enter a valid email address");
</script>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/waypoints.min.js"></script>
<script src="js/jquery.counterup.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/isotope.js"></script>
<script src="js/masonry.pkgd.min.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/scrollspy.min.js"></script>
<!-- Animate js -->
<script src="js/aos.js"></script>
<script src="js/app.js"></script>
<script>
    function openNav() {
        document.getElementById("mySidenav").style.width = "20%";
    }

    /* Set the width of the side navigation to 0 */
    function closeNav() {
        document.getElementById("mySidenav").style.width = "0";
    }

    AOS.init({
        easing: 'ease-in-out-sine',
        duration: 1000
    });
</script>
                        
</body>
                
</html>
