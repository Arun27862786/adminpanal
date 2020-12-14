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

<h3>Notification</h3>
<hr>
<ul class="uk-list uk-list-divider">
 
 <?php  
        if(is_array($notification)){ 

        foreach ($notification as $note){ 

     $name=$db->get_row('clients',array('id'=>$note['client_id']));

     $count=$db->get_count('notification',array('client_id'=>$note['client_id']));?>    
 
    <li><?php echo $name['name']?> --> <?php echo $count; ?> </li>
     
       <?php }
      } if(empty($notification)){
        echo"<li><h3>You Don't have Notification</h3></li>"; 
      }          
 ?>
  </ul>  
</br> 
</div>
</div>
</div>
</div>