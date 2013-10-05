<html>
  <head>
    <meta charset="utf-8" />
    <title>quan ly role</title>
    <link href="<?php echo base_url('format/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
    <script src="<?php echo base_url('format/bootstrap/js/bootstrap.js') ?>"></script> 
</head>
<body>
  <?php echo validation_errors();?>
  <?php echo form_open('/role/common/add_excute'); ?>
    <div class="input-group">
      <span class="input-group-addon">Role Name </span></br>
          <input type="text" class="form-control" placeholder="RoleName" name="param_role_name">
    </div>
    <div class="input-group">
    <span class="input-group-addon">Descreption </span></br>
    <input type="text" class="form-control" placeholder="Descrition" name="param_role_description">
    </div>
    <input type="submit" value="Hoàn tất" id="btn_save">
  <?php $url = base_url(); ?>
    <a href="<?php echo $url; ?>">back</a>
    </form>
</body>
</html>