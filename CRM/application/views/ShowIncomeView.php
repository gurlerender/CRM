<?php include_once('header.php'); ?>
<html lang="tr">
<body>
  <h4>Gelirler</h4>
    <table>
     <tr>
      <td><strong>Sayı</strong></td>
      <td><strong>Fiyat</strong></td>
     </tr>
     <?php foreach($posts as $post){?>
     <tr>
         <td><?php echo $post->price;?></td>
         <td><?php echo $post->id;?></td>
         
     </tr>    
     <?php }?>  
   </table>
 
 
  </body>
</html>
<?php include_once('footer.php'); ?>