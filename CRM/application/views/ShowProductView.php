<?php include_once('header.php'); ?>
<!DOCTYPE html>
<html lang="tr">
  
  <body>
  
 
    <h4>�r�nler Listesi</h4>
    <table>
     <tr>
      <td><strong>AD</strong></td>
      <td><strong>S�re</strong></td>
      <td><strong>Giri� Hakk�</strong></td>
      <td><strong>Fiyat</strong></td>
      <td><strong>Durum</strong></td>
    </tr>
     <?php foreach($posts as $post){?>
     <tr>
         <td><?php echo $post->productname;?></td>
         <td><?php echo $post->duration;?></td>
         <td><?php echo $post->entrytime;?></td>
         <td><?php echo $post->price;?></td>
         <td><?php if($post->status == TRUE) echo 'Etkin';
                    else echo 'Pasif';;?></td>
      </tr>    
     <?php }?>  
   </table>
 
 
  </body>
</html>
<?php include_once('footer.php'); ?>