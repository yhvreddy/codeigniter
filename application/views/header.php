<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?=$page_title?></title>

    <!-- Favicon -->
    <link rel="icon" href="<?=base_url($sitedetails->site_favicon)?>" type="image/x-icon" />
    <!-- Bootstrap CSS -->
    <link href="<?=base_url()?>assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Animate CSS -->
    <link href="<?=base_url()?>assets/vendors/animate/animate.css" rel="stylesheet">
    <!-- Icon CSS-->
	<link rel="stylesheet" href="<?=base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css">
    <!-- Camera Slider -->
    <link rel="stylesheet" href="<?=base_url()?>assets/vendors/camera-slider/camera.css">
    <!-- Owlcarousel CSS-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/vendors/owl_carousel/owl.carousel.css" media="all">
    <!--Theme Styles CSS-->
	<link rel="stylesheet" type="text/css" href="<?=base_url()?>assets/css/style.css" media="all" />
    <!-- jQuery JS -->
    <script src="<?=base_url()?>assets/js/jquery-1.12.0.min.js"></script>
<!--	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <style>
        .header_aera .navbar-header .navbar-brand {
            padding-top: 12px !important;
        }
		.button_all,.all_contact_info .contact_row .send_message .contact_box button{
			background: #25d498 !important;
		}
		.tittle h2:after {
			background: #25d498;
		}
		.fa, .footer_area .copyright_area a, .header_aera .navbar-collapse .navbar-nav.navbar-right li a:hover, .header_aera .navbar-collapse .navbar-nav.navbar-right li a:focus, .latest_blog_area .latest_blog .blog_content .blog_heading:hover, .latest_blog_area .latest_blog .blog_content .blog_heading:focus, .featured_works .featured_gallery .gallery_iner .gallery_hover a:hover, .featured_works .featured_gallery .gallery_iner .gallery_hover a:focus,.blog_tow_area .blog_tow_row .renovation .renovation_content .tittle:hover, .blog_tow_area .blog_tow_row .renovation .renovation_content .tittle:focus{
			color: #25d498 !important;
		}
		.banner_area .breadcrumb li a.active {
			color: #25d498 !important;
		}
		.our_feature_area .feature_row .feature_content .media .media-left a i {
			color: #25d498;
			background: #333333;
			border: 5px solid #25d498;
		}
		.blog_tow_area .blog_tow_row .renovation .renovation_content .clipboard {
			background: #28475d;
		}
		.all_contact_info .contact_row .send_message .contact_box button:hover, .all_contact_info .contact_row .send_message .contact_box button:focus{
			color: #ffffff;
		}
		.all_contact_info .contact_row .contact_info h2:after{
			background: #25d498;
		}
    </style>
</head>
<body>
    <!-- Preloader -->
    <div class="preloader"></div>

	<!-- Top Header_Area -->
	<section class="top_header_area">
	    <div class="container">
            <ul class="nav navbar-nav top_nav">
                <li><a href="#"><i class="fa fa-phone"></i>+91 <?=$sitedetails->mobile?></a></li>
                <li><a href="#"><i class="fa fa-envelope-o"></i><?=$sitedetails->email_id?></a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right social_nav">
                <li><a href="<?=$sitedetails->facebook?>"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                <li><a href="<?=$sitedetails->twitter?>"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                <li><a href="<?=$sitedetails->instagram?>"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                <li><a href="<?=$sitedetails->linkedin?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
            </ul>
	    </div>
	</section>
	<!-- End Top Header_Area -->

	<!-- Header_Area -->
    <nav class="navbar navbar-default header_aera" id="main_navbar">
        <div class="container">
            <!-- searchForm -->
            <!-- <div class="searchForm">
                <form action="#" class="row m0">
                    <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-search"></i></span>
                        <input type="search" name="search" class="form-control" placeholder="Type & Hit Enter">
                        <span class="input-group-addon form_hide"><i class="fa fa-times"></i></span>
                    </div>
                </form>
            </div> -->
            <!-- End searchForm -->
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="col-md-2 p0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#min_navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=base_url()?>"><img src="<?=base_url($sitedetails->site_logo)?>" alt=""></a>
                </div>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="col-md-10 p0">
                <div class="collapse navbar-collapse" id="min_navbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#"><a href="<?=base_url()?>">Home</a></a></li>
                        <li><a href="#"><a href="<?=base_url('aboutus')?>">Aboutus</a></a></li>
                        <li><a href="#"><a href="<?=base_url('projects')?>">Projects</a></a></li>
                        <li><a href="#"><a href="<?=base_url('gallery')?>">Gallery</a></a></li>
                        <li><a href="#"><a href="<?=base_url('blogarticals')?>">Blog</a></a></li>
                        <li><a href="#"><a href="<?=base_url('contactus')?>">Contactus</a></a></li>
                        <!-- <li><a href="#" class="nav_searchFrom"><i class="fa fa-search"></i></a></li> -->
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container -->
    </nav>
	<!-- End Header_Area -->
