    <!-- Content page -->
    <div class="container-fluid">
        <div class="page-header">
            <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Festivals </h1>
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
                                    <form action="<?php echo  site_url('Festivals/save'); ?>" method = 'POST'>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Name:</label>
                                                    <input class="form-control" type="text" id="name" name='name'>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Address:</label>
                                                    <input class="form-control" type="text" id="address" name='address'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Start date:</label>
                                                    <input class="form-control" type="date" id="startDate" name='startDate'>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">End date:</label>
                                                    <input class="form-control" type="date" id="endDate" name='endDate'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Descripction:</label>
                                                    <textarea name="descripction" id="descripction" class="form-control"></textarea>
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
                                        <th class="text-center">Scenary</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-center">Duration</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>  	 	 	 	 	 	 	
                                <tbody>
                                    <?php foreach ($presentations as $presentation):?>
                                        <tr>	 	 	 	 	 	 		
                                            <td><?php echo $presentation -> id_prese; ?></td>
                                            <td><?php echo $presentation -> scenery; ?></td>
                                            <td><?php echo $presentation -> date; ?></td>
                                            <td><?php echo $presentation -> duration; ?></td>
                                            <td>
                                                <a href="<?php /*echo site_url('Festivals/getRegisterById');?>/<?php echo $festival -> id_fes*/ ?>" class="btn btn-success btn-raised btn-xs">
                                                    <i class="zmdi zmdi-refresh"></i>
                                                </a>
                                                <a href="<?php /*echo site_url('Festivals/delete');?>/<?php echo $festival -> id_fes*/ ?>" class="btn btn-danger btn-raised btn-xs" onclick="return confirm('Desea eliminar el usuario?');">
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