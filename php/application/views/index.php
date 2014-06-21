
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CodeIgniter</title>
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
		
        <div id="templatemo_content_area" style="border:0px solid black">
          <div id="templatemo_left"  style="border:0px solid black">
            	<h1>TODAYS HEADLINES</h1>
                <div class="outer">
                    <div id="rmv">To see the todays hadline plese select categories</div>
                    
                </div>
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
                                <input type="text" value="Username" name="Uname" id='Uname' class="field" title="email" onfocus="clearText(this)" onblur="clearText(this)" />
                                <div class="cleaner"></div>
                            </div>
                            
							<div class="templaetmo_form_row">
                                <label>Password:</label>
                                <input type="password" value="password" name="pass" id="pass" class="field" title="password" onfocus="clearText(this)" onblur="clearText(this)"/>
                                 <div class="cleaner"></div>
                            </div>
                            
                            <div class="templaetmo_form_row last">
                            	<input type="submit" name="login" value="Login"  />
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
                            <li><a class="link" id="Political">political</a></li>
                            <li><a class="link" id="Sports">sports</a></li>
                            <li><a class="link" id="Share Market" >share Market</a></li>
                            <li class="last"><a class="link" id="Criminal" >criminal</a></li>
                        </ul>
                    </div>
                    <div class="templatemo_sec_1_bottom"></div>
                    
                </div>
            
            </div><!-- End Of templatemo_right -->
        
        	<div class="cleaner"></div>
            
            <div class="templatemo_one_col last">
            
            	<div class="templatemo_section_2">
                	<!--img src="<?php echo imageDir;?>/templaetmo_img_1.jpg" alt="dice" /-->
               		<h1>Description</h1>
                    <p> In the above the news is displayed directly from the database.The News Edditor who is authorized
                    to login can feed the news to different categories which is desplayed in the above section.</p>
                </div>
                
                <div class="templatemo_section_2">
                	<!--img src="<?php echo imageDir;?>/templaetmo_img_2.jpg" alt="box" /-->
               		<h1>News Editor Login</h1>
                        <p>Username = happy <br> Password = 123</p>
                    
                </div>
            
            </div><!-- End Of templatemo_one_col -->
            <div class="cleaner"></div>
            
        </div><!-- End Of templatemo_content_area -->     
	</div><!-- End Of Container --> 
    
<script>
            $(document).ready(function(){
            $('.link').click(function(){
                //alert('hello');
                //return false;
            $.ajax({
                    type: "GET",
                    url: '<?php echo site_url();?>/newseditor/display',
                    data:{id:this.id},
                    dataType: "json",                    
                    success: function(ResponseData){
                                  var text="";
                                  var i;
                                  for(i=0;i<ResponseData.length ;i++){

                                 //   alert(ResponseData[i].newstitle);
                                      text+="<div style=\"border:0px solid red;float:left\"><u>"+ResponseData[i].Author+"</u></div>";
                    
                     
                   text+= "<div class=\"news\" style=\"border:0px solid red;float:right; width:75%\"><u>"+ResponseData[i].newstitle+ "</u><p>"+ResponseData[i].text+"</p></div>";
                    text+="<div style=\"clear:both;\">&nbsp;</div>";

                                    
                                      
                                            }
                                                      
                                        
                                      
                                  $('.outer').html(text);
                                 

                                  }
                    

                                
            });
            });

    });
          /*  text+="<div style=\"border:0px solid red;float:left\">"+ResponseData[i].Author+"</div>"+
                    
                     
                    "<div class=\"news\" style=\"border:0px solid red;float:right; width:75%\">"+ResponseData[i].newstitle+ "<p>"+ResponseData[i].text+"</p></div>"+
                    "<div style=\"clear:both;\">&nbsp;</div>"; */
                      
                    
    
    </script>

</body>
</html>

