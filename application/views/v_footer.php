<?php 
    if(isset($_GET['to'])){
        $afidvalue = $_GET['to'];
    } else {
        $afidvalue = "blank";
    }
?>
<section id="work-process">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-1 col-lg-1 col-md-offset-5 col-lg-offset-5">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                    <a href="http://facebook.com" target="_blank"><i class="fa fa-facebook-square fa-2x"></i> <h5>Facebook</h5>
                    </a>
                </div>
            </div>
            <div class="col-md-1 col-lg-1 ">
                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                    <a href="http://instagram.com" target="_blank"><i class="fa fa-instagram fa-2x"></i> <h5>Instagram</h5>
                    </a>
                </div>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-lg-12 center-block text-center">
                <br />
                Septa Karya Pratama &copy; 2015
                <br />
            </div>
        </div>
    </div>
</section><!--/#work-process-->
</body>
<script src="<?php echo base_url('assets/js/owl.carousel.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/mousescroll.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/smoothscroll.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.prettyPhoto.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.isotope.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/jquery.inview.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/wow.min.js'); ?>"></script>
<script src="<?php echo base_url('assets/js/home.js'); ?>"></script>
</html>
