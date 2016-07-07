<?php include_once('header.php'); ?>
<title>Lider Ekle</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<link href="http://localhost/CodeIgniter/css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/styles.css" />

<div id="container">

<?php echo form_open('AddEmployee'); ?>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<h1>Yeni Çalışan Ekle</h1> 
<?php echo form_label('Ad:'); ?>
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?>
<?php echo form_label('Soyad :'); ?>
<?php echo form_input(array('id' => 'dsurname', 'name' => 'dsurname')); ?>
<?php echo form_label('İş :'); ?>
<?php echo form_input(array('id' => 'djob', 'name' => 'djob')); ?>
<?php echo form_label('Durum :'); ?>
<select name="dstatus" id="dstatus">
<option value="1">Aktif</option>
<option value="0">Pasif</option>
</select>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?>
</div>

<?php include_once('footer.php'); ?>