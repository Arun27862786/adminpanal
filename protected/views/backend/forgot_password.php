<!DOCTYPE html>
<html lang="en-gb" dir="ltr" class="uk-background-muted">

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

<div class="uk-container-expand back-image uk-background-cover ">

<div class=" uk-grid "  >
            
                <div class="uk-width-1-3@m back" uk-height-viewport="expand: true" ><div class="uk-panel">
               <?php echo $display_msg;?>
               <?php if($exists==1 && isset($_REQUEST['random']) && $_REQUEST['random']!='' ){?>
               <form class="uk-margin-left uk-margin-right uk-margin-large-top" method="post" action="">
    <input class="form-control"  type="hidden" placeholder="token" name="token"  value="<?php echo $_REQUEST['random'];?>">
        <h1 class="uk-heading-line uk-text-center  text-white">Change Password</h1>
<hr class="uk-divider-icon">
        <div class="uk-margin uk-inline"> <span class="uk-form-icon" uk-icon="icon: lock"></span>
            <input class="uk-input uk-form-width-large" type="password" name="password" placeholder="Password">
        </div>
<div class="uk-margin uk-inline"> <span class="uk-form-icon" uk-icon="icon: lock"></span>
            <input class="uk-input uk-form-width-large" type="password" name="retypepassword" placeholder="Retype Password">
        </div>
   <div class="uk-margin ">
    <button class="uk-button uk-button-primary uk-align-left" type="submit" name="change_pass"><span uk-icon="icon: unlock; ratio: .9"></span> Submit</button>
 </div>   <div class="uk-margin ">
      <a  class="uk-button uk-button-link uk-align-left" href="<?php echo $link->link('login',backend);?>">Go Back To Login</a>
      </div>
</div>
</form>
               
               <?php }else{?>
                <form class="uk-margin-left uk-margin-right uk-margin-large-top" method="post" action="">
    
        <h1 class="uk-heading-line uk-text-center  text-white">Forgot Password</h1>
<hr class="uk-divider-icon">
        <div class="uk-margin uk-inline"> <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input uk-form-width-large" type="text" name="email" placeholder="Enter Email">
        </div>

   <div class="uk-margin ">
    <button class="uk-button uk-button-primary uk-width-1-1 uk-align-left" type="submit" name="forgot_pass"><span uk-icon="icon: unlock; ratio: .9"></span> Submit</button>
 </div>   
 
      <div class="uk-margin ">
      <a  class="uk-button uk-button-link uk-align-center" href="<?php echo $link->link('login',backend);?>">Go Back To Login</a>
      </div>
</div>
</form>
<?php }?>


</div></div>
                <div class="uk-width-expand@m   "><div class="uk-panel"></div></div>
            </div>
</div>

    </body>

</html>