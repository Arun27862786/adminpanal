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
           <legend class="uk-legend"><h2> Knowledge Base</h2></legend>
      </div>
     <div class="uk-width-auto@m">
      <a  href="<?php echo $link->link('knowledge_base',backend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>  
     </div>
 </div> 
  <hr class="uk-divider-icon">

<form class="uk-form-horizontal " action="<?php $_SERVER['PHP_SELF'];?>" method="post" >

  <div class="uk-margin"> 
<label class="uk-form-label" for="form-horizontal-text">Choose Department:</label></td><td>
    <div class="uk-form-controls">
   <select  name='department' class="uk-select">
    <option value="<?php echo $getdepartment['id'];?>"><?php echo $getdepartment['department']; ?></option>  
   <?php foreach($depart as $dp) { ?> 
        <option value="<?php echo $dp['id']; ?>">  
     <? echo $dp['department']; ?></option> 
      <? } ?>
    </select>
  </div> 

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Question:</label>
        <div class="uk-form-controls">          
            <input class="uk-input " type="text" name="question" value="<?php echo $getknowledge_info['question'];?>">
        </div>
    </div> 

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Answer:</label>
        <div class="uk-form-controls">
           <textarea id="editor1" class="uk-textarea" rows="8"  name="answer" placeholder="Enter Answer">
             <?php echo $getknowledge_info['answer'];?>
           </textarea> 
            
        </div>
    </div> 

     <button class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" type="submit" name="upd_knowledge">Add Ticket</button>

</form>
 
</div>
</div>
</div>
</div> 


 


  