<?php if($display!=''){?><script>
	$( document ).ready(function() {
		UIkit.notification({
		    message: '<?php echo $display;?>',
		    status: '<?php echo $color;?>', 
		    pos: 'top-right',
		    timeout: 5000
		}); 
	});    
	</script>
	<?php }   ?> 
  <!DOCTYPE html>
<html>
<head>
  <title></title>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
<link rel="stylesheet" href="<?php echo SITE_URL.'/assets/frontend/css/styles.css';?>" />
<!-- UIkit JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>

</head>

<body >
  <div class="uk-background-secondary uk-light uk-padding uk-panel">
  <h2>Enter Your Email</h2>
   
  <form class="uk-form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post">
    
    <fieldset class="uk-fieldset">
   
   <label ><b>Email:</b></label>  
  <div class="uk-margin uk-inline "><span class="uk-form-icon" uk-icon="icon: mail"></span> 
        <input class="uk-input uk-form-width-large" type="Email" placeholder="Enter Email:" name="email" required>
    </div> 
    <label ><b>Passwors:</b></label> 
     <div class="uk-margin uk-inline "><span class="uk-form-icon" uk-icon="icon: lock"></span>
        <input class="uk-input uk-form-width-large" type="password"  minlength="8" placeholder="Enter password" name="pass" required > 
    </div> 
    <button type="submit" class="uk-button uk-button-danger" name="for_submit" >Submit</button> 
    </fieldset> 
</form>      
<?php if ($suc)
{echo"<h2>Your Email not match<h2>";} 
if ($success)
{  echo"<h2>Password Updated Successfully<h2>";
?>    
<a href="<?php echo $link->link('login',frontend);?>" class="uk-link-heading"> <h4>Go to Login Page</h4></a> 
    <?php 
}
?>
</br></div>
</body>
</html>
 