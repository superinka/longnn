<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<meta name="description" content="">
<meta name="author" content="">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" />

    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,300,600,700' rel='stylesheet' type='text/css'>

<?php wp_head(); ?>

    <!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')
</script>
<![endif]-->
</head>
<body <?php body_class(); ?> id="home" class="homepage main">
<div class="loader"></div>
<div id="wrapper" class="hfeed">
  
        <ul id="info-scroll">
            <li>
                <a href="tel:0917071662" id="tel_cta">
                    <span class="text">HOTLINE <small>0.964.459.966</small></span>
                    <span class="icon"><img alt="" src="https://1.bp.blogspot.com/-whexvt6YO98/WNuw04IBkdI/AAAAAAAAAX8/2Ou16_lt05snUWsO4g_qcMlSLR-YaZoWwCLcB/s1600/phone-ico.png"></span>
                </a>
            </li>
            <li class="hidden-xs hidden-sm">
                <a href="/p/bang-gia.html" id="download_cta">
                    <span class="text">DOWNLOAD <small>Tài liệu</small></span>
                    <span class="icon"><img alt="" src="https://3.bp.blogspot.com/-gWY5JuPRP6w/WNuw0r2VgiI/AAAAAAAAAX0/TcNjIn4PO44E7zhOBd1ZZyYaP4lOehtnACLcB/s1600/download-ico.png"></span>
                </a>
            </li>
        </ul>

        <?php get_template_part( 'templates/slider' ); ?>
        <?php get_template_part( 'templates/menu/home-menu' ); ?>

        	<!-- main -->
        <div id="main" class="clearfix">