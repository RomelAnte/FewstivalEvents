    <!-- Content page -->
    <div class="container-fluid">
        <div class="page-header">
            <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> Presentations </h1>
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
                                    <form action="<?php echo  site_url('Presentations/save'); ?>" method = 'POST' id="form_register">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Scenary:</label>
                                                    <input class="form-control" type="text" id="name" name='name'>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Date:</label>
                                                    <input class="form-control" type="date" id="date" name='date'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Hour:</label>
                                                    <input class="form-control" type="time" id="hour" name='hour'>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Duration:</label>
                                                    <input class="form-control" type="number" id="duration" name='duration'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Festival:</label>
                                                    <select name="festival" id="festival" class="form-control">
                                                        <?php foreach ($festivals as $festival): ?>
                                                        <option value="<?php echo $festival -> id_fes; ?>"><?php echo $festival -> name; ?></option>
                                                        <?php endforeach; ?>
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
                                                <a href="<?php echo site_url('Presentations/getRegisterById');?>/<?php echo $festival -> id_fes ?>" class="btn btn-success btn-raised btn-xs">
                                                    <i class="zmdi zmdi-refresh"></i>
                                                </a>
                                                <a href="<?php echo site_url('Presentations/delete');?>/<?php echo $festival -> id_fes ?>" class="btn btn-danger btn-raised btn-xs" onclick="return confirm('Desea eliminar el usuario?');">
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
<script>
    $(document).ready(function() {
        $('#form_register').validate({
            rules: {
                name: {
                    required: true,
                    minlength: 10
                },
                date: {
                    required: true
                },
                hour: {
                    required: true
                },
                duration: {
                    required: true,
                    number: true
                },
                festival: {
                    required: true
                },
                user: {
                    required: true
                }
            },
            messages: {
                name: {
                    required: "The name is required",
                    minlength: "The name must have at least 10 characters"
                },
                date: {
                    required: "The date is required"
                },
                hour: {
                    required: "The hour is required"
                },
                duration: {
                    required: "The duration is required",
                    number: "The duration must be a number"
                },
                festival: {
                    required: "The festival is required"
                },
                user: {
                    required: "The user is required"
                }
            }
        });
    });
</script>