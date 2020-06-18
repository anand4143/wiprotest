<?php $this->view('templates/frontend/header.php'); ?>

 <!-- Row -->
 <div class="row">
        <div class="col-xl-12">
					<div class="d-flex align-items-center justify-content-between mt-40 mb-20">
						<h4>Assets List</h4>
						<!-- <button class="btn btn-sm btn-link">view all</button> -->
						<span id="notification"><?php echo $this->session->flashdata('updateMessage'); ?></span>
					</div>
						<div class="card">
							<div class="card-body pa-0">
								<div class="table-wrap">
									<div class="table-responsive">
									
										<table class="table table-sm table-hover mb-0">
											<thead>
												<tr>
													<th>S no</th>
													<th>Sap Id</th>
													<th>host Name</th>
													<th>Loopback</th>
													<th>Mac Id</th>
													<th class="w-20">Action</th>
												</tr>
											</thead>
											<tbody>
											<?php
											if($userList && count($userList)){
												$i =1;
											foreach($userList as $user){
											?>
												<tr>
													<td><?php echo $i; ?>
													</td>
													<td><?php echo $user->sapid;?></td>
													<td><?php echo $user->hostname;?></td>
													<td><?php echo $user->loopback;?></td>
													<td><?php echo $user->macid;?></td>
                                                    <td>
														<a href="<?php echo base_url('user/edit/'.$user->id);?>" title="Edit">
															<span class="fa fa-edit"></span>
														</a>
														

														<a href="#" onClick="deleteUser(<?php echo $user->id;?>)" title="Remove">
															<span class="fa fa-remove"></span>
														</a>
													</td>
												</tr>
											<?php $i++;}
											}else{?>
												<tr>
													<td colspan="7" align="center">No record found!</td>
												</tr>	
											<?php }?>
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>		
					</div>
                </div>
                <!-- /Row -->


<?php  $this->view('templates/frontend/footer.php'); ?>


<script>
function deleteUser(id){
	//alert(id);
	var co = confirm("Are you sure want to delete");
	if (co == true) {
		$.ajax({
             url:'<?php echo base_url()?>user/delete',
             type:"post",
             data: "id="+id,
              success: function(data){
				  alert(data)
				  //$("#loader").removeClass('imgloader');
				  
				  if(data){
					alert("Dpdated successfully");

				  }
				location.reload();
           }
         });
	}else{
		return false;
	}
	
			
	
}
</script>