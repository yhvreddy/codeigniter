<?php include 'header.php'; ?>
    <!-- Banner area -->
    <section class="banner_area" data-stellar-background-ratio="0.5">
        <h2>Contact Us</h2>
        <ol class="breadcrumb">
            <li><a href="<?=base_url()?>">Home</a></li>
            <li><a href="#" class="active">Contact Us</a></li>
        </ol>
    </section>
    <!-- End Banner area -->

    <!-- Map -->
    <div class="contact_map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d233533.81021805512!2d90.44069804466251!3d23.85534870087626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1482565625375"></iframe>
    </div>
    <!-- End Map -->

    <!-- All contact Info -->
    <section class="all_contact_info">
        <div class="container">
            <div class="row contact_row">
                <div class="col-sm-6 contact_info">
                    <h2>Contact Info</h2>
                    <div class="location">
                        <div class="location_laft">
                            <a class="f_location" href="#">location</a>
                            <a href="#">phone</a>
                            <a href="#">email</a>
                        </div>
                        <div class="address">
                            <a href="#">Sector # 10, Road # 05, Plot # 31, Uttara, <br> Dhaka 1230 </a>
                            <a href="#">+91 9876543210</a>
                            <a href="#">info@scegroup.in</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 contact_info send_message">
                    <h2>Send Us a Message</h2>
                    <form class="form-inline contact_box" id="contactform" method="post">
                        <input type="text" class="form-control input_box" name="username" required placeholder="Enetr Name *">
                        <input type="tel" maxlength="10" class="form-control input_box" name="usermobile" required placeholder="Your Mobile *">
                        <input type="text" class="form-control input_box" name="useremail" required placeholder="Your Email *">
                        <input type="text" class="form-control input_box" name="usersubject" required placeholder="Subject *">
                        <textarea class="form-control input_box" name="usercontent" placeholder="Message *"></textarea>
                        <button type="submit" class="btn btn-default">Send Message</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

	<script>
		$(document).ready(function () {

			$("#contactform").submit(function(e) {
				e.preventDefault();
				//alert("++++++++++");
				//$("#loaderajax").show();
				var name 	= $("input[name=username]").val();
				var mobile 	= $("input[name=usermobile]").val();
				var email 	= $("input[name=useremail]").val();
				var subject = $("input[name=usersubject]").val();
				var content = $("textarea[name=usercontent]").val();
				var sendata = {name: name, mobile: mobile, email: email, content: content, subject: subject};
				//console.log(sendata);
				$.ajax({
					type: 'POST',
					url: "<?=base_url('users/SendContact')?>",
					data: sendata,
					dataType: 'json',
					success: function (data) {
						console.log(data);
						//$("#loaderajax").hide();
						if (data.status == 1) {
							$("#contactform").trigger("reset");
							swal(data.Message);
						} else {
							$("#contactform").trigger("reset");
							swal(data.Message);
						}
					}
				});
			});
		});
	</script>
    <!-- End All contact Info -->
<?php include 'footer.php'; ?>    
