<?php include "header.php"; ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
        Why choose us
      <small></small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Why choose us</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-5">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Add /edit Why choose us</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <?php if(isset($choosedetails) && count($choosedetails) != 0){ ?>
              <form role="form" method="post" action="<?=base_url('admin/whychooseus/saveEditDetails')?>" enctype="multipart/form-data">
                <div class="box-body">
                  <input type="hidden" name="edit_id" value="<?=$choosedetails[0]->id?>">
				  <div class="form-group">
					<label for="title_name">Title Name</label>
					<input type="text" class="form-control" name="title_name" id="title_name" value="<?=$choosedetails[0]->title?>" placeholder="Enter Title Name">
				  </div>
					<div class="form-group">
						<label for="icon_name">Icon Name</label>
						<input type="text" class="form-control" value="<?=$choosedetails[0]->icons?>" name="icon_name" id="icon_name" placeholder="Icon Ex : fa fa-users">
					</div>
                  <div class="form-group">
                    <label for="UploadedImages">Upload Image</label>
					  <?php if(!empty($choosedetails[0]->image)){ ?>
						  <a href="<?=base_url($choosedetails[0]->image)?>" class="pull-right" target="_blank">Uploaded Image</a>
					  <?php } ?>
                    <input type="file" id="UploadedImages" name="UploadedImages" accept=".png,.jpg,.jpeg">
                    <p class="help-block">Upload Category image (.png,.jpg,.jpeg).</p>
                    <input type="hidden" name="uploaded_image" value="<?=$choosedetails[0]->image?>">
                  </div>
                </div>
				  <div class="form-group">
					  <label for="Information">Information</label>
					  <textarea class="form-control" id="Information" name="Information" placeholder="Enter Information" rows="4"><?=$choosedetails[0]->information?></textarea>
				  </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Update Why choose us</button>
                </div>
              </form>
            <?php }else{ ?>
              <form role="form" method="post" action="<?=base_url('admin/uploadWhychooseusdetails')?>" enctype="multipart/form-data">
                <div class="box-body">
					<div class="form-group">
                    	<label for="category_name">Title Name</label>
                    	<input type="text" class="form-control" name="title_name" id="category_name" placeholder="Enter Title Name">
                  	</div>
					<div class="form-group">
						<label for="icon_name">Icon Name</label>
						<input type="text" class="form-control" name="icon_name" id="icon_name" placeholder="Icon Ex : fa fa-users">
					</div>
                  <div class="form-group">
                    <label for="UploadedImages">Upload Service Image</label>
                    <input type="file" id="UploadedImages" name="UploadedImages" accept=".png">
                    <p class="help-block">Upload image (.png).</p>
                  </div>
                    <div class="form-group">
                        <label for="Information">Information</label>
                        <textarea class="form-control" id="BannerInformation" name="Information" placeholder="Enter Information" rows="4"></textarea>
                    </div>
                  
                </div>
                <!-- /.box-body -->

                <div class="box-footer">
                  <button type="submit" class="btn btn-primary pull-right">Add Why choose us</button>
                </div>
              </form>
            <?php } ?>
          </div>
          <!-- /.box -->
        </div>
        <!--/.col (left) -->
        <!-- right column -->
        <div class="col-md-7">
          <!-- Horizontal Form -->
          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Why Choose Us List</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
			  <div class="box-body">
				<table class="table table-striped table-bordered">
				  <thead>
					<th>#</th>
					<th>Image</th>
					<th>Title Name</th>
					<th>Information</th>
					<th></th>
				  </thead>
				  <tbody>
					<?php $i = 1; foreach ($choosedata as $key => $value) { ?>
					  <tr>
						<td><?=$i++;?></td>
						<td style="width: 10%;" align="center">
						  <?php
							if(empty($value->icons)){ ?>
							  <img src="<?=base_url($value->image)?>" class="img-circle" width="25px" height="25px">
							<?php }else{ ?>
								<i class="<?=$value->icons?>"></i>
							<?php } ?>
						</td>
						<td><?=$value->title?></td>
						<td>
						  <?=substr($value->information, 0,50).'...';?>
						</td>
						<td>
						  <a href="<?=base_url('admin/whychooseus/'.$value->id.'/edit')?>" onclick="return confirm('Are you sure to edit gallery details..?')"><i class="fa fa-edit"></i></a>&nbsp;
						  <a href="<?=base_url('admin/whychooseus/'.$value->id.'/delete')?>" onclick="return confirm('Are you sure to delete details..?')"><i class="fa fa-trash-o"></i></a>
						</td>
					  </tr>
					<?php } ?>
				  </tbody>
				</table>
			  </div>
          </div>
          <!-- /.box -->
          
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.php"; ?>
