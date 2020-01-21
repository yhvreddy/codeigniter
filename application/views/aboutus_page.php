<?php include 'header.php'; ?>
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>About Us</h2>
        <ol class="breadcrumb">
            <li><a href="<?=base_url()?>">Home</a></li>
            <li><a href="#" class="active">About Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

	<?php if(count($aboutus) != 0): ?>
    <!-- About Us Area -->
    <section class="about_us_area row">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>ABOUT US</h2>
            </div>
            <div class="row about_row">
                <div class="col-md-5 col-sm-6 about_client about_pages_client">
                    <img src="<?=base_url($aboutus[0]->image)?>" alt="">
                </div>
                <div class="who_we_area col-md-7 col-sm-6">
                    <div class="subtittle">
                        <h2><?=$aboutus[0]->title?></h2>
                    </div>
                    <?php print_r($aboutus[0]->information) ?>
                    <a href="<?=base_url('contactus')?>" class="button_all">Contact Now</a>
                </div>
            </div>
        </div>
    </section>
    <!-- End About Us Area -->
	<?php endif; ?>

	<?php if (count($whychoose) != 0): ?>
    <!-- Our Features Area -->
    <section class="our_feature_area">
        <div class="container">
            <div class="tittle wow fadeInUp">
                <h2>Our Features</h2>
                <!--<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>-->
            </div>
            <div class="feature_row row">
                <div class="col-md-6 feature_img">
                    <img src="<?=base_url()?>assets/images/feature-man.jpg" alt="">
                </div>
                <div class="col-md-6 feature_content">
                    <div class="subtittle">
                        <h2>WHY CHOOSE US</h2>
						<!--<h5>There are many variations of passages of Lorem Ipsum available.</h5>-->
                    </div>
					<?php foreach ($whychoose as $value): ?>
						<div class="media">
							<div class="media-left">
								<a href="#">
									<i class="<?=$value->icons?>" aria-hidden="true"></i>
								</a>
							</div>
							<div class="media-body">
								<a href="#"><?=$value->title?></a>
								<?php print_r($value->information); ?>
							</div>
						</div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Features Area -->
	<?php endif; ?>

<?php include 'footer.php'; ?>    
