<?php include_once('header.php'); ?>
<!DOCTYPE html>
<html lang="tr">
  <head>
  </head>
  <body>
  
 
    <h4>Çalýþanlar Listesi</h4>
    <table>
     <tr>
      <td><strong>AD</strong></td>
      <td><strong>SOYAD</strong></td>
      <td><strong>IS</strong></td>
    </tr>
     <?php foreach($posts as $post){?>
     <tr>
         <td><?php echo $post->name;?></td>
         <td><?php echo $post->surname;?></td>
         <td><?php echo $post->job;?></td>
      </tr>    
     <?php }?>  
   </table>
 
 
  </body>
</html>
<?php include_once('footer.php'); ?>