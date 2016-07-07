<?php
header('Content-Type: text/html; charset=utf-8');
?>
<?php include_once('header.php'); ?>
<script src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
<script type="text/javascript">
    function lookup(inputString) {
        if (inputString.length == 0) {
            $('#suggestions').hide();
        } else {
            $.post("<?php echo base_url() ?>AddSeance/autocomplete/" + inputString, function (data) {
                if (data.length > 0) {
                    $('#suggestions').show();
                    $('#autoSuggestionsList').html(data);
                }
            });
        }
    }

    function fill(thisValue) {
        $('#searchall').val(thisValue);
        setTimeout("$('#suggestions').hide();", 200);
    }
</script>

 <!--
<script type="text/javascript">
    $(document).ready(function(){
        $('#Room').change(function(){
            var room =document.getElementById("Room").value;
            $.ajax({
               type :'POST',
               data :{room:room},
               dataType: 'html',
               url:'< ?php echo site_url('Homepage/index'); ?>',
               success :function(result){
                
                                        
               }
            });
        });
    });
</script>
-->
    <script type="text/javascript" language="JavaScript">
          $(document).ready(function () {
         $("#Room > option").each(function () {
             $("#" + this.value).hide(); // hides all tables
         });
         });

         function ShowTable(Room) {
                              $("#Room > option").each(function () {
                                  $("#" + this.value).hide(); // hides all tables
                              });

                              $("#" + Room.value).show(); // shows the selected table
         }
    </script>
    
<div id ="homeload">
    <div id="homesearch">
        <input type ="text" id ="searchall" autocomplete='off' onKeyUp='lookup(this.value)'/>
        <div id ="search">ÃœYELER</div>
        <div id="children">ÇOCUKLAR</div>
        <div id="product">ÜRÜNLER</div>
        <div id="coach">LÝDERLER</div>
        <div id="package">PAKETLER</div>
        <div id="payment">ÖDEMELER</div>
        <div id="suggestions">
        <div class="autoSuggestionsList_l" id="autoSuggestionsList"></div>
        </div>
    </div>
    <select id="Room" name="Room"  onchange="ShowTable(this);">
        <option value="Joseph">Joseph Room</option>
        <option value="Macro">Macro Lounge</option>
        <option value="Diet">Diet Room</option>
        
    </select>
    
        <table id="Joseph">  
            <tr> 
            <td>Gün</td><?php foreach($posts_joseph as $post){?><td><?php echo $post->seancehour;?></td> <?php }?>
            </tr>
            <tr>  
            <td>Pazartesi</td><td><?php if($post->seanceday == 'Pazartesi') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Salý</td><td><td><?php if($post->seanceday == 'Salý') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Çarþamba</td><td><?php if($post->seanceday == 'Çarþamba') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Perþembe</td><td><?php if($post->seanceday == 'Perþembe') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Cuma</td><td><?php if($post->seanceday == 'Cuma') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Cumartesi</td><td><?php if($post->seanceday == 'Cumartesi') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Pazar</td><td><?php if($post->seanceday == 'Pazar') echo $post->seancename;?></td> 
            </tr>
            
        </table>
    
        <table id="Macro">  
            <tr> 
            <td>Gün</td><?php foreach($posts_macro as $post){?><td><?php echo $post->seancehour;?></td> <?php }?>
            </tr>
            <tr>  
            <td>Pazartesi</td><td><?php if($post->seanceday == 'Pazartesi') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Salý</td><td><td><?php if($post->seanceday == 'Salý') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Çarþamba</td><td><?php if($post->seanceday == 'Çarþamba') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Perþembe</td><td><?php if($post->seanceday == 'Perþembe') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Cuma</td><td><?php if($post->seanceday == 'Cuma') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Cumartesi</td><td><?php if($post->seanceday == 'Cumartesi') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Pazar</td><td><?php if($post->seanceday == 'Pazar') echo $post->seancename;?></td> 
            </tr>
            
        </table>
    
        <table id="Diet">  
            <tr> 
            <td>Gün</td><?php foreach($posts_diet as $post){?><td><?php echo $post->seancehour;?></td> <?php }?>
            </tr>
            <tr>  
            <td>Pazartesi</td><td><?php if($post->seanceday == 'Pazartesi') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Salý</td><td><td><?php if($post->seanceday == 'Salý') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Çarþamba</td><td><?php if($post->seanceday == 'Çarþamba') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Perþembe</td><td><?php if($post->seanceday == 'Perþembe') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Cuma</td><td><?php if($post->seanceday == 'Cuma') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Cumartesi</td><td><?php if($post->seanceday == 'Cumartesi') echo $post->seancename;?></td> 
            </tr>
            <tr>  
            <td>Pazar</td><td><?php if($post->seanceday == 'Pazar') echo $post->seancename;?></td> 
            </tr>
            
        </table>   
 </div>
<?php include_once('footer.php'); ?>

