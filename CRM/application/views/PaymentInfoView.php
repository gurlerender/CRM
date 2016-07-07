<?php include_once('header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url()?>css/form.css" />
<link rel="stylesheet" href="<?php echo base_url()?>css/styles.css" />
<div id="memdiv">
<h1>Ödeme Bilgileri</h1>
<?php 
 $id = $id;
 
 ?>   
<?php echo form_open('ShowMember/paymentInfo/'.$id); ?>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php foreach($posts as $post){?>
<?php echo form_label('Ad :  '.$post->name ); ?>
<?php echo form_label('Soyad :  '.$post->surname); ?>
<?php }?>  
<?php foreach($payposts as $post2){?>
<?php echo form_label('Satýn Alýnan Zaman :  '.$post2->salestime); ?>
<?php echo form_label('Üyelik Bitiþi :  '.$post2->finishtime); ?>
<?php echo form_label('Toplam Borç :  '.$post2->totalprice); ?>
<?php echo form_label('Ödenen Borç :  '.$post2->payment); ?>
<?php echo form_label('Ödeme :'); ?>
<?php echo form_input(array('id' => 'dpayment', 'name' =>'dpayment')); ?>
<?php }?>
<?php echo form_label('Yeni Paket Ekle :'); ?>
<a href="<?php echo base_url()?>ShowMember/AddNewProduct/<?php echo $post->ID;?>">Yeni Paket Ekle</a>
<a href="<?php echo base_url()?>ShowMember/MemberInfo/<?php echo $post->ID;?>">Geri</a>
<?php echo form_submit(array('id' => 'submit', 'value' => 'GÃ¼ncelle')); ?>
<?php echo form_close(); ?>
</div>

<?php include_once('footer.php'); ?>