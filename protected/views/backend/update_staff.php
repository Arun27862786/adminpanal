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
  <input class="uk-table-shrink uk-hidden" name="user_id" type="text"  value="<?php echo $getstaff['user_id'];?>">
        <div uk-grid>
            <div class="uk-width-expand@m">
             <legend class="uk-legend">Update Client Form</legend>
      </div>
     <div class="uk-width-auto@m">
        <a  href="<?php echo $link->link('staffs',backend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>
     </div>
 </div>       
      <hr> 

<div class="uk-child-width-expand@s uk-grid-divider" uk-grid>
    <div>
        <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">First Name:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" placeholder="Enter Name" name="fname"  value="<?php echo $getstaff['firstname'];?>">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Last Name:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" placeholder="Enter Name" name="lname"  value="<?php echo $getstaff['lastname'];?>">
        </div>
    </div>

     <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="Email" readonly='readonly' placeholder="Enter Email" name="email"  value="<?php echo $getstaff['email'];?>">
        </div>
    </div> 
      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Phone No:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" minlength="10" maxlength="12" placeholder="Enter Phone No" name="phone"  value="<?php echo $getstaff['phone'];?>">
        </div>
    </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Address:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" placeholder="Enter Address" name="address"  value="<?php echo $getstaff['address'];?>">
        </div>
    </div>
     
    </div>
    <div>
      
<div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Profile Image</label>
        <div class="uk-form-controls">
            <div class="js-upload-profile uk-placeholder uk-text-center">
    <?php if($getstaff['user_photo_file']==''){?>
    <span uk-icon="icon: cloud-upload"></span>
<?php }else{?>
<img src="<?php echo SITE_URL.'/uploads/logins/'.$getstaff['user_photo_file'];?>">
<?php }?></div>     
        <input class="uk-input" type="file" name="photo">   
 </div>
    </div> 

    </div> 
</div>
<hr>
    <div class="uk-margin">
        <button type="submit" class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" name="staff_btn" ><span uk-icon="icon:plus-circle;"></span> Update Client value </button> 
    </div>  
         </form>
       </div>
   </div>
 </div>
</div>

 