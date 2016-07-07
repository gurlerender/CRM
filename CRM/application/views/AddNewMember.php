<?php include_once('header.php'); ?>

 <title>Üye kaydý</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>css/normalize.css" rel="stylesheet">
    <link href="<?php echo base_url()?>css/stylef.css" rel="stylesheet" >
            
        <div class="form">
            <ul class="tab-group">
                <li class="tab active"><a href="#signup">Kiþi Bilgileri</a></li>
                <li class="tab"><a href="#login">Ek Bilgiler</a></li>
             </ul>
                <div class="tab-content">
                    <div id="signup">   
                        <h1>Üye Kaydý</h1>
                    
                        <?php echo form_open('AddMember'); ?>   
                            <?php if (isset($message)) { ?>
                                <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
                            <?php } ?>
                     <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                TC No<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="dtc" name="dtc"/>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Ad-Soyad<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="dname" name="dname"/>
                        </div>
                    </div>
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                E-mail<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="dmail" name="dmail"/>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Telefon<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="dphone" name="dphone"/>
                        </div>
                    </div>
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                Medeni Hal<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="dmhal" name="dmhal"/>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Cinsiyet<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="dgender" name="dgender"/>
                        </div>
                    </div>
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                Ýþ<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="djob" name="djob"/>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Okul<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="dschool" name="dschool"/>
                        </div>
                    </div>
                    
                        <div class="field-wrap">
                            <label>
                                Adres<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="daddress" name="daddress"/>
                        </div>
                        
                                <button type="submit" id="submit" class="button button-block"/>Kaydet</button>
                            <?php echo form_close(); ?>
                 </div>
                    
                    
                 
                 <div id="login">   
                        <h1>Ek Bilgiler</h1>
                    
                        <?php echo form_open('AddMember'); ?>   
                            <?php if (isset($message)) { ?>
                                <CENTER><h3 style="color:green;">Data inserted successfully</h3></CENTER><br>
                            <?php } ?>
                     <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                Acil Kiþi<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="demcall" name="demcall"/>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Yakýnlýk<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="drel" name="drel"/>
                        </div>
                    </div>
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                Boy<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="dheigth" name="dheigth"/>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Kilo<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="dweigth" name="dweigth"/>
                        </div>
                    </div>
                    <div class="top-row">
                        <div class="field-wrap">
                            <label>
                                Ürün<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="dproduct" name="dproduct"/>
                        </div>
                        <div class="field-wrap">
                            <label>
                                Ayak No<span class="req">*</span>
                            </label>
                                  <input type="text"required autocomplete="off" id="dfootnumber" name="dfootnumber"/>
                        </div>
                    </div>
                    
                            <button class="button button-block"/>Kaydet</button>
                            <?php echo form_close(); ?>
                 </div>
            </div><!-- tab-content -->
      
        </div> <!-- /form -->
        
             
        
    
    
        <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
        <script src="<?php echo base_url()?>js/index.js"></script>
<?php include_once('footer.php'); ?>