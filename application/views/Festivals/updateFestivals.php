<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Update <small>Festival</small></h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li class="active"><a href="<?php echo site_url('/Festivals/index') ?>">New</a></li>
                <li><a href="<?php echo site_url('/Festivals/index') ?>">List</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="new">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form action="<?php echo  site_url('Festivals/update'); ?>" method = 'POST'>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Name:</label>
                                            <input class="form-control" type="text" id="name" name='name' value='<?php echo $festival -> name ?>'>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Address:</label>
                                            <input class="form-control" type="text" id="address" name='address' value='<?php echo $festival -> address ?>'>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Start date:</label>
                                            <input class="form-control" type="date" id="startDate" name='startDate' value='<?php echo $festival -> startDate ?>'>
                                        </div>
                                    </div>  	 	
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">End date:</label>
                                            <input class="form-control" type="date" id="endDate" name='endDate' value='<?php echo $festival -> endDate ?>'>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Descripction:</label>
                                            <textarea name="descripction" id="descripction" class="form-control"><?php echo $festival -> description ?></textarea>
                                        </div>
                                    </div> 	
                                    <div class="col-md-6">
                                        <div class="form-group label-floating">
                                            <label class="control-label">User:</label>
                                            <select name="user" id="user" class="form-control">
                                                <?php foreach ($users as $user): ?>
                                                    <option value="<?php echo $user -> id_use; ?>" 
                                                        <?php echo ($user -> id_use == $festival -> user_id ) ? 'selected' : ''; ?>>
                                                        <?php echo $user->name; ?>
                                                    </option>
                                                <?php endforeach; ?>
                                            </select>
                                            <input class="form-control" type="text" id="id" name='id' value='<?php echo $festival -> id_fes ?>' hidden>
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
                        