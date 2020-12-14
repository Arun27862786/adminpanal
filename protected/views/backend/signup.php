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
	<?php } if($_SESSION['client_id'])  {$session->redirect('home',backend);} ?> 
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
  <h2>Sign up Here</h2>
  <? 
   echo $display;
  if($success){
    ?>    

<a href="<?php echo $link->link('login',backend);?>" class="uk-link-heading"> Go to Login Page</a> 
    <? } ?> 
  <form class="uk-form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
    <table> 
  <tr><td> 
    <label ><b>FirstName:</b></label></td><td>
     <div class="uk-margin uk-inline "><span class="uk-form-icon" uk-icon="icon: user"></span>
        <input class="uk-input uk-form-width-large" type="text" placeholder="Enter Name" name="fname"  >
    </div></td>
</tr></br>
<tr><td> 
    <label ><b>LastName:</b></label></td><td>
     <div class="uk-margin uk-inline "><span class="uk-form-icon" uk-icon="icon: user"></span>
        <input class="uk-input uk-form-width-large" type="text" placeholder="Enter Name" name="lname"  >
    </div> </td>
</tr></br>
   <tr><td> 
   <label ><b>Email:</b></label> </td><td> 
  <div class="uk-margin uk-inline "><span class="uk-form-icon" uk-icon="icon: mail"></span> 
        <input class="uk-input uk-form-width-large" type="Email" placeholder="Enter Email:" name="email" >
    </div></td></tr>
<tr><td>
  <label ><b>Password:</b></label></td><td>
     <div class="uk-margin uk-inline "><span class="uk-form-icon" uk-icon="icon: lock"></span>
        <input class="uk-input uk-form-width-large" type="password"  minlength="8" placeholder="Enter password" name="pass"  >
     </div> </td>
    
<tr><td>
  <tr><td>
  <label ><b>Phone No:</b></label></td><td>
     <div class="uk-margin uk-inline "><span class="uk-form-icon" uk-icon="icon: lock"></span>
        <input class="uk-input uk-form-width-large" type="number"  minlength="12" placeholder="Enter Phone no" name="phone"  >
     </div> </td>
    
<tr><td>
  <label ><b>Address:</b></label></td><td>
     <div class="uk-margin uk-inline "><span class="uk-form-icon" uk-icon="icon: location"></span>
        <input class="uk-input uk-form-width-large" type="text" placeholder="Enter Address" name="add">        
    </div> </td></tr>
    <tr><td> 
    <label ><b>Photo:</b></label></td><td>
     <div class="uk-margin uk-inline "><span class="uk-form-icon" uk-icon="icon: user"></span>
        <input class="uk-input uk-form-width-large" type="file" name="photo"  >
    </div> </td>
</tr></br>
<tr><td><center>
<button type="submit" class="uk-button uk-button-danger" name="logins_btn1" >Submit</button></center></td></tr> 
    </table>
</form> 
</br>
</div>
 
</body>
</html>
 
 