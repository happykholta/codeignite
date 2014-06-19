
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Virtual Site, XHTML CSS Template, Free Download</title>
<meta name="keywords" content="Virtual Site, XHTML CSS Template, Free Download" />
<meta name="description" content="Virtual Site - Free CSS Template, Free XHTML CSS Layout" />
<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery-1.10.2.min.js"></script>

<link href="<?php echo base_url();?>assets/css/templatemo_style.css" rel="stylesheet" type="text/css" />
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>
</head>
<body>
	<div class="templatemo_container">
		
        <div id="templatemo_content_area" style="border:1px solid black">
            <div id="templatemo_left"  style="border:1px solid black">
            	<h1>TODAYS HEADLINES</h1>
                 <div style="border:0px solid red;float:left"><img src="<?php echo imageDir;?>/templatemo_128_wood_site.jpg" alt="XHTML Template" class="left_img"  / ></div>
                 
               <div id="news" style="border:0px solid red;float:right; width:75%"></div>
                      <div style="clear:both;">&nbsp;
                      
                      </div>
<div style="border:0px solid red;float:left"><img src="<?php echo imageDir;?>/templatemo_128_wood_site.jpg" alt="XHTML Template" class="left_img"  / ></div>
                 
               <div style="border:0px solid red;float:right; width:75%"> <p style="float:right;">Virtual Template is a
                    <a href="http://www.templatemo.com/page/1" target="_parent">free CSS layout </a>
                     provided by <a href="http://www.templatemo.com/page/1" target="_parent">templatemo.com</a> 
                     website. Credit goes to <a href="http://www.smashingmagazine.com" target="_blank">Smashing Magazine</a>
                      for icons used in this template. At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium vo iatelupti.Fanenon provident, similique sunt in culpa qui officia deserunt.
                      </p></div>


                
          </div><!-- End Of templatemo_left -->
            
            <div id="templatemo_right">
            
            	<div class="templatemo_section_1">
                
                	<div class="templatemo_sec_1_top">
                    </div>                    
                    <div class="templatemo_sec_1_mid">
                    	<h1>News Editor Login</h1>
                        <?php echo $this->session->flashdata('msg');?>
                    	<form action="<?php echo site_url("newseditor/login");?>" method="post">
                        	<div class="templaetmo_form_row">
                                <label>UserName:</label>
                                <input type="text" value="your Username" name="Uname" id='Uname' class="field" title="email" onfocus="clearText(this)" onblur="clearText(this)" />
                                <div class="cleaner"></div>
                            </div>
                            
							<div class="templaetmo_form_row">
                                <label>Password:</label>
                                <input type="password" value="password" name="pass" id="pass" class="field" title="password" onfocus="clearText(this)" onblur="clearText(this)" id="password" />
                                 <div class="cleaner"></div>
                            </div>
                            
                            <div class="templaetmo_form_row last">
                            	<input type="submit" name="login" value="Login" alt="Login" class="login" title="Login" />
                                <div class="cleaner"></div>
                            </div>
            			</form>
                    </div>
                    <div class="templatemo_sec_1_bottom"></div>
                    
                </div>

                
            	<div class="templatemo_section_1 last">
                
                	<div class="templatemo_sec_1_top">
                    </div>                    
                    <div class="templatemo_sec_1_mid">
                    	<h1>Categories</h1>
                    	<ul class="category_list">
                            <li><a class="link" id="Political" href="#">political</a></li>
                            <li><a class="link" id="Sports" href="#">sports</a></li>
                            <li><a class="link" id="Share Market" href="#">share Market</a></li>
                            <li class="last"><a class="link" id="Criminal" href="#">criminal</a></li>
                        </ul>
                    </div>
                    <div class="templatemo_sec_1_bottom"></div>
                    
                </div>
            
            </div><!-- End Of templatemo_right -->
        
        	<div class="cleaner"></div>
            
            <div class="templatemo_one_col last">
            
            	<div class="templatemo_section_2">
                	<img src="<?php echo imageDir;?>/templaetmo_img_1.jpg" alt="dice" />
               		<h1>Mauris in pulvinar risus</h1>
                    <p>Nsunc hendrerit sapien quis th  quam put ehef
Nuilla dignissim viverra tortor, ultrices al hic ti. Maecenas ist suscipit euismoi tiaosi dales molestie convallis. Aliquam erat vo.</p>
                </div>
                
                <div class="templatemo_section_2">
                	<img src="<?php echo imageDir;?>/templaetmo_img_2.jpg" alt="box" />
               		<h1>Crasnon dolor leifend</h1>
                    <p>Mauris in pulvinar risus. Nunc hend reri omnis
Marceset isis th  quam pulvinar semper volutv. Maecenas i iat est suscipit euismod enim, ege sodales molestie convallis. Aliquam eratl.</p>
                </div>
            
            </div><!-- End Of templatemo_one_col -->
            <div class="cleaner"></div>
            
        </div><!-- End Of templatemo_content_area -->     
	</div><!-- End Of Container --> 
    
<script>
            $(document).ready(function(){
            $('.link').click(function(){
            $.ajax({
                    type: "GET",
                    url: '<?php echo site_url();?>/newseditor/display',
                    data:{id:this.id},
                    dataType: "json",                    
                    success: function(ResponseData) {
                                  //alert(ResponseData.length);
                                  for(var i=0;i<=ResponseData.length ;i++){
                                    // alert(ResponseData[i].id);
                                      $('#news').html('<h1>'+ResponseData[i].newstitle+'</h1>');
                                  }

                                 //alert(ResponseData);
                                 return false;
                     /* while(ResponseData){
                      $('#news').html('<h1>'+ResponseData.newstitle+'</h1>');
                   // $('#news').html('<img src="'+res+'" height=\"850\" width=\"850\">');
                      }*/
            
            }

    });
    });
});
    </script>

</body>
</html>
