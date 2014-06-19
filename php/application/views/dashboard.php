<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Registration Form</title>
  <link rel="stylesheet" href="<?php echo base_url();?>assets/formcss/style.css">
  <!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>

<body>
  <div class="container">
    <section class="register">
      <h1>Add News <a href="<?php echo site_url();?>/newseditor/logout" style="margin-left:170px;">Logout</a></h1> 
      <?php echo $this->session->flashdata('msg');?>
      <form method="post" action="<?php echo site_url();?>/dashboard/addnews">
      <div class="reg_section personal_info">
        <h3>News Title</h3>
        <input type="text" name="newstitle" value="">
      </div>

      <div class="reg_section personal_info">
        <h3>News Author</h3>
        <input type="text" name="newsauthor" value="">
      </div>
      
      <div class="reg_section password">
        <h3>News Categories</h3>
        <select name="category">
            <option value="">select</option>
            <option value="political">political</option>
            <option value="sports">sports</option>
            <option value="share market">share market</option>
            <option value="criminal">criminal</option>
        </select>
      </div>
      <div class="reg_section password">
        <h3>News description</h3>
        <textarea name="desc" id=""></textarea>
      </div>
      <p class="submit"><input type="submit" name="commit" value="submit"></p>
      </form>
    </section>
  </div>

</body>
</html>
