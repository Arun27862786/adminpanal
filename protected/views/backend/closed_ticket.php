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
	<?php $sno=1; ?>
<div class="content-padder content-background">          
            <div class="uk-section-small uk-padding-medium-top">
                <div class="uk-container uk-container-large">
 <div class="uk-card uk-card-default uk-padding-small">
    <div uk-grid> 
            <div class="uk-width-expand@m">
             <legend class="uk-legend"> Closed Tickets</legend>
      </div>
     <div class="uk-width-auto@m">  
     <a  href="<?php echo $link->link('ticket',backend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>     
        
     </div>
 </div>
   <hr class="uk-divider-icon">
       <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk-table-shrink">S.No.</th>
                <th class="uk-table-shrink">Client Name</th>
                <th class="uk-table-shrink">Department</th>
                <th class="uk-table-shrink">Subject</th>
                <th class="uk-table-shrink">Status</th> 
                <th class="uk-table-shrink">Priority</th>
                <th class="uk-table-shrink">Created</th>
                <th class="uk-table-shrink">Last Reply</th>  
                 <th class="uk-table-shrink">Action</th> 
            </tr>
        </thead>
        <tbody>
        
        <?php  
        if(is_array($tickets)){ 
            foreach ($tickets as $ticket){
                 $depart=$db->get_row('departments',array('id'=>$ticket['department_id']))
             ?>    
           <tr>
               <td ><?php echo $sno++;?></td>
                <td><?php echo $ticket['name'];?></td>
                <td><?php echo $depart['department'];?></td> 
                <td><?php echo $ticket['subject'];?></td>
                <td><?php echo $ticket['status'];?></td> 
                <td><?php echo $ticket['priority'];?></td> 
                <td><?php echo  $ticket['timestamp'];?></td>
                <td><?php echo $ticket['update_time'];?></td>
                <td class="uk-text-nowrap"><ul class="uk-iconnav">
   
   <li ><div class="uk-button-group"> 
    <div class="uk-inline">
        <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"></span></button>
        <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true; pos: left-center"> 
            <ul class="uk-nav uk-dropdown-nav">  
            <li class="uk-nav-header"><a  class="uk-text-primary" href="<?php echo $link->link('update_ticket',backend,'?id='.$ticket['id']);?>"  uk-icon="icon: file-edit">Answer</a></li>

             <li class="uk-nav-header"><a class="uk-text-danger"  href="<?php echo $link->link('ticket',backend,'?ticketid='.$ticket['id']);?>" onclick="return confirm('Are you sure to Delete')"  uk-icon="icon: trash">Delete</a></li>
            </ul>
        </div>
    </div>
    
</div></li>
</ul></td>                 
            </tr>
            <?php  }}?> 
        </tbody>
    </table>
                            </div>
                </div>
            </div>
        </div>
</div> 

 