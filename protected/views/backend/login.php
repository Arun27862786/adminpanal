<!DOCTYPE html>
<html lang="en-gb" dir="ltr" >

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $setting['name'];?></title>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
<link rel="stylesheet" href="<?php echo SITE_URL.'/assets/frontend/css/styles.css';?>" />


<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>



    </head>

    <body>

<div class="uk-container-expand back-image uk-background-cover  ">

<div class=" uk-grid "  >
           
                <div class="uk-width-1-3@m back uk-animation-fade " uk-height-viewport="expand: true" ><div class="uk-panel">
               <?php echo $display_msg;?>
                <form class="uk-margin-left uk-light uk-margin-right uk-margin-large-top uk-form-horizontal" method="post" action="">
                <?php if($setting['logo']!=""){?>
    <img src="<?php echo SITE_URL.'/uploads/logo/'.$setting['logo'];?>" class="uk-align-center" max-width="250px;">
    <?php }?> 
        <h2 class="uk-heading-line uk-text-center  text-white">Login</h2>
<hr class="uk-divider-icon">
        <div class="uk-margin uk-inline"> <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input " type="email" name="email" placeholder="Enter Email">
        </div>
<div class="uk-margin uk-inline">

 <span class="uk-form-icon" uk-icon="icon: lock"></span>
            <input class="uk-input " type="password" name="password" placeholder="Enter Password">
        </div>
      
<div class="uk-margin" >
   <button class="uk-button uk-button-danger   uk-align-left" type="submit" name="submit_login"><span uk-icon="icon: sign-in; ratio: .9"></span> Login</button>

      <a  class="uk-button uk-button-link uk-align-right" href="<?php echo $link->link('forgot_password',backend);?>">Forgot <br>Password?</a>
    </div>

      <a  class="uk-button uk-button-link uk-align-right" href="<?php echo $link->link('signup',backend);?>"> <br>Signup</a>
      

</form>

</div>

</div>
<!-- 
<div class="uk-margin uk-light uk-margin-xlarge-top uk-align-center">
<h1 class="uk-heading-hero">Welcome.Back</h1>
</div> -->
</div>
               
           
</div>

    </body>

</html>