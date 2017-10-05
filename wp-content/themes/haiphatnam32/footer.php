<!-- footer -->
    <footer>
        <div class="footer-wrapper section-padding">
            <div class="container">
                <div class="row">
                    <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
                        <a href="index.html"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo_hai_phat.png" alt="Haiphatnam32"></a>
                        <p class="footer-content">Dự án Liền kề Nam 32 thuộc Trạm Trôi, Hoài Đức, Hà Nội. Nằm trong khu vực phát triển mở rộng gắn với trục Hồ Tây – Ba Vì. Dự án Nam 32 sẽ phát triển thành một trong những KĐT mới tiềm năng của thành phố Hà Nội.</p>
                    </div>
                    <!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
                    <div class="wow zoomIn col-xs-12 col-sm-3 col-md-3">
                        <p class="footer-heading">link</p>
                        <ul class="footermenu">
                            <li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#about">Về dự án</a></li>
                            <li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#services">Dịch vụ</a></li>
                            <li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#product">Sản phẩm</a></li>
                            <li><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#blog">Tin tức</a></li>
                        </ul>
                    </div>
                    <!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
                    <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
                        <p class="footer-heading">Liên hệ</p>
                        <ul class="footercontact">
                            <li><i class="flaticon-mainpage"></i><span>Địa chỉ:</span> One TECHGUT loop, 54100</li>
                            <li><i class="flaticon-phone16"></i><span>Điện thoại:</span><a href="tel:88 02 8714612"> +88 02 8714612</a></li>
                            <li><i class="flaticon-email21"></i><span>e-mail:</span><a href="mailto:support@themerole.com"> support@themerole.com</a></li>
                            <li><i class="flaticon-world91"></i><span>web:</span><a href="http://themerole.com"> www.themerole.com</a></li>
                        </ul>
                        <i class="flaticon-home78"></i>
                    </div>
                    <!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
                    <div class="wow zoomIn col-xs-12 col-sm-6 col-md-3">
                        <p class="footer-heading">Thông tin mớ</p>
                        <ul class="footerblog">
                            <li><a href="blog-sidebar.html">The Green Fields of Spring</a>
                                <p>13th Jun 2014</p>
                            </li>
                            <li><a href="blog-sidebar.html">This is a Video Post</a>
                                <p>18th Nov 2014</p>
                            </li>
                            <li><a href="blog-sidebar.html">Satisfaction Lies in the Effort</a>
                                <p>13th Jun 2014</p>
                            </li>
                        </ul>
                    </div>
                    <!-- /.col-xs-12 .col-sm-3 .col-md-3 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="wow zoomIn col-xs-12">
                        <p>© 2017 All rights reserved. <span>Develop</span> theme by <a href="http://haiphat32.com">Mr.I</a></p>
                        <div class="backtop  pull-right">
                            <i class="fa fa-angle-up back-to-top"></i>
                        </div>
                        <!-- /.backtop -->
                    </div>
                    <!-- /.col-xs-12 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </div>
        <!-- /.creditwrapper -->
    </footer>
    <!-- /Footer -->

</div>
<!-- /#wrapper -->
<?php wp_footer(); ?>

<?php if ( is_home() ) {?>
    <!-- Modernizr JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/modernizr-2.6.2.min.js"></script>

    <!--Bootatrap JS-->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- REVOLUTION Slider  -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/rs-plugin/js/jquery.themepunch.revolution.js"></script>

    <!-- Shuffle JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.shuffle.min.js"></script>

    <!-- mmenu -->
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/vendor/mmenu/js/jquery.mmenu.min.js"></script>

    <!-- Owl Carosel -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/vendor/owl/js/owl.carousel.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/wow.min.js"></script>

    <!-- waypoints JS-->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>

    <!-- Counterup JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.counterup.min.js"></script>

    <!-- Easing JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.easing.min.js"></script>

    <!-- Smooth Scroll JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/scrolling-nav.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/smoothscroll.min.js"></script>

    <!-- Custom Script JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>

    <!-- Email JS -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/email.js"></script>

    <script>
        $(window).on('scroll', function() {
            if ($(window).scrollTop() > 670) {
                $('.navbar-default').addClass('navbar-fixed-top');
            } else {
                $('.navbar-default').removeClass('navbar-fixed-top');
            }
        });
    </script>
    <?php } else {?>
    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets2/js/bootstrap.min.js">
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets2/js/hover-dropdown.js">
    </script>
    <script defer src="<?php echo get_template_directory_uri(); ?>/assets2/js/jquery.flexslider.js">
    </script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets2/bxslider/jquery.bxslider.js">
    </script>

    <script src="<?php echo get_template_directory_uri(); ?>/assets2/js/jquery.easing.min.js">
    </script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets2/js/link-hover.js">
    </script>


    <script src="<?php echo get_template_directory_uri(); ?>/assets2/js/wow.min.js">
    </script>
    <script>
      wow = new WOW(
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0          // default
        }
      )
        wow.init();
    </script>
    <script>
    jQuery(document).ready(function ($) {
    
    var offset = 220;
    var duration = 500;
    $(window).scroll(function () {
      if ($(this).scrollTop() > offset) {
        $('.back-to-top').fadeIn(duration);
      } else {
        $('.back-to-top').fadeOut(duration);
      }
    });

    $('.back-to-top').click(function (event) {
      event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 1000);
      return false;
    })


  });
    </script>
    <?php }?>
</body>
</html>