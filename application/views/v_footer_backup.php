<?php 
    if(isset($_GET['to'])){
        $afidvalue = $_GET['to'];
    } else {
        $afidvalue = "blank";
    }
?>
<section id="work-process">
    <div class="container">

        <div class="row">
            <?php
            $collection = array('tentang', 'latarbelakang', 'struktur', 'visimisi', 'proyek', 'kelebihan', 'hubungi');
            $urlnow = uri_string();
            $content = "";
            foreach ($collection as $value) {
                if (true) {
                    $content .= '<div class="col-md-1 col-lg-1 col-xs-4 spk-span">
                                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                                ';
                    switch ($value) {
                        case 'tentang':
                            $number = 1;
                            $icon = "fa fa-coffee fa-2x";
                            $detail = "<h5>Tentang</h5>"
                                    . "<a href=\"" . base_url($value) . "#profil-perusahaan\">Profil Perusahaan</a>"
                            ;
                            break;
                        case 'latarbelakang':
                            $number = 2;
                            $icon = "fa fa-bullhorn fa-2x";
                            $detail = "<h5>Latar Belakang</h5>";
                            break;
                        case 'struktur':
                            $number = 3;
                            $icon = "fa fa-image fa-2x";
                            $detail = "<h5>Struktur</h5>";
                            break;
                        case 'visimisi':
                            $number = 4;
                            $icon = "fa fa-heart fa-2x";
                            $detail = "<h5>Visi Misi</h5>"
                                    . "<a href=\"" . base_url($value) . "#skp-visi\">Visi</a>"
                                    . "<a href=\"" . base_url($value) . "#skp-misi\">Misi</a>"
                            ;
                            break;
                        case 'proyek':
                            $number = 5;
                            $icon = "fa fa-shopping-cart fa-2x";
                            $detail = "<h5>Proyek</h5>"
                                    . "<a href=\"" . base_url($value) . "?to=booth\">Booth</a>"
                                    . "<a href=\"" . base_url($value) . "?to=interior\">Interior</a>"
                            ;
                            break;
                        case 'kelebihan':
                            $number = 6;
                            $icon = "fa fa-space-shuttle fa-2x";
                            $detail = "<h5>Kelebihan</h5>";
                            break;
                        case 'hubungi':
                            $number = 7;
                            $icon = "fa fa-headphones fa-2x";
                            $detail = "<h5>Hubungi</h5>"
                                    . "<a href=\"" . base_url($value) . "\">Hubungi</a>"
                                    . "<a href=\"" . base_url($value) . "/alamat\">Alamat</a>"
                            ;
                            break;
                        default:
                            break;
                    }
                    $content .= '
                                <h5>' . $detail . '</h5>';
                    $content .= '</div>'
                            . '</div>';
                }
            }
            echo $content;
            ?>
        </div>
        <br>
        <br>
        <div class="row text-center">
            <div class="col-lg-12 center-block text-center">
                <br />
                Septa Karya Pratama &copy; 2015
                <br />
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
<script>
    $(window).load(function () {
        var nowurl = "<?php echo $urlnow; ?>";
        if (nowurl === "proyek") {
            var destination = "a[id=skp-<?php echo $afidvalue; ?>]";
            $(destination).trigger('click');
        }
    });
</script>
</html>
