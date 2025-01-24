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
                <li class="active"><a href="<?php echo site_url('/Presentation/index') ?>">New</a></li>
                <li><a href="<?php echo site_url('/Presentation/index') ?>">List</a></li>
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
                        