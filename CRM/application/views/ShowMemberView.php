<?php include_once('header.php'); ?>
<link rel="stylesheet" href="css/form.css" />
<div id="container">
<h1>Üyeler Listesi</h1>
    <table id="membertable">
     <tr id="tit">
      <td>AD</td>
      <td>SOYAD</td>
      <td>Durum</td>
      <td>Düzenle</td>
     </tr>
    <?php foreach($posts as $post){?>
    <tr>
         <td><?php echo $post->name;?></td>
         <td><?php echo $post->surname;?></td>
         <td><?php if($post->status == TRUE) echo 'Aktif';
                    else echo 'Pasif';;?></td>
         <td id="cha"><a href="ShowMember/memberInfo/<?php echo $post->ID;?>">Düzenle</a></td>
         
     </tr>    
     <?php }?>  
   </table>
</div>
<?php include_once('footer.php'); ?>