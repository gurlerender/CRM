<?php include_once('header.php'); ?>
<link rel="stylesheet" href="<?php echo base_url()?>css/form.css" />
<link rel="stylesheet" href="<?php echo base_url()?>css/styles.css" />
<div id="memdiv">
<h1>Ödeme Bilgileri</h1>
<?php 
 $id = $id;
?>   
<?php echo form_open('ShowMember/AddNewProduct/'.$id); ?>
<?php if (isset($message)) { ?>
<CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
<?php } ?>
<?php foreach($posts as $post){?>
<?php echo form_label('Ad :  '.$post->name ); ?>
<?php echo form_label('Soyad :  '.$post->surname); ?>
<?php }?>  
<select name="dproduct" id="dproduct">
<?php foreach($products as $product):?>
    <option value="<?php echo $product->ID?>"><?php echo $product->PRODUCTNAME; echo '  '.$product->PRICE . 'TL';?></option>
<?php endforeach;?>
</select>
<a href="<?php echo base_url()?>ShowMember/MemberInfo/<?php echo $post->ID;?>">Geri</a>
<?php echo form_submit(array('id' => 'submit', 'value' => 'GÃ¼ncelle')); ?>
<?php echo form_close(); ?>
</div>

<?php include_once('footer.php'); ?>