    <!-- Content page -->
    <div class="container-fluid">
        <div class="page-header">
            <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i> User </h1>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12">
                <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                    <li ><a href="#new" data-toggle="tab">New</a></li>
                    <li class="active"><a href="#list" data-toggle="tab">List</a></li>
                </ul>
                <div id="myTabContent" class="tab-content">
                    <div class="tab-pane fade active in" id="new">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-xs-12 col-md-10 col-md-offset-1">
                                    <form action="<?php echo  site_url('Users/save'); ?>" method = 'POST' id="form_register">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">C.I.:</label>
                                                    <input class="form-control" type="number" id="ci" name='ci'>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Name:</label>
                                                    <input class="form-control" type="text" id="name" name='name'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Last name:</label>
                                                    <input class="form-control" type="text" id="lastName" name='lastName'>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Birthdate:</label>
                                                    <input class="form-control" type="date" id="birthdate" name='birthdate'>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Email:</label>
                                                    <input class="form-control" type="email" id='email' name='email'>
                                                </div>
                                            </div> 	
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Password:</label>
                                                    <input class="form-control" type="password" id='password' name='password'>
                                                </div>
                                            </div> 	
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group label-floating">
                                                    <label class="control-label">Type user:</label>
                                                    <select name="type_user" id="type_user" class="form-control">
                                                    <option value="1">Administrator</option>
                                                    <option value="2">Singer</option>
                                                    <option value="3">Organizer</option>
                                                    <option value="4">Assistant</option>
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
                                        <th class="text-center">CI</th>
                                        <th class="text-center">Name</th>
                                        <th class="text-center">Last name</th>
                                        <th class="text-center">Birthdate</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Password</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user):?>
                                        <tr>
                                            <td><?php echo $user -> id_use; ?></td>
                                            <td><?php echo $user -> ci; ?></td>
                                            <td><?php echo $user -> name; ?></td>
                                            <td><?php echo $user -> last_name; ?></td>
                                            <td><?php echo $user -> birthdate; ?></td>
                                            <td><?php echo $user -> email; ?></td>
                                            <td><?php echo $user -> password; ?></td>
                                            <td>
                                                <a href="<?php echo site_url('Users/getRegisterById');?>/<?php echo $user -> id_use ?>" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a>
                                                <a href="<?php echo site_url('Users/delete');?>/<?php echo $user -> id_use ?>" class="btn btn-danger btn-raised btn-xs" onclick="return confirm('Desea eliminar el usuario?');"><i class="zmdi zmdi-delete"></i></a>
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
                ci: {
                    required: true,
                    number: true,
                    minlength: 10,
                },
                name: {
                    required: true,
                    minlength: 3,
                },
                lastName: {
                    required: true,
                    minlength: 3,
                },
                birthdate: {
                    required: true
                },
                email: {
                    required: true,
                    email: true
                },
                password: {
                    required: true,
                    minlength: 8
                }
            },
            messages: {
                ci: {
                    required: "The CI is required",
                    number: "The CI must be a number",
                    minlength: "The CI must have at least 10 characters"
                },
                name: {
                    required: "The name is required",
                    minlength: "The name must have at least 3 characters"
                },
                lastName: {
                    required: "The last name is required",
                    minlength: "The last name must have at least 3 characters"
                },
                birthdate: {
                    required: "The birthdate is required"
                },
                email: {
                    required: "The email is required",
                    email: "The email is invalid",
                },
                password: {
                    required: "The password is required",
                    minlength: "The password must have at least 8 characters"
                }
            }
        });
    });
</script>