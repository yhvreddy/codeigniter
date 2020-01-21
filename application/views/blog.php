<?php include 'header.php'; ?>

	<!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Our Blog</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#" class="active">Blog</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

	<?php if(count($blogdata) != 0): ?>
    	<!-- blog-2 area -->
		<section class="blog_tow_area">
			<div class="container">
			   <div class="row blog_tow_row">
				<?php foreach ($blogdata as  $blog): ?>
				   <div class="col-md-4 col-sm-6">
						<div class="renovation">
							<img src="<?=base_url($blog->image)?>" alt="">
							<div class="renovation_content">
								<a class="clipboard" href="#">
									<i class="fa fa-clipboard" aria-hidden="true"></i>
								</a>
								<a class="tittle" href="<?=base_url('blogartical/'.$blog->id.'/details')?>"><?=$blog->title?>  <span class="pull-right"><i class="fa fa-calendar" aria-hidden="true"></i> <?=date('d M, Y',strtotime($blog->created))?></span></a>
							</div>
						</div>
					</div>
				<?php endforeach; ?>
			   </div>
			</div>
		</section>
    	<!-- End blog-2 area -->
	<?php endif; ?>
<?php include 'footer.php'; ?>
