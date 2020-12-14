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
    <div class="uk-section-small">
    <div class="uk-container uk-container-large">                    
    <div class="uk-card uk-card-default uk-padding-small">
    <div uk-grid>
            <div class="uk-width-expand@m">
             <legend class="uk-legend">Add Report Form</legend>
      </div>
     <div class="uk-width-auto@m">
      <a  href="<?php echo $link->link('report',frontend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>
         
     </div>
 </div>

  <hr class="uk-divider-icon">

  <form class="uk-form-horizontal uk-margin-large" action="<?php $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data"> 

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Description:</label>
        <div class="uk-form-controls">
          <textarea class="uk-textarea"  type="text"  rows="3" cols="60" name="description" placeholder="Enter Description"></textarea>  
        </div>
    </div>
        <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Upload file:</label>
        <div class="uk-form-controls">
             <div class="uk-margin uk-inline "> 
        <input class="uk-input uk-form-width-large" type="file" name="report_file"  >
    </div> 
        </div>
    </div>
    
 <div class="uk-margin">
     <button class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" name="report_btn" type="submit" name="report_btn"> <span uk-icon="icon:pencil;"></span> Add Report</button>
    </div>
</form>                                 
     </div>
   </div>
  </div>
</div> 
 
