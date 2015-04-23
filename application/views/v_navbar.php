<header id="header">
    <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                <a class="navbar-brand" href="<?php echo site_url(); ?>">
                    <img src="<?php echo base_url('assets/images/logo.png'); ?>" alt="SKP">
                </a>
            </div>

            <div class="collapse navbar-collapse navbar-right">
                <ul class="nav navbar-nav">
                    <li id="tentang"><a href="<?php echo site_url('tentang'); ?>">TENTANG</a></li>   
                    <li id="latarbelakang"><a href="<?php echo site_url('latarbelakang'); ?>">LATAR BELAKANG</a></li>   
                    <li id="struktur"><a href="<?php echo site_url('struktur'); ?>">STRUKTUR ORGANISASI</a></li>   
                    <li id="visimisi"><a href="<?php echo site_url('visimisi'); ?>">VISI MISI</a></li>   
                    <li id="proyek"><a href="<?php echo site_url('proyek'); ?>">PROYEK</a></li>   
                    <li id="kelebihan"><a href="<?php echo site_url('kelebihan'); ?>">KELEBIHAN KAMI</a></li>       
                    <li id="hubungi"><a href="<?php echo site_url('hubungi'); ?>">HUBUNGI KAMI</a></li>
                </ul> 
            </div>
        </div><!--/.container-->
    </nav><!--/nav-->
</header><!--/header-->

<script>
    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(document).scrollTop() > 50) {
                $('nav').addClass('shrink');
            } else {
                $('nav').removeClass('shrink');
            }
        });

<?php if (isset($active)) { ?>
            $("#<?php echo $active; ?>").addClass("active");
<?php } ?>
    });
</script>