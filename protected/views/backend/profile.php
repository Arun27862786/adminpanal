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
  <?php }?>
  <div class="content-padder content-background">
  <div class="uk-section-small uk-padding-medium-top">
                <div class="uk-container uk-container-large">
 <div class="uk-card uk-card-default uk-padding-small">

 <div uk-grid>
            <div class="uk-width-expand@m">
             <legend class="uk-legend">Your Profile</legend>
      </div>
     <div class="uk-width-auto@m">
          <form method="post" name="myForm"  class="uk-form-horizontal" action="<?php $_SERVER['PHP_SELF'];?>" onsubmit="return validateForm()"> 
 <input class="uk-table-shrink uk-hidden" name="login_Id" type="text"  value="<?php echo $user_details['user_id'];?>" >    
 <button class="uk-button uk-button-danger uk-border-rounded"  name ="del_submit"> <span uk-icon="icon:trash;"></span> Delete Profile</button> 
 </form> 
     </div>
 </div> 

 
 
 
<hr class="uk-divider-icon">
 
  <div class="uk-container uk-container-expand uk-margin-small-left uk-margin-small-right uk-margin-small-top uk-margin-small-bottom ">
   
 
<div class=" uk-child-width-expand@s uk-grid-divider" uk-grid> 
  <div>
  <h4 class="uk-heading-divider">Profile</h4>
  <form method="post" class="uk-form-horizontal" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data"> 
<input type="hidden" name="profilesize" id="profilesize" >
  
   <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Email</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" readonly="readonly" name="name" type="text" placeholder="Company Name" value="<?php echo $user_details['email'];?>">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">First Name</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="f_name" type="text" placeholder="First Name" value="<?php echo $user_details['firstname'];?>">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Last Name</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="l_name" type="text" placeholder="Last Name" value="<?php echo $user_details['lastname'];?>">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Address</label>
        <div class="uk-form-controls">
            <textarea class="uk-textarea" name="address" placeholder="Address"><?php echo html_entity_decode($user_details['address']);?></textarea>
        </div>
    </div>

 <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Profile Image</label>
        <div class="uk-form-controls">
            <div class="js-upload-profile uk-placeholder uk-text-center">
    <?php if($user_details['user_photo_file']==''){?>
    <span uk-icon="icon: cloud-upload"></span>
<?php }else{?>
<img src="<?php echo SITE_URL.'/uploads/logins/'.$user_details['user_photo_file'];?>">
<?php }?></div>     
        <input class="uk-input" type="file" name="profile_img">   
  
<!-- 
<progress id="js-progressbar-profile" class="uk-progress" value="0" max="100" hidden></progress>
     --> </div>
    </div> 
 <hr>
 <button class="uk-button uk-button-success uk-width-1-1 uk-border-rounded  uk-margin-small-bottom" name="submit_profile"><span uk-icon="icon:file-edit;"></span> Update Profile</button>   
 </form>   
 </div>
 <div>
  <h4 class="uk-heading-divider">Change Password</h4>
  <form method="post" class="uk-form-horizontal" action="<?php $_SERVER['PHP_SELF'];?>"> 
 <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Old Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="oldpassword" type="password" placeholder="Old Password" value="">
        </div>
    </div>
    
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">New Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="newpassword" type="password" placeholder="Old Password" value="">
        </div>
    </div>
    
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Confirm Password</label>
        <div class="uk-form-controls">
            <input class="uk-input" id="form-horizontal-text" name="confirmpassword" type="password" placeholder="Old Password" value="">
        </div>
    </div>
 <hr>
 <button class="uk-button uk-button-success uk-width-1-1 uk-border-rounded  uk-margin-small-bottom" name="submit_changepassword"><span uk-icon="icon:unlock;"></span>  Change Password</button> 
 </form> 


 </div>
 </div>
 </div>
 </div></div></div></div>
  <script type = "text/javascript">
                     function validateForm() {
                         if (confirm("Are you sure want to delete!")) {
                       return true;
                      } else {
                         return false;
                      }               
              }                         
      </script>
 
 