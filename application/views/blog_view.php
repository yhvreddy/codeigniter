<?php include 'header.php'; ?>
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Blog Details</h2>
        <ol class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="#" class="active">Blog</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- blog area -->
    <section class="blog_all">
        <div class="container">
            <div class="row m0 blog_row">
                <div class="col-sm-8 main_blog">
					<?php if (count($blogdetails) != 0): ?>
						<img src="<?=base_url($blogdetails[0]->image)?>" alt="<?=$blogdetails[0]->title?>">
						<div class="col-xs-1 p0">
						   <div class="blog_date">
							   <a href="#"><?=date('d',strtotime($blogdetails[0]->created))?></a>
								<a href="#"><?=date('M',strtotime($blogdetails[0]->created))?></a>
						   </div>
						</div>
						<div class="col-xs-11 blog_content">
							<a class="blog_heading" href="#"><?=$blogdetails[0]->title?></a>
							
							<!--<ul class="like_share">
								<li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>3</a></li>
								<li><a href="#"><i class="fa fa-heart" aria-hidden="true"></i>10</a></li>
								<li><a href="#"><i class="fa fa-share-alt" aria-hidden="true"></i></a></li>
							</ul> -->
							<?=$blogdetails[0]->information?>
							<!--<div class="tag">
								<h4>TAG</h4>
								<a href="#">PAINTING</a>
								<a href="#">CONSTRUCTION</a>
								<a href="#">PAINTING</a>
							</div>-->
						</div>
						<!--<div class="client_text">
							<img class="img-circle" src="images/testimonial-4.jpg" alt="">
							<a class="client_name" href="#">Emran Khan</a>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
							<a class="control button_all" href="#"><i class="fa fa-long-arrow-left" aria-hidden="true"></i> Construction Data Company</a>
							<a class="control button_all" href="#">Best Construction Management <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
						</div>
						<div class="comment_area">
							<h3>2 Comment</h3>
							<div class="media">
								<div class="media-left">
									<a href="#">
										<img class="media-object" src="images/testimonial-4.jpg" alt="">
									</a>
								</div>
								<div class="media-body">
									<a class="media-heading" href="#">Emran Khan</a>
									<h5>Oct 18, 2016</h5>
									<p>Curabitur eleifend mattis velit, gravida posuere mauris dapibus non.</p>
									<a class="reply" href="#">Reply</a>
								</div>
							</div>
						</div>
						<div class="comment_area reply_comment">
							<div class="media">
								<div class="media-left">
									<a href="#">
										<img class="media-object" src="images/testimonial-1.jpg" alt="">
									</a>
								</div>
								<div class="media-body">
									<a class="media-heading" href="#">Prodip Ghosh</a>
									<h5>Oct 18, 2016</h5>
									<p>Curabitur eleifend mattis velit, gravida posuere mauris dapibus non.</p>
									<a class="reply" href="#">Reply</a>
								</div>
							</div>
						</div>
						<div class="post_comment">
                        <h3>Post A Comment</h3>
                        <form class="comment_box">
                           <div class="col-md-6">
                               <h4>Name</h4>
                               <input type="text" class="form-control input_box" id="fullname" placeholder="">
                           </div>
                           <div class="col-md-6">
                               <h4>Email</h4>
                               <input type="text" class="form-control input_box" id="email" placeholder="">
                           </div>
                           <div class="col-md-12">
                               <h4>Your Comment</h4>
                               <textarea class="form-control input_box" placeholder=""></textarea>
                               <button type="submit">Post Comment</button>
                           </div>
                        </form>
                    </div>-->
					<?php endif; ?>
                </div>


                <div class="col-sm-4 widget_area">
					<?php if(count($blogdata) != 0): ?>
                    <div class="resent">
                        <h3>RECENT POSTS</h3>
						<?php foreach ($blogdata as $blog): if ($blog->id != $blogdetails[0]->id): ?>
							<div class="media">
								<div class="media-left">
									<a href="#">
										<img class="media-object" src="<?=base_url($blog->image)?>" alt="<?=$blog->title?>" width="80px" height="50px">
									</a>
								</div>
								<div class="media-body">
									<a href="<?=base_url('blogartical/'.$blog->id.'/details')?>"><?=$blog->title?>
									<h6><?=date('d M, Y',strtotime($blog->created))?></h6>
									</a>
								</div>
							</div>
						<?php endif; endforeach; ?>
                    </div>
					<?php endif; ?>
                    <!--<div class="resent">
                        <h3>CATEGORIES</h3>
                        <ul class="architecture">
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Construction</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Architecture</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Building</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>Design</a></li>
                        </ul>
                    </div>
                    <div class="resent">
                        <h3>ARCHIVES</h3>
                        <ul class="architecture">
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>February 2016</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>April 2016</a></li>
                            <li><a href="#"><i class="fa fa-arrow-right" aria-hidden="true"></i>June 2016</a></li>
                        </ul>
                    </div>
                    <div class="search">
                        <input type="search" name="search" class="form-control" placeholder="Search">
                    </div>
                    <div class="resent">
                        <h3>Tag</h3>
                        <ul class="tag">
                            <li><a href="#">PAINTING</a></li>
                            <li><a href="#">CONSTRUCTION</a></li>
                            <li><a href="#">Architecture</a></li>
                            <li><a href="#">Building</a></li>
                            <li><a href="#">Design</a></li>
                            <li><a href="#">Design</a></li>
                        </ul>
                    </div>-->
                </div>
            </div>
        </div>
    </section>
    <!-- End blog area -->
<?php include 'footer.php'; ?>
