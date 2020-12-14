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
             <legend class="uk-legend">Ticket Form</legend>
      </div>
     <div class="uk-width-auto@m">
      <a  href="<?php echo $link->link('ticket',backend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>  
     </div>
 </div> 
  <hr class="uk-divider-icon">


<form class="uk-form-horizontal " action="<?php $_SERVER['PHP_SELF'];?>" method="post" >

<div class="uk-margin"> 
<label class="uk-form-label" for="form-horizontal-text">Choose Clients:</label></td><td>
    <div class="uk-form-controls">
   <select  name='id' class="uk-select">    
   <?php foreach($get_all_clients as $all) { ?> 
    <option value="<?php echo $all['id']; ?>">  
     <? echo $all['name']; ?></option> 
      <? } ?>
    </select>
  </div> 

  <div class="uk-margin"> 
<label class="uk-form-label" for="form-horizontal-text">Choose Department:</label></td><td>
    <div class="uk-form-controls">
   <select  name='department' class="uk-select">    
   <?php foreach($get_all_departments as $dp) { ?> 
        <option value="<?php echo $dp['id']; ?>">  
     <? echo $dp['department']; ?></option> 
      <? } ?>
    </select>
  </div> 

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">subject:</label>
        <div class="uk-form-controls">          
            <input class="uk-input " type="text" name="subject" placeholder="Enter subject"> 
        </div>
    </div> 

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Description:</label>
        <div class="uk-form-controls">
          <textarea class="uk-textarea"  type="text"  rows="8" cols="60" name="description" placeholder="Enter Description"></textarea>  
        </div>
    </div>

  <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Priority:</label>
        <div class="uk-form-controls">
            <select class="uk-select"   name="priority"> 
                <option value="high" >High</option>
                <option value="medium" >Medium</option>
                <option value="low" >Low</option>
            </select>
        </div>
    </div> 

     <button class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" type="submit" name="ticket_btn">Add Ticket</button>

</form>
 
</div>
</div>
</div>
</div>


 


  