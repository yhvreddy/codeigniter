<?php include 'header.php'; ?>

	<?php if(count($banners) != 0){ ?>
		<!-- Slider area -->
		<section class="slider_area row m0">
			<div class="slider_inner">
				<?php foreach ($banners as $banner){ ?>
					<div data-thumb="<?=base_url($banner->image)?>" data-src="<?=base_url($banner->image)?>">
					<div class="camera_caption">
					   <div class="container">
							<h5 class=" wow fadeInUp animated"><?=$banner->banner_title?></h5>
							<p class=" wow fadeInUp animated" data-wow-delay="0.8s">
								<?php print_r($banner->information) ?>
							</p>
							<?php if($banner->links != ''){ ?>
								<a class=" wow fadeInUp animated" data-wow-delay="1s" href="<?=$banner->links?>">Read More</a>
							<?php } ?>
					   </div>
					</div>
				</div>
				<?php } ?>
			</div>
		</section>
		<!-- End Slider area -->

		<!-- Professional Builde -->
		<section class="professional_builder row">
			<div class="container">
			   <div class="row builder_all">
					<div class="col-md-3 col-sm-6 builder">
						<i class="fa fa-home" aria-hidden="true"></i>
						<h4>Professional Builde</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
					</div>
					<div class="col-md-3 col-sm-6 builder">
						<i class="fa fa-building" aria-hidden="true"></i>
						<h4>We Deliver Quality</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
					</div>
					<div class="col-md-3 col-sm-6 builder">
						<i class="fa fa-clock-o" aria-hidden="true"></i>
						<h4>Always On Time</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
					</div>
					<div class="col-md-3 col-sm-6 builder">
						<i class="fa fa-thumbs-up" aria-hidden="true"></i>
						<h4>We Are Pasionate</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod </p>
					</div>
			   </div>
			</div>
		</section>
		<!-- End Professional Builde -->

	<?php } ?>

	<?php if(count($aboutus) != 0) { ?>
		<!-- About Us Area -->
		<section class="about_us_area row">
			<div class="container">
				<div class="tittle wow fadeInUp">
					<h2>ABOUT US</h2>
					<!--<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4> -->
				</div>
				<div class="row about_row">
					<div class="who_we_area col-md-7 col-sm-6">
						<div class="subtittle">
							<h2><?=$aboutus[0]->title?></h2>
						</div>
						<?php print_r($aboutus[0]->information); ?>
						<a href="<?=base_url('aboutus')?>" class="button_all">Contact Now</a>
					</div>
					<div class="col-md-5 col-sm-6 about_client">
						<img src="<?=base_url($aboutus[0]->image)?>" alt="<?=$aboutus[0]->title?>">
					</div>
				</div>
			</div>
		</section>
		<!-- End About Us Area -->
	<?php } ?>

    <!-- What ew offer Area -->
    <!-- <section class="what_we_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>WHAT WE OFFER</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="row construction_iner">
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="<?=base_url()?>assets/images/cns-1.jpg" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <a href="#">BUILDING CONSTRUCTION</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="<?=base_url()?>assets/images/cns-2.jpg" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-keyboard-o" aria-hidden="true"></i>
                        <a href="#">PROJECT PLANNING</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
                <div class="col-md-4 col-sm-6 construction">
                   <div class="cns-img">
                        <img src="<?=base_url()?>assets/images/cns-3.jpg" alt="">
                   </div>
                   <div class="cns-content">
                        <i class="fa fa-gavel" aria-hidden="true"></i>
                        <a href="#">HOUSE RENOVATION</a>
                        <p>Lorem Ipsum is simply dummy text of the print-ing and typesetting industry. Lorem Ipsum has been the industry's standard dummy </p>
                   </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End What ew offer Area -->

    <!-- Our Features Area -->
    <!-- <section class="our_feature_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Features</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="feature_row row">
                <div class="col-md-6 feature_img">
                    <img src="<?=base_url()?>assets/images/feature-man.jpg" alt="">
                </div>
                <div class="col-md-6 feature_content">
                    <div class="subtittle">
                        <h2>WHY CHOOSE US</h2>
                        <h5>There are many variations of passages of Lorem Ipsum available.</h5>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-wrench" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">30+ YEARS OF EXPERIENCE</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-rocket" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">QUALIFIED EXPERTS</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                    <div class="media">
                        <div class="media-left">
                            <a href="#">
                                <i class="fa fa-users" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="media-body">
                            <a href="#">Best Customer Services</a>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting indus-try. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Our Features Area -->

    <!-- Our Services Area -->
    <!-- <section class="our_services_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Services</h2>
                <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
            </div>
            <div class="portfolio_inner_area">
                <div class="portfolio_filter">
                    <ul>
                        <li data-filter="*" class="active"><a href=""> All</a></li>
                        <li data-filter=".photography"><a href="">ARCHITECTURE</a></li>
                        <li data-filter=".branding"><a href="">Building</a></li>
                        <li data-filter=".webdesign"><a href="">CONSTRUCTION</a></li>
                        <li data-filter=".adversting"><a href="">DESIGN</a></li>
                        <li data-filter=".painting"><a href="">Painting</a></li>
                    </ul>
                </div>
                <div class="portfolio_item">
                   <div class="grid-sizer"></div>
                    <div class="single_facilities col-xs-4 p0 painting photography adversting">
                       <div class="single_facilities_inner">
                          	<img src="<?=base_url()?>assets/images/gallery/sv-1.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 webdesign">
                       <div class="single_facilities_inner">
                          	<img src="<?=base_url()?>assets/images/gallery/sv-2.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 painting p0 photography branding">
                       <div class="single_facilities_inner">
                          	<img src="<?=base_url()?>assets/images/gallery/sv-3.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 adversting webdesign adversting">
                       <div class="single_facilities_inner">
                          	<img src="<?=base_url()?>assets/images/gallery/sv-4.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 painting adversting branding">
                       <div class="single_facilities_inner">
                          	<img src="<?=base_url()?>assets/images/gallery/sv-5.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="single_facilities col-xs-4 p0 webdesign photography magazine adversting">
                       <div class="single_facilities_inner">
                          	<img src="<?=base_url()?>assets/images/gallery/sv-6.jpg" alt="">
                            <div class="gallery_hover">
                                <h4>Construction</h4>
                                <ul>
                                    <li><a href="#"><i class="fa fa-link" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- End Our Services Area -->

     <?php if (count($projects) != 0){?>
		<!-- Our Featured Works Area -->
		<section class="featured_works row" data-stellar-background-ratio="0.3">
			<div class="tittle wow fadeInUp">
				<h2>Our Project Works</h2>
				<!--<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>-->
			</div>
			<div class="featured_gallery">
				<?php foreach ($projects as $project){ ?>
					<div class="col-md-3 col-sm-4 col-xs-6 gallery_iner p0">
						<img src="<?=base_url($project->image)?>" alt="">
						<div class="gallery_hover">
							<h4><?=$project->title?></h4>
							<a href="<?=base_url($project->image)?>" target="_blank">VIEW PROJECT</a>
						</div>
					</div>
				<?php } ?>
			</div>
		</section>
		<!-- End Our Featured Works Area -->
	<?php } ?>

    <!-- Our Testimonial Area -->
    <section class="testimonial_area row hidden">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our TESTIMONIALS</h2>
                <h4>What the clients says about us</h4>
            </div>
            <div class="testimonial_carosel">
                <div class="item">
                    <div class="media">
                        <!-- <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="<?=base_url()?>assets/images/testimonial-2.jpg" alt="">
                            </a>
                        </div> -->
                        <div class="media-body">
                            <h4 class="media-heading">Emran Khan</h4>
                            <h6>Web Developer</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
                <div class="item">
                    <div class="media">
                        <!-- <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="<?=base_url()?>assets/images/testimonial-3.jpg" alt="">
                            </a>
                        </div> -->
                        <div class="media-body">
                            <h4 class="media-heading">Emran Khan</h4>
                            <h6>Web Developer</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
                <div class="item">
                    <div class="media">
                        <!-- <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="<?=base_url()?>assets/images/testimonial-1.jpg" alt="">
                            </a>
                        </div> -->
                        <div class="media-body">
                            <h4 class="media-heading">Prodip ghosht</h4>
                            <h6>Brand Manager</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
                <div class="item">
                    <div class="media">
                        <!-- <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="<?=base_url()?>assets/images/testimonial-2.jpg" alt="">
                            </a>
                        </div> -->
                        <div class="media-body">
                            <h4 class="media-heading">Jakaria Khan</h4>
                            <h6>Brand Manager</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
                <div class="item">
                    <div class="media">
                        <!-- <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="<?=base_url()?>assets/images/testimonial-1.jpg" alt="">
                            </a>
                        </div> -->
                        <div class="media-body">
                            <h4 class="media-heading">Prodip ghosht</h4>
                            <h6>Brand Manager</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
                <div class="item">
                    <div class="media">
                        <!-- <div class="media-left">
                            <a href="#">
                                <img class="media-object" src="<?=base_url()?>assets/images/testimonial-2.jpg" alt="">
                            </a>
                        </div> -->
                        <div class="media-body">
                            <h4 class="media-heading">Jakaria Khan</h4>
                            <h6>Brand Manager</h6>
                        </div>
                    </div>
                    <p><i class="fa fa-quote-right" aria-hidden="true"></i>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio<i class="fa fa-quote-left" aria-hidden="true"></i></p>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our testimonial Area -->

	<?php if(count($blogdata) != 0){ ?>
		<!-- Our Latest Blog Area -->
		<section class="latest_blog_area">
			<div class="container">
				<div class="tittle wow fadeInUp">
					<h2>Our Latest Blog</h2>
				</div>
				<div class="row latest_blog">
					<?php foreach ($blogdata as $blog){ ?>
						<div class="col-md-4 col-sm-6 blog_content">
							<img src="<?=base_url($blog->image)?>" alt="<?=$blog->title?>">
							<a href="<?=base_url('blogartical/'.$blog->id.'/details')?>" class="blog_heading"><?=$blog->title?></a>
							<!--<h4><small>by  </small><a href="#">Emran Khan</a><span>/</span><small>ON </small> <?php //date('d M, Y',strtotime($blog->created)) ?></h4>-->
							<!--<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sagittis iaculis velit in tristique. Curabitur ac urna urna. Sed sollicitudin at nisi sed accumsan... <a href="#">Read More</a></p>-->
						</div>
					<?php } ?>
				</div>
			</div>
		</section>
		<!-- End Our Latest Blog Area -->
	<?php } ?>

<?php include 'footer.php'; ?>
