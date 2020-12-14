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
<h2><? echo $project['project_name']; ?></h2>
 <p><img width="80" class="uk-border-box" src="<?php echo SITE_URL.'/uploads/logins/'.$clients['photo'];?>" />
 <? echo$clients['name']; ?></p>
</div>
  <div class="uk-width-auto@m">
<? if($project['status']==0){ $status="Active"; }
elseif($project['status']==1){ $status="Archived"; } if($status=="Active"){?>
    <div class="uk-button-group">
    <button class="uk-button uk-button-default">Status</button>
    <div class="uk-inline">
        <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"><?php echo$status; ?></span></button>
        <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true;">
            <ul class="uk-nav uk-dropdown-nav">   
             <li class="uk-nav-header"><a href="<?php echo $link->link('view_project',frontend,'?archive_id='.$project['id']);?>" onclick="return confirm('Are you sure to Archived ')"> Archived Project</a></li>

             <li class="uk-nav-header"><a href="<?php echo $link->link('view_project',frontend,'?delete_id='.$project['id']);?>" onclick="return confirm('Are you sure to Delete')" >Delete Project</a></li>
            </ul>
        </div>
    </div>
</div>
</div><?php }elseif($status=="Archived"){?>
    <div class="uk-button-group">
    <button class="uk-button uk-button-default">Status</button>
    <div class="uk-inline">
        <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"><?php echo$status; ?></span></button>
        <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true;">
            <ul class="uk-nav uk-dropdown-nav">   
             <li class="uk-nav-header"><a href="<?php echo $link->link('view_project',frontend,'?restore_id='.$project['id']);?>" onclick="return confirm('Are you sure to Restore ')"> Restore Project</a></li>

             <li class="uk-nav-header"><a href="<?php echo $link->link('view_project',frontend,'?delete_id='.$project['id']);?>" onclick="return confirm('Are you sure to Delete')" >Delete Project</a></li>
            </ul>
        </div>
    </div>
</div><? } ?>

</div>
</div>
<br>
 <div class="uk-card uk-card-default uk-padding-small">
               
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Invoices</h3>
                <hr>
            </div>
        
    <div class="uk-card"> 
        <div class="uk-body">
       <div class="uk-overflow-auto">
        <?php  if(!empty($invoices)){ ?>
    <table class=" uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk-table-shrink" >S.No.</th>
                <th class="uk-table-shrink">Project</th> 
                <th class="uk-table-shrink">Status</th>
                <th class="uk-table-shrink">Due Date</th>  
                <th class="uk-table-shrink">Total</th> 
                <th class="uk-table-shrink">Amount Due</th>   
                 <!-- <th class="uk-table-shrink">Action</th>  -->
            </tr>
        </thead>
        <tbody>
        
        <?php $sno1=1;  

        if(is_array($invoices)){  
            foreach ($invoices as $invoice){
              $depart=$db->get_row('clients',array('id'=>$invoice['clients_id']))
             ?>    
           <tr>
                <td><?php echo $sno1++;?></td>                  
                <td><?php echo $invoice['project_name'];?></td>  
                <td><?php echo $invoice['status'];?></td>               
                <td><?php echo $invoice['due_date'];?></td> 
                <td><?php echo $invoice['final_amount'];?></td> 
                <td><?php echo $invoice['due_amount'];?></td>   
                <!-- <td class="uk-text-nowrap"><ul class="uk-iconnav">
   
    <li ><a href="<?php echo $link->link('update_ticket',backend,'?id='.$ticket['id']);?>" class=" uk-text-primary uk-button uk-button-default uk-button-small" uk-icon="icon: file-edit"></a></li>
   
    <li><a href="<?php echo $link->link('ticket',backend,'?ticketid='.$ticket['id']);?>" class="uk-text-danger uk-button uk-button-default uk-button-small" uk-icon="icon: trash" onclick="return confirm('Are you sure to Delete')" ></a></li>
</ul></td> -->                 
            </tr>
            <?php  }}  ?>
        </tbody>
    </table>
  <?php }else{ echo"<h3>You Don't have Invoices </h3>";} ?>
                 </div></div>
    </div>
    
</div> 

<br>
<div class="uk-card uk-card-default uk-padding-small">
    
            
            <div class="uk-width-expand">
                <h3 class="uk-card-title uk-margin-remove-bottom">Tickets</h3>
                <hr>
            </div>
        
    <div class="uk-body">
       <div class="uk-overflow-auto">
         <?php  if(!empty($tickets)){ ?>
    <table class=" uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk-table-shrink">S.No.</th> 
                <th class="uk-table-shrink">Department</th>
                <th class="uk-table-shrink">Subject</th>  
                <th class="uk-table-shrink">Status</th> 
                <th class="uk-table-shrink">Priority</th>   
                 <!-- <th class="uk-table-shrink">Action</th>  -->
            </tr>
        </thead>
        <tbody>
        
        <?php $sno=1; 
        if(is_array($tickets)){  
            foreach ($tickets as $ticket){
              $depart=$db->get_row('departments',array('id'=>$ticket['department_id']))
             ?>    
           <tr>
                <td ><?php echo $sno++;?></td>   
                <td><?php echo $depart['department'];?></td>               
                <td><?php echo $ticket['subject'];?></td> 
                <td><?php echo $ticket['status'];?></td> 
                <td><?php echo $ticket['priority'];?></td>   
                <!-- <td class="uk-text-nowrap"><ul class="uk-iconnav">
   
    <li ><a href="<?php echo $link->link('update_ticket',backend,'?id='.$ticket['id']);?>" class=" uk-text-primary uk-button uk-button-default uk-button-small" uk-icon="icon: file-edit"></a></li>
   
    <li><a href="<?php echo $link->link('ticket',backend,'?ticketid='.$ticket['id']);?>" class="uk-text-danger uk-button uk-button-default uk-button-small" uk-icon="icon: trash" onclick="return confirm('Are you sure to Delete')" ></a></li>
</ul></td>                 
            </tr> -->
            <?php  }}  ?>
        </tbody>
    </table>
  <?php }else{ echo"<h3>You Don't have Tickets </h3>";} ?>
                 
    </div>
     
</div>


        
 </div>
</div>
</div>

  