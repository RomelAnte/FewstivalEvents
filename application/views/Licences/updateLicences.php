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
                <li class="active"><a href="<?php echo site_url('/Licences/index') ?>">New</a></li>
                <li><a href="<?php echo site_url('/Licences/index') ?>">List</a></li>
            </ul>
            <div id="myTabContent" class="tab-content">
                <div class="tab-pane fade active in" id="new">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-xs-12 col-md-10 col-md-offset-1">
                                <form action="<?php echo  site_url('Licences/update'); ?>" method = 'POST'>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Type:</label>
                                                <select name="type" id="type" class="form-control">
                                                    <option value="Private" <?php echo ($licences -> type == 'Private' ) ? 'selected' : ''; ?>>Private</option>
                                                    <option value="Open Sourse" <?php echo ($licences -> type == 'Open Sourse' ) ? 'selected' : ''; ?>>Open Sourse</option>
                                                </select>
                                            </div>
                                        </div>                                               
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Cost:</label>
                                                <input class="form-control" type="number" id="cost" name='cost' min="0" step="0.01" value='<?php echo $licences -> cost ?>'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Acronym:</label>
                                                <input class="form-control" type="text" id="acronym" name='acronym' value='<?php echo $licences -> acronym ?>'>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group label-floating">
                                                <label class="control-label">Status:</label>
                                                <select name="status" id="status" class="form-control">
                                                    <option value="1" <?php echo ($licences -> status == 1 ) ? 'selected' : ''; ?>>Active</option>
                                                    <option value="0" <?php echo ($licences -> status == 0 ) ? 'selected' : ''; ?>>Inactive</option>
                                                </select>
                                                <input class="form-control" type="text" id="id" name='id' value='<?php echo $licences -> id_lic ?>' hidden>
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
                        