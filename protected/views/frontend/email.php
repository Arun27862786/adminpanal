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
   <?php 
 }?> 
   <div class="content-padder content-background">
          
            <div class="uk-section-small uk-padding-medium-top">
                <div class="uk-container uk-container-large">
 <div class="uk-card uk-card-default uk-padding-small">

<h4>Send Email To Admin</h4>
<hr>
  <form  action="<?php $_SERVER['PHP_SELF'];?>" method="post">
   <fieldset class="uk-fieldset">
    
     <div class="uk-margin"> 
<label class="uk-form-label" for="form-horizontal-text">Choose User For Email:</label> 
    <div class="uk-form-controls">
   <select  name='email_name' class="uk-select">    
   <?php foreach($get_all_user as $dp) { ?>      
    <option value="<?php echo $dp['email']; ?>">  
     <? echo $dp['firstname'].' '.$dp['lastname']; ?></option> 
      <? } ?>
    </select>
  </div>
   

  <div class="uk-margin"> 
    <label ><b>Subject:</b></label>
     <div class="uk-margin">
    <input class="uk-input uk-form-width-large" type="text" placeholder="Enter Subject:" name="subject"   ></div>
  </div>

     <label ><b>Message:</b></label>
    <div class="uk-form-row">
<textarea cols="60" rows="5" placeholder="Enter Message:"  name="message"  ></textarea>
          </div>
    
    <button type="submit" class="uk-button uk-button-primary" name="emailbtn" >Submit</button>
   </fieldset>
</form> 
</br> 
</div>
</div>
</div>
</div>