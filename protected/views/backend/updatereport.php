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
  <h3>Update a Value of Report</h3> 
  <form   method="post" action="<?php $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data"> 
<table><tr><td>
  <input class="uk-input" id="form-horizontal-text" name="report_id" type="hidden"  value="<?php echo $report['id'];?>"> 
</td></tr>
<tr><td>
  <div class="uk-margin"><label><b>Description:</b></label></td><td>
   <textarea class="uk-textarea"  type="text"  rows="8" cols="50" name="description" ><?php echo $report['description'];?></textarea>
   </div> 
  </td></tr><tr><td>

 <label><b>Upload file:</b></label></td><td>
  <div> 
   <input class="uk-input uk-form-width-large"  type="file" name="report_file">
    </br></br>
    </div>
</td></tr><tr><td>
     </br>
  <button class="uk-button uk-button-primary" type="submit" name="update_btn">Update</button>
</td></tr>
  </table>
</form>
</br>
 
<hr> 
</div>
</div>
</div>
</div>

 
 