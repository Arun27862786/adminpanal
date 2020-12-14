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

  <h3>Reply</h3>
  <h4><?php echo "Subject: ".$getticket['subject'];?></h4>
 <?php if(is_array($getticket_rep)){ 
    foreach ($getticket_rep as $getreplys){
     ?> </br>
     <?php if(!$getreplys['client_id']==0) {?>
  <article class="uk-comment uk-comment-primary">
    <header class="uk-comment-header uk-grid-medium uk-flex-middle" uk-grid>
        <div class="uk-width-auto">
            <img class="uk-comment-avatar" src="<?php echo SITE_URL.'/uploads/logins/'.$clients_details['photo'];?>" width="80" height="80" alt="">
        </div>
        <div class="uk-width-expand">
            <h4 class="uk-comment-title uk-margin-remove"><a class="uk-link-reset" href="#"><?php echo  $clients_details['name'];?></a></h4>
            <ul class="uk-comment-meta uk-subnav uk-subnav-divider uk-margin-remove-top">
                   <li><?php echo $getreplys['time_stamp']; ?></li>  
            </ul>
        </div>
    </header> 
    <div class="uk-comment-body">
        <p><?php echo"Description: ".$getreplys['description']; ?></p>
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
        <p><?php echo "Description: ".$getreplys['description']; ?></p>
    </div>
</article><?php }}}?>
 
<form class="uk-form-horizontal uk-margin-large"  method="post" action="<?php $_SERVER['PHP_SELF'];?>">
 
 <input class="uk-input" id="form-horizontal-text" name="ticket_id" type="hidden"  value="<?php echo $getticket['id'];?>"> 
 
  
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
        <label class="uk-form-label" for="form-horizontal-select">Status:</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="form-horizontal-select"  name="status">
             <option><?php echo $getticket['status'];?></option>
                <option value="open" >Open</option>
                <option value="closed" >Closed</option> 
            </select>
        </div>
    </div>

    <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-select">Priority:</label>
        <div class="uk-form-controls">
            <select class="uk-select" id="form-horizontal-select"  name="priority">
            <option><?php echo $getticket['priority'];?></option>
                <option value="high" >High</option>
                <option value="medium" >Medium</option>
                <option value="low" >Low</option>
            </select> 
        </div>
    </div> 

      <div class="uk-margin">
        <label class="uk-form-label" for="form-horizontal-text">Description:</label>
        <div class="uk-form-controls">
       <textarea class="uk-textarea"  type="text"  rows="6" cols="50" name="description"></textarea>
        </div> 
    </div>

 <button class="uk-button uk-button-success uk-width-1-1 uk-border-rounded  uk-margin-small-bottom" name="update_btn" type="submit"><span uk-icon="icon:file-edit;"></span>Reply</button> 

<hr> 
</div>
</div>
</div>
</div>
</div>
 
 