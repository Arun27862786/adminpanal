<!DOCTYPE html>
<html lang="en-gb" dir="ltr" >

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Login</title>
    <!-- UIkit CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
<link rel="stylesheet" href="<?php echo SITE_URL.'/assets/frontend/css/styles.css';?>" />

<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>

 
    </head>

    <body>

<div class="uk-container-expand login_background uk-background-cover  ">

<div class=" uk-grid "  >
           
  <div class="uk-width-1-3@m back uk-animation-fade " uk-height-viewport="expand: true" >
  	<div class="uk-panel">
    <?php echo $display_msg;?>
 
<form  class="uk-margin-left uk-light uk-margin-right uk-margin-large-top uk-form-horizontal" action="" method="post">
  <fieldset class="uk-fieldset">
  	 <h2 class="uk-heading-line uk-text-center  text-white">Login Form</h2>
<hr class="uk-divider-icon">
    <label for="uname"><b>Email:</b></label> 
 <div class="uk-margin uk-inline"> <span class="uk-form-icon" uk-icon="icon: user"></span>
            <input class="uk-input " type="email" name="email" placeholder="Enter Email">
        </div>

    <label for="psw"><b>Password:</b></label><div class="uk-margin">
    	
    	<div class="uk-margin uk-inline ">

 <span class="uk-form-icon" uk-icon="icon: lock"></span>
            <input class="uk-input " type="password" name="password" placeholder="Enter Password">
        </div>

         <div class="uk-margin uk-grid-small uk-child-width-auto uk-grid">
       <label><input class="uk-checkbox" type="checkbox"  name="cookie_set" value="true"> Remember me</label>
         </div>
          
  <center> 
  	<button class=" uk-button uk-button-danger uk-button-large " type="submit"  name="login_form">Login</button> </br></br>
 

      <a href="<?php echo $link->link('signup',frontend);?>" class="uk-link-heading">Sign up</a></br>
         <a href="<?php echo $link->link('forgotpass',frontend);?>" class="uk-link-heading">Forgot password</a>
</center>
 
    </fieldset>
</form>
</div>
</div>
</div>
</div>
</body>
</html> 