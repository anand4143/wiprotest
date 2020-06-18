<?php $this->view('templates/frontend/header.php'); ?>

<!-- Row -->
<div class="row">
	<div class="col-xl-12">
		<div class="d-flex align-items-center justify-content-between mt-40 mb-20">
			<h4>Edit</h4>
			<a href="<?php echo base_url('dashboard/landing');?>" class="btn btn-sm btn-link">List</a>
		</div>
		 <?php 
				$attributes = array('class' => 'form-horizontal', 'id' => 'frmUser', 'name' => 'frmUser');
				echo form_open('user/update/'.$user->id, $attributes);
		 ?>
		<div class="card">
		   <div class="card-header">
			  <strong>User</strong>
		   </div>
		   <div class="card-body">
                <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">SAP ID</label>
					<div class="col-md-9">
					   <input class="form-control" type="text" id="sapid"  name="sapid" value="<?php echo set_value('sapid', $user->sapid); ?>" maxlength="128" placeholder="Sap id">
					   <?php echo form_error('sapid', '<span class="help-block text-danger">', '</span>'); ?>
					</div>
                 </div>
                 <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">HOST NAME</label>
					<div class="col-md-9">
					   <input class="form-control" type="text" id="hostname"  name="hostname" value="<?php echo set_value('hostname', $user->hostname); ?>" maxlength="128" placeholder="Enter hostname">
					   <?php echo form_error('hostname', '<span class="help-block text-danger">', '</span'); ?>
					</div>
                 </div>

				 <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">Loopback</label>
					<div class="col-md-9">
					   <input class="form-control" type="text" id="loopback"  name="loopback" value="<?php echo set_value('loopback', $user->loopback); ?>" maxlength="128" placeholder="Enter loopback">
					   <?php echo form_error('', '<span class="help-block text-danger">', '</span>'); ?>
					</div>
                 </div>
                 <div class="form-group row">
					<label class="col-md-3 col-form-label" for="text-input">MAC ID</label>
					<div class="col-md-9">
					   <input class="form-control" type="text" id="macid"  name="macid" value="<?php echo set_value('macid', $user->macid); ?>" maxlength="128" placeholder="Enter last name">
					   <?php echo form_error('macid', '<span class="help-block text-danger">', '</span>'); ?>
					</div>
				 </div>
				 
				 
		   </div>
		   <div class="card-footer ">
			  <button class="btn btn-sm btn-primary" type="submit">
			  <i class="fa fa-dot-circle-o"></i> Save </button>
			  
		   </div>
		</div>
		 <?php echo form_close();?>
	</div>
</div>
<!-- /Row -->

<?php  $this->view('templates/frontend/footer.php'); ?>
