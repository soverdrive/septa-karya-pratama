<section id="work-process">
    <div class="container">
        <div class="section-header">
            <h3 class="section-title text-center wow fadeInDown">Septa Karya Pratama</h3>
            <p class="text-center wow fadeInDown">Menjadi Perusahaan yang Inspiratif, Brilliant, dan Berkualitas.</p>
        </div>

        <div class="row text-center">
            <?php
            $collection = ['home','tentang', 'latarbelakang', 'struktur', 'visimisi', 'proyek',
                'kelebihan', 'hubungi'];
            $temp = $this->uri->segment(1);
            $content = "";
            foreach ($collection as $value) {
                if (true) {
                    $content .= '<a href="' . $value . '">'
                            . '<div class="col-md-1 col-lg-1 col-xs-3 spk-span">
                                <div class="wow fadeInUp" data-wow-duration="400ms" data-wow-delay="0ms">
                                    <div class="icon-circle">';
                    switch ($value) {
                        case 'home':
                            $number = 0;
                            $icon = "fa fa-home fa-2x";
                            $detail = "Halaman Awal";
                            break;
                        case 'tentang':
                            $number = 1;
                            $icon = "fa fa-coffee fa-2x";
                            $detail = "Tentang";
                            break;
                        case 'latarbelakang':
                            $number = 2;
                            $icon = "fa fa-bullhorn fa-2x";
                            $detail = "Latar Belakang";
                            break;
                        case 'struktur':
                            $number = 3;
                            $icon = "fa fa-image fa-2x";
                            $detail = "Struktur";
                            break;
                        case 'visimisi':
                            $number = 4;
                            $icon = "fa fa-heart fa-2x";
                            $detail = "Visi Misi";
                            break;
                        case 'proyek':
                            $number = 5;
                            $icon = "fa fa-shopping-cart fa-2x";
                            $detail = "Proyek";
                            break;
                        case 'kelebihan':
                            $number = 6;
                            $icon = "fa fa-space-shuttle fa-2x";
                            $detail = "Kelebihan";
                            break;
                        case 'hubungi':
                            $number = 7;
                            $icon = "fa fa-headphones fa-2x";
                            $detail = "Hubungi";
                            break;
                        default:
                            break;
                    }
                    $content .= '<span>'.$number.'</span>
                                    <i class="'.$icon.'"></i>
                                </div>
                                <h4>'.$detail.'</h4>';
                    $content .= '</div>'
                            . '</div>'
                            . '</a>';
                }
            }
            echo $content;
            ?>
        </div>
        <div class="row text-center">
            <div class="col-lg-12 center-block text-center">
                <br />
                Septa Karya Pratama &copy; 2015
                <br />
                <a href="<?php echo base_url() . "user_guide"; ?>" target="_blank">CodeIgniter Offline User Guide</a>
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
</html>
