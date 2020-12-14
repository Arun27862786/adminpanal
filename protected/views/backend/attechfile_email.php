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
   <?php }?>  <div class="content-padder content-background">          
    <div class="uk-section-small">
    <div class="uk-container uk-container-large">                    
    <div class="uk-card uk-card-default uk-padding-small">
   
<h2>Send Email</h2>
  <form  action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
   <fieldset class="uk-fieldset">
     <label ><b>Your Name:</b></label>
     <div class="uk-margin">
    <input class="uk-input uk-form-width-large" type="text" placeholder="Enter Your Name:" name="name"  ></div>

     <label ><b>Your Email:</b></label>
     <div class="uk-margin">
    <input class="uk-input uk-form-width-large" type="email" placeholder="Enter Your Email:" name="email"  ></div>

     <label ><b>Subject:</b></label>
     <div class="uk-margin">
    <input class="uk-input uk-form-width-large" type="text" placeholder="Subject:" name="subject"  ></div>  

     <label ><b>Message:</b></label>
     <div class="uk-margin">
    <input class="uk-input uk-form-width-large" type="text" placeholder="Message:" name="message"  ></div> 

     <label ><b>Attachment:</b></label>
     <div class="uk-margin">
    <input class="uk-input uk-form-width-large" type="file"   name="attachment"  ></div> 
       
    <button type="submit" class="uk-button uk-button-primary" name="emailbtn" >Submit</button>
   </fieldset>
</form>
</div>
</div>
</div>
</div> 
</br> 