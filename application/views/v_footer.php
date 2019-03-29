<!-- Main Footer -->
    <footer class="main-footer">
        <div class="footer-upper" style="background-image: url(<?php echo base_url() ?>assets/frontend/images/smanta2.jpg);">
            <div class="auto-container">
                <div class="footer-logo"><a href="#"><img src="<?php echo base_url()?>assets/frontend/images/baner.jpg" alt=""></a></div>
                <div class="footer-nav">
                    <ul class="footer-links">
                        <?php if($judul==="Home") { ?>
                        <li class="active"><a href="<?php echo base_url().'web/index' ?>">Home</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo base_url().'web/index' ?>">Home</a></li>
                        <?php } ?>
                                    
                        <?php if($judul==="Pendaftaran") { ?>
                        <li class="active"><a href="<?php echo base_url().'web/pendaftaran' ?>">Pendaftaran</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo base_url().'web/pendaftaran' ?>">Pendaftaran</a></li>
                        <?php } ?>
                                    
                        <?php if($judul==="Berita") { ?>
                        <li class="active"><a href="<?php echo base_url().'web/news' ?>">Berita</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo base_url().'web/news' ?>">Berita</a></li>
                        <?php } ?>
                                    
                        <?php if($judul==="Tentang") { ?>
                        <li class="active"><a href="<?php echo base_url().'web/about' ?>">Tentang</a></li>
                        <?php } else { ?>
                        <li><a href="<?php echo base_url().'web/about' ?>">Tentang</a></li>
                        <?php } ?>
                                    
                        <li><a href="<?=base_url('Admin')?>">Login</a></li> 
                        
                    </ul>
                </div>
            </div>
        </div>

        <!--Footer Bottom-->
         <div class="footer-bottom">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="copyright">
                        <p>© <a href="#">SMA Negeri 1 Tayu</a> 2019. All rights reserved.</p>
                    </div>

                    <div class="social-links">
                        <ul class="social-icon-one clearfix">
                            <li><a href="https://www.facebook.com/SMA-N-1-TAYU-244263385601417/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/sman1tayu"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/osissman1tayu/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- End Main Footer -->
                                        
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-double-up"></span></div>

<!-- Color Palate / Color Switcher -->
<div class="color-palate">
    <div class="color-trigger">
        <i class="fa fa-gear"></i>
    </div>
    <div class="color-palate-head">
        <h6>PILIH</h6>
    </div>
    <div class="various-color clearfix">
        <div class="colors-list">
            <span class="palate default-color active" data-theme-file="assets/frontend/css/color-themes/default-theme.css"></span>
            <span class="palate teal-color" data-theme-file="assets/frontend/css/color-themes/teal-theme.css"></span>
            <span class="palate green-color" data-theme-file="assets/frontend/css/color-themes/green-theme.css"></span>
            <span class="palate navy-color" data-theme-file="assets/frontend/css/color-themes/navy-theme.css"></span>
            <span class="palate blue-color" data-theme-file="assets/frontend/css/color-themes/blue-theme.css"></span>
            <span class="palate orange-color" data-theme-file="assets/frontend/css/color-themes/orange-theme.css"></span>
            <span class="palate olive-color" data-theme-file="assets/frontend/css/color-themes/olive-theme.css"></span>
            <span class="palate pink-color" data-theme-file="assets/frontend/css/color-themes/pink-theme.css"></span>
        </div>
    </div>

    <div class="palate-foo">
        <span>PILIH WARNA UNTUK EDIT TEMA WARNA.</span>
    </div>

</div>
<!-- /.End Of Color Palate -->

<script src="<?php echo base_url()?>assets/frontend/js/jquery.js"></script> 
<script src="<?php echo base_url()?>assets/frontend/js/bootstrap.min.js"></script>
<!--Revolution Slider-->
<script src="<?php echo base_url()?>assets/frontend/plugins/revolution/js/jquery.themepunch.revolution.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/plugins/revolution/js/jquery.themepunch.tools.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/plugins/revolution/js/extensions/revolution.extension.actions.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/plugins/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/plugins/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/plugins/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/plugins/revolution/js/extensions/revolution.extension.migration.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/plugins/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/plugins/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/plugins/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/plugins/revolution/js/extensions/revolution.extension.video.min.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/main-slider-script.js"></script>
<!--End Revolution Slider-->
<script src="<?php echo base_url()?>assets/frontend/js/pagenav.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/jquery.scrollTo.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/jquery-ui.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/timepicker.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/jquery.fancybox.pack.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/owl.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/wow.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/validate.js"></script>
<script src="<?php echo base_url()?>assets/frontend/js/script.js"></script>

<!--Color Switcher-->
<script src="<?php echo base_url()?>assets/frontend/js/color-settings.js"></script>