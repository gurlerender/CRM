<?php include_once('header.php'); ?>
<title>Paket Ekle</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<link href="http://localhost/CodeIgniter/css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/styles.css" />
<div id="prodiv">
<?php echo form_open('AddProduct'); ?>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<h1>Yeni Paket Ekle</h1> 
<?php echo form_label('Paket Adı:'); ?>
<?php echo form_input(array('id' => 'dproductname', 'name' => 'dproductname')); ?>
<?php echo form_label('Süre:'); ?>
<?php echo form_input(array('id' => 'dtime', 'name' => 'dtime')); ?>
<?php echo form_label('Giriş Hakkı :'); ?>
<?php echo form_input(array('id' => 'dentryright', 'name' => 'dentryright')); ?>
<?php echo form_label('Tür :'); ?>
<select name="dtype" id="dtype">
<option value="Özel">Private</option>
<option value="Grup">Group</option>
<option value="Düet">Duet</option>
<option value="Hobi">Hobby</option>
<option value="Diyet">Diet</option>
</select>
<?php echo form_label('Fiyat :'); ?>
<?php echo form_input(array('id' => 'dprice', 'name' => 'dprice')); ?>
<?php echo form_label('Durum :'); ?>
<select name="dstatus" id="dstatus">
<option value="1">Aktif</option>
<option value="0">Pasif</option>
</select>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?>
</div>
<?php include_once('footer.php'); ?>
