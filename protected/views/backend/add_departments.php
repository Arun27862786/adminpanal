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
             <legend class="uk-legend">Add Department</legend>
      </div>
     <div class="uk-width-auto@m">
      <a  href="<?php echo $link->link('departments',backend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>  
     </div>
 </div> 
  <hr class="uk-divider-icon">

<form class="uk-form-horizontal " action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
 
    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Department:</label>
        <div class="uk-form-controls">          
            <input class="uk-input " type="text" name="department" placeholder="Enter Department"> 
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Description:</label>
        <div class="uk-form-controls">
          <textarea class="uk-textarea"  type="text"  rows="8" cols="60" name="description" placeholder="Enter Description"></textarea>  
        </div>
    </div>

  <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Thumbnail:</label>
        <div class="uk-form-controls">
             <div class="uk-margin uk-inline "> 
        <input class="uk-input uk-form-width-large" type="file" name="thumbnail"  >
            </div> 
        </div>
   </div>

     <button class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" type="submit" name="add_dp">Submit</button>

</form>
 
</div>
</div>
</div>
</div>


 


  