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
	<?php }  ?>     	 
<div class="content-padder content-background">          
<div class="uk-section-small uk-padding-medium-top">
<div class="uk-container uk-container-large">  
 <div class="uk-card uk-card-default uk-padding-small">
            <h2>Search Result</h2>
         <hr>  
         <h3>Search Result For:"<?php echo $get_data['question'];?>"</h3>  
         <?php if(is_array($get_reply)){ 
    foreach ($get_reply as $getreplys){
     ?> </br>
     <?php if(!$getreplys['client_id']==0) {
   $client=$db->get_row('clients',array('id'=>$getreplys['client_id']));
        ?>
  <article class="uk-comment uk-comment-primary">
    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
        <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="<?php echo SITE_URL.'/uploads/logins/'.$client['photo'];?>" width="80" height="80" alt="">
        </div>
        <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#"><?php echo  $client['name'];?></a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                   <li><?php echo $getreplys['time_stamp']; ?></li>  
            </ul>
        </div>
    </header> 
    <div class="uk-comment-body">
    <?php echo html_entity_decode($getreplys['answer']); ?> 
       
    </div>
</article><?php } if(!$getreplys['user_id']==0) { 
   
         $staff=$db->get_row('users',array('user_id'=>$getreplys['user_id']));   
  ?>
 
  <article class="uk-comment uk-comment-primary">
    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
        <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="<?php echo SITE_URL.'/uploads/logins/'.$staff['user_photo_file'];?>" width="80" height="80" alt="">
        </div>
        <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#">
              <?php echo $staff['firstname'].' '.$staff['lastname'];?></a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                   <li><?php echo $getreplys['time_stamp']; ?></li>  
                    
            </ul>
        </div>
    </header> 
    <div class="uk-comment-body">
        <?php echo html_entity_decode($getreplys['answer']); ?> 
            </div>
</article><?php }}}?>
<br>
  <form class="uk-form-horizontal " action="<?php $_SERVER['PHP_SELF'];?>" method="post" >
     <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Answer:</label>
        <div class="uk-form-controls">
           <textarea id="editor1" class="uk-textarea" rows="8"  name="answer" placeholder="Enter Answer"></textarea>  
        </div>
    </div> 

     <button class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" type="submit" name="add_answer">Submit</button>
</form>             
</div>
            </div>
        </div>
    </div> 
</div>