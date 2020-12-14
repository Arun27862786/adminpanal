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
 <?php } ?> 
<div class="content-padder content-background">
          
            <div class="uk-section-small uk-padding-medium-top">
                <div class="uk-container uk-container-large">
 <div class="uk-card uk-card-default uk-padding-small">
        <form class="uk-form"  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data" >
    
        <div uk-grid>
            <div class="uk-width-expand@m">
             <legend class="uk-legend">Add Staff Form</legend>
      </div>
     <div class="uk-width-auto@m">
        <a  href="<?php echo $link->link('staffs',backend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>
     </div>
 </div>       
      <hr> 

<div class="uk-child-width-expand@s uk-grid-divider" uk-grid>

<div>

    <div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">First Name:</label>
          <div class="uk-form-controls">
            <input class="uk-input" type="text" placeholder="Enter Name" name="fname">
          </div>
        </div>
    </div>
    
    <div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Last Name:</label>
          <div class="uk-form-controls">
             <input class="uk-input" type="text" placeholder="Enter Last Name" name="lname" >
          </div>
        </div>
    </div>
    
    <div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Email:</label>
          <div class="uk-form-controls">
             <input  class="uk-input" type="Email" placeholder="Enter Email" name="email">
          </div>
        </div>
    </div>  
    
    <div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Password:</label>
          <div class="uk-form-controls">
              <input class="uk-input" type="password"  placeholder="Enter Password" name="password">
          </div>
        </div>
    </div>

</div>

<div> 
    
      <div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Phone No:</label>
          <div class="uk-form-controls">
              <input class="uk-input " type="number"  placeholder="Enter Phone No" name="phone" >
          </div>
        </div>
    </div>
    <div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Address:</label>
          <div class="uk-form-controls">
              <input class="uk-input " type="text" placeholder="Enter Address" name="add">
          </div>
        </div>
    </div>
   
    <div>
        <div class="uk-margin">
          <label class="uk-form-label" for="form-stacked-text">Upload image:</label>
          <div class="uk-form-controls">
              <input class="uk-input " type="file" placeholder="Enter Address" name="photo">
          </div>
        </div>
    </div>

</div>

</div>
<hr>
    <div class="uk-margin">
        <button type="submit" class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" name="staff_btn" ><span uk-icon="icon:plus-circle;"></span>Add Staff</button> 
    </div>
  
         </form>
       </div>
   </div>
 </div>
</div>
 

 