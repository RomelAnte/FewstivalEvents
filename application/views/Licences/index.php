		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Licences </h1>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
						<li class="active"><a href="#new" data-toggle="tab">New</a></li>
						<li><a href="#list" data-toggle="tab">List</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
										<form action="<?php echo  site_url('Licences/save'); ?>" method = 'POST'>
											<div class="row">
												<div class="col-md-6">
													<div class="form-group label-floating">
													  <label class="control-label">Type:</label>
														<select name="type" id="type" class="form-control">
															<option value="Private">Private</option>
															<option value="Open Sourse">Open Sourse</option>
														</select>
													</div>
												</div>                                               
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Cost:</label>
                                                      <input class="form-control" type="number" id="cost" name='cost' min="0" step="0.01">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group label-floating">
                                                      <label class="control-label">Acronym:</label>
                                                      <input class="form-control" type="text" id="acronym" name='acronym'>
                                                    </div>
                                                </div>
                                            </div>
										    <p class="text-center">
										    	<button type="submit" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center" id="table_user">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Type</th>
											<th class="text-center">Cost</th>
											<th class="text-center">Acronym</th>
											<th class="text-center">Status</th>
											<th class="text-center">Action</th>
										</tr>
									</thead>  	 	 	 	 	 	 	
									<tbody>
                                        <?php foreach ($licences as $licence):?>
                                            <tr>
                                                <td><?php echo $licence -> id_lic; ?></td>
                                                <td><?php echo $licence -> type; ?></td>
                                                <td><?php echo $licence -> cost; ?></td>
                                                <td><?php echo $licence -> acronym; ?></td>
                                                <td><?php echo $licence -> status; ?></td>
                                                <td>
                                                    <a href="<?php echo site_url('Licences/getRegisterById');?>/<?php echo $licence -> id_lic ?>" class="btn btn-success btn-raised btn-xs">
														<i class="zmdi zmdi-refresh"></i>
													</a>
                                                    <a href="<?php echo site_url('Licences/delete');?>/<?php echo $licence -> id_lic ?>" class="btn btn-danger btn-raised btn-xs" onclick="return confirm('Desea eliminar el usuario?');">
														<i class="zmdi zmdi-delete"></i>
													</a>
                                                </td>
                                            </tr>
                                        <?php endforeach; ?>
									</tbody>
								</table>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>