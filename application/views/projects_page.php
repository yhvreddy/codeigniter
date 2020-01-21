<?php include 'header.php'; ?>
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Our Projects</h2>
        <ol class="breadcrumb">
            <li><a href="<?=base_url()?>">Home</a></li>
            <li><a href="#" class="active">Projects</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

	<?php if (count($projects) != 0){?>
		<div class="constructor">
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
		</div>
	<?php } ?>

<?php include 'footer.php'; ?>    
