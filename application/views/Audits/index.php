    <!-- Content page -->
    <div class="container-fluid">
        <div class="page-header">
            <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Audits </h1>
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
                                    <form action="<?php echo  site_url('Audits/save'); ?>" method = 'POST'>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">                                                    
                                                    <label class="control-label">Date:</label>
                                                    <input class="form-control" type="date" id="date" name='date'>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Description:</label>
                                                    <textarea class="form-control" id="description" name='description'></textarea>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Gender:</label>
                                                    <select name='gender' id='gender' class="form-control">
                                                        <option value='F'>Fameils</option>
                                                        <option value='M'>Males</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">User:</label>
                                                    <select name="user" id="user" class="form-control">
                                                        <?php foreach ($users as $user): ?>
                                                        <option value="<?php echo $user -> id_use; ?>"><?php echo $user -> name; ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
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
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Gender</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>  	 	 	 	 	 	 	
                                <tbody>
                                    <?php foreach ($audits as $audit):?>
                                        <tr>	 	 	 	 	 	 		
                                            <td><?php echo $audit -> id_audit; ?></td>
                                            <td><?php echo $audit -> date; ?></td>
                                            <td><?php echo $audit -> description; ?></td>
                                            <td><?php echo $audit -> gender == 'M' ? 'Males':  'Fameils'; ?></td>
                                            <td>
                                                <a href="<?php echo site_url('Audits/getRegisterById');?>/<?php echo $audit -> id_audit ?>" class="btn btn-success btn-raised btn-xs">
                                                    <i class="zmdi zmdi-refresh"></i>
                                                </a>
                                                <a href="<?php echo site_url('Audits/delete');?>/<?php echo $audit -> id_audit ?>" class="btn btn-danger btn-raised btn-xs" onclick="return confirm('Desea eliminar el usuario?');">
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