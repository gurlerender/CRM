<?php include_once('header.php'); ?>

<title>Seans Ekle</title>
<link href='http://fonts.googleapis.com/css?family=Marcellus' rel='stylesheet' type='text/css'>
<link href="http://localhost/CodeIgniter/css/styles.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/styles.css" />
<link rel="stylesheet" href="jquery-ui-1.11.4.custom/jquery-ui.css" type="text/css" />
<script type="text/javascript" src="jquery-ui-1.11.4.custom/jquery-ui.js"></script>
<script type="text/javascript" src="assets/js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="assets/js/jquery.min.js"></script>
<script type="text/javascript" src="jquery-ui-1.11.4.custom/external/jquery/jquery.js"></script>

<div id="container">
<?php echo form_open('AddSeance'); ?>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<h1>Seans Oluştur</h1> 
<?php echo form_label('Seans Adı:'); ?>
<select name="dseancename" id="dseancename">
<?php foreach($seances as $seance):?>
<option value="<?php echo $seance->ID?>"><?php echo $seance->NAME?></option>
<?php endforeach;?>
</select>
<?php echo form_label('Seans Salonu:'); ?>
<select name="dsalonname" id="dsalonname">
<?php foreach($salons as $salon):?>
<option value="<?php echo $salon->ID?>"><?php echo $salon->NAME?></option>
<?php endforeach;?>
</select>
<?php echo form_label('Seans Günü :'); ?>
<select name="dday" id="dday">
<?php foreach($days as $day):?>
<option value="<?php echo $day->ID?>"><?php echo $day->DAY?></option>
<?php endforeach;?>
</select>
<?php echo form_label('Seans Saati :'); ?>
<select name="dhour" id="dhour">
<?php foreach($hours as $hour):?>
<option value="<?php echo $hour->ID?>"><?php echo $hour->HOUR?></option>
<?php endforeach;?>
</select>
<?php echo form_label('Seans Hocası :'); ?>
<select name="dcoachname" id="dcoachname">
<?php foreach($coaches as $coach):?>
    <option value="<?php echo $coach->ID?>"><?php echo $coach->NAME?> <?php echo $coach->SURNAME?></option>
<?php endforeach;?>
</select>
<?php echo form_submit(array('id' => 'submit', 'value' => 'Submit')); ?>
<?php echo form_close(); ?>
</div>
<?php include_once('footer.php'); ?>

