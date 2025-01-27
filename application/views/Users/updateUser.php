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
                <li class="active"><a href="<?php echo site_url('/Users/index') ?>">New</a></li>
                <li><a href="<?php echo site_url('/Users/index') ?>">List</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="new">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form action="<?php echo  site_url('Users/update'); ?>" method = 'POST'>
                                    <div class="row">
                                        <div class="col-md-6">	
                                            <div class="form-group label-floating">
                                                <label class="control-label">C.I.:</label>
                                                <input class="form-control" type="number" id="ci" name='ci' value='<?php echo $user -> ci ?>'>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Name:</label>
                                                <input class="form-control" type="text" id="name" name='name' value='<?php echo $user -> name ?>'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Last name:</label>
                                                <input class="form-control" type="text" id="lastName" name='lastName' value='<?php echo $user -> last_name ?>'>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Birthdate:</label>
                                                <input class="form-control" type="date" id="birthdate" name='birthdate' value='<?php echo $user -> birthdate ?>'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Email:</label>
                                                <input class="form-control" type="email" id='email' name='email' value='<?php echo $user -> email ?>'>
                                            </div>
                                        </div> 	
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Password:</label>
                                                <input class="form-control" type="text" id='password' name='password' value='<?php echo $user -> password ?>'>
                                            </div>
                                        </div> 	
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Type user:</label>
                                                <select name="type_user" id="type_user" class="form-control">
                                                    <option value="1" <?php echo $user->type_user_id == 1 ? 'selected' : ''; ?>>Administrator</option>
                                                    <option value="2" <?php echo $user->type_user_id == 2 ? 'selected' : ''; ?>>Singer</option>
                                                    <option value="3" <?php echo $user->type_user_id == 3 ? 'selected' : ''; ?>>Organizer</option>
                                                    <option value="4" <?php echo $user->type_user_id == 4 ? 'selected' : ''; ?>>Assistant</option>
                                                </select>
                                            </div>
                                        </div>          
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <input class="form-control" type="number" id="id" name='id' value='<?php echo $user -> id_use ?>' style="visibility: hidden;">
                                            </div>
                                        </div>                                         
                                    </div>
                                    <p class="text-center">
                                        <button type="submit" class="btn btn-success btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Save</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Script -->

<script>
    $(document).ready(function () {
        $('#form').validate({
            rules: {
                ci: {
                    required: true,
                    number: true,
                    minlength: 10
                },
                name: {
                    required: true,
                    minlength: 3
                },
                lastName: {
                    required: true,
                    minlength: 3
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
                },
                type_user: {
                    required: true
                }
            },
            messages: {
                ci: {
                    required: 'The field is required',
                    number: 'The field must be a number', 
                    minlength: 'The field must be at least 10 characters'
                },
                name: {
                    required: 'The field is required',
                    minlength: 'The field must be at least 3 characters'
                },
                lastName: {
                    required: 'The field is required',
                    minlength: 'The field must be at least 3 characters'
                },
                birthdate: {
                    required: 'The field is required'
                },
                email: {
                    required: 'The field is required',
                    email: 'The field must be an email'
                },
                password: {
                    required: 'The field is required',
                    minlength: 'The field must be at least 8 characters'
                },
                type_user: {
                    required: 'The field is required'
                }
            }
        });
    });
</script>
                        