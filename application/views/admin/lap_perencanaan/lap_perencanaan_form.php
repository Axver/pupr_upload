<!doctype html>
<html>
    <head>
        <title>harviacode.com - codeigniter crud generator</title>
        <link rel="stylesheet" href="<?php echo base_url('assets/bootstrap/css/bootstrap.min.css') ?>"/>
        <style>
            body{
                padding: 15px;
            }
        </style>
    </head>
    <body>
        <h2 style="margin-top:0px">Lap_perencanaan <?php echo $button ?></h2>
        <form action="<?php echo $action; ?>" method="post">
	    <div class="form-group">
            <label for="decimal">Tukang <?php echo form_error('tukang') ?></label>
            <input type="text" class="form-control" name="tukang" id="tukang" placeholder="Tukang" value="<?php echo $tukang; ?>" />
        </div>
	    <div class="form-group">
            <label for="decimal">Pekerja <?php echo form_error('pekerja') ?></label>
            <input type="text" class="form-control" name="pekerja" id="pekerja" placeholder="Pekerja" value="<?php echo $pekerja; ?>" />
        </div>
	    <input type="hidden" name="id_lap_perencanaan" value="<?php echo $id_lap_perencanaan; ?>" /> 
	    <button type="submit" class="btn btn-primary"><?php echo $button ?></button> 
	    <a href="<?php echo site_url('lap_perencanaan') ?>" class="btn btn-default">Cancel</a>
	</form>
    </body>
</html>