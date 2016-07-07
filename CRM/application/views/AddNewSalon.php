<?php include_once('header.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Paket Ekle</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<link href="http://localhost/CodeIgniter/css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/styles.css" />

</head>
<body>
<div id="container">

<?php echo form_open('AddSalon'); ?>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<h1>Yeni Salon Ekle</h1> 
<?php echo form_label('Salon Adý:'); ?>
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?>
<?php echo form_label('Kapasite :'); ?>
<?php echo form_input(array('id' => 'dcapacity', 'name' => 'dcapacity')); ?>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?>
</div>
</body>
</html>
<?php include_once('footer.php'); ?>