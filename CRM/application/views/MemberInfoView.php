<?php include_once('header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url()?>css/form.css" />
<link rel="stylesheet" href="<?php echo base_url()?>css/styles.css" />
<div id="memdiv">
<h1>Üye Bilgileri</h1>
<?php echo form_open('ShowMember/memberInfo/'.$id) ?>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php foreach($posts as $post){?>
<?php echo form_label('TC :'); ?>
<?php echo form_input(array('id' => 'dtc', 'name' => 'dtc','value'=>$post->tcno )); ?>
<?php echo form_label('Ad :'); ?>
<?php echo form_input(array('id' => 'dname', 'name' => 'dname','value'=>$post->name )); ?>
<?php echo form_label('Soyad :'); ?>
<?php echo form_error('dsurname'); ?>
<?php echo form_input(array('id' => 'dsurname', 'name' => 'dsurname','value'=>$post->surname)); ?>
<?php echo form_label('Telefon :'); ?>
<?php echo form_input(array('id' => 'dphone', 'name' => 'dphone','value'=>$post->phone)); ?>
<?php echo form_label('Email :'); ?>
<?php echo form_input(array('id' => 'dmail', 'name' => 'dmail','value'=>$post->email)); ?>
<?php echo form_label('Cinsiyet :'); ?>
<?php echo form_input(array('id' => 'dgender', 'name' => 'dgender','value'=>$post->gender)); ?>
<?php echo form_label('Adres :'); ?>
<?php echo form_textarea(array('id' => 'daddress', 'name' => 'daddress','value'=>$post->address)); ?>  
<?php echo form_label('Meslek :'); ?>
<?php echo form_input(array('id' => 'djob', 'name' =>'djob', 'value'=>$post->job)); ?>
<?php }?>  
<a href="<?php echo base_url()?>ShowMember/paymentInfo/<?php echo $post->ID;?>">Ödeme Bilgileri</a>
<?php echo form_submit(array('id' => 'submit', 'value' => 'GÃ¼ncelle')); ?>
<?php echo form_close(); ?>
</div>

<?php include_once('footer.php'); ?>