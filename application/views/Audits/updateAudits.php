<!-- Content page -->
<div class="container-fluid">
    <div class="page-header">
        <h1 class="text-titles"><i class="zmdi zmdi-book zmdi-hc-fw"></i>Update <small>Audits</small></h1>
    </div>
</div>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-12">
            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
                <li class="active"><a href="<?php echo site_url('/Audits/index') ?>">New</a></li>
                <li><a href="<?php echo site_url('/Audits/index') ?>">List</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="new">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form action="<?php echo  site_url('Audits/update'); ?>" method = 'POST'>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">                                                    
                                                <label class="control-label">Date:</label>
                                                <input class="form-control" type="date" id="date" name='date' value="<?php echo $audits -> date; ?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Description:</label>
                                                <textarea class="form-control" id="description" name='description'><?php echo $audits -> description; ?> </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Gender:</label>
                                                <select name='gender' id='gender' class="form-control">
                                                    <option value='F' <?php echo $audits -> gender == 'F' ? 'selected' : '' ?>>Fameils</option>
                                                    <option value='M' <?php echo $audits -> gender == 'M' ? 'selected' : '' ?>>Males</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">User:</label>
                                                <select name="user" id="user" class="form-control">
                                                    <?php foreach ($users as $user): ?>
                                                    <option value="<?php echo $user -> id_use; ?>" <?php echo $user -> id_use == $audits -> user ? 'selected' : '' ?>><?php echo $user -> name; ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                                <input class="form-control" type="text" id="id" name='id' value='<?php echo $audits -> id_audit?>' hidden>
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
                        