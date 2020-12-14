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
  <input class="uk-table-shrink uk-hidden" name="id" type="text"  value="<?php echo $getClient_info['id'];?>">
        <div uk-grid>
            <div class="uk-width-expand@m">
             <legend class="uk-legend">Update Client Form</legend>
      </div>
     <div class="uk-width-auto@m">
        <a  href="<?php echo $link->link('clients',backend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>
     </div>
 </div>       
      <hr> 

<div class="uk-child-width-expand@s uk-grid-divider" uk-grid>
    <div>
        <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Name:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" placeholder="Enter Name" name="name"  value="<?php echo $getClient_info['name'];?>">
        </div>
    </div>

    <div class="uk-margin"> 
<label class="uk-form-label" for="form-horizontal-text">Choose Department</label> 
    <div class="uk-form-controls">
   <select  name='department_id' class="uk-select">
   <?php if(is_array($get_department)){ 
    foreach($get_department as $get_departments) { ?> 
    <option value="<?php echo $get_departments['id']; ?>">  
     <? echo $get_departments['department']; ?></option> 
      <? } }?>
    </select>
  </div> </div>

     <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Email:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="Email" readonly='readonly' placeholder="Enter Email" name="email"  value="<?php echo $getClient_info['email'];?>">
        </div>
    </div> 
      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Phone No:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" minlength="10" maxlength="12" placeholder="Enter Phone No" name="phone"  value="<?php echo $getClient_info['phone'];?>">
        </div>
    </div>
      <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Address:</label>
        <div class="uk-form-controls">
           <input class="uk-input" type="text" placeholder="Enter Address" name="address"  value="<?php echo $getClient_info['address'];?>">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">City:</label>
        <div class="uk-form-controls">
           <input  class="uk-input" type="text" placeholder="Enter City" name="city"  value="<?php echo $getClient_info['city'];?>">
        </div>
    </div>

    </div>
    <div>
       
    
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">State:</label>
        <div class="uk-form-controls">
           <input  class="uk-input" type="text" placeholder="Enter State" name="state"  value="<?php echo $getClient_info['state'];?>">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Postcode:</label>
        <div class="uk-form-controls">
           <input  class="uk-input" type="number" min="6"    placeholder="Enter Postcode" name="postcode"  value="<?php echo $getClient_info['postcode'];?>">
        </div>
    </div>
    <div class="uk-margin">
        <label class="uk-form-label" for="form-stacked-text">Country:</label>
        <div class="uk-form-controls">
           <input  class="uk-input" type="text" placeholder="Enter Country" name="country"  value="<?php echo $getClient_info['country'];?>">
        </div>
    </div>
    
 <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Profile Image</label>
        <div class="uk-form-controls">
            <div class="js-upload-profile uk-placeholder uk-text-center">
    <?php if($getClient_info['photo']==''){?>
    <span uk-icon="icon: cloud-upload"></span>
<?php }else{?>
<img src="<?php echo SITE_URL.'/uploads/logins/'.$getClient_info['photo'];?>">
<?php }?></div>     
        <input class="uk-input" type="file" name="photo">   
 </div>
    </div> 

    </div> 
</div>
<hr>
    <div class="uk-margin">
        <button type="submit" class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" name="client_btn" ><span uk-icon="icon:plus-circle;"></span> Update Client value </button> 
    </div>  
         </form>
       </div>
   </div>
 </div>
</div>

 