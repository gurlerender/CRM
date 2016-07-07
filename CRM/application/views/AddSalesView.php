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

<?php echo form_open('AddSales'); ?>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<h1>Yeni Ürün Ekle</h1>
<?php echo form_label('Ürün Adý:'); ?>
<?php echo form_input(array('id' => 'dname', 'name' => 'dname')); ?>
<?php echo form_label('Grubu :'); ?>
<?php echo form_input(array('id' => 'dgroup', 'name' => 'dgroup')); ?>
<?php echo form_label('Sayýsý:'); ?>
<?php echo form_input(array('id' => 'dnumber', 'name' => 'dnumber')); ?>
<?php echo form_label('Geliþ Fiyatý :'); ?>
<?php echo form_input(array('id' => 'darrivalprice', 'name' => 'darrivalprice')); ?>
<?php echo form_label('Satýþ Fiyatý :'); ?>
<?php echo form_input(array('id' => 'dsalesprice', 'name' => 'dsalesprice')); ?>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?>
</div>
</body>
</html>
<?php include_once('footer.php'); ?>