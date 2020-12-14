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
             <legend class="uk-legend"> Add Project</legend>
      </div>
      <div class="uk-width-auto@m">
        <a  href="<?php echo $link->link('project',backend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>
     </div>
 </div>
   <hr class="uk-divider-icon">
       <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk-table-shrink">S.No.</th>
                <th class="uk-table-shrink">Client Name</th>
                <th class="uk-table-shrink">Status</th>
                <th class="uk-table-shrink">Due Date</th>  
                <th class="uk-table-shrink">Total</th>  
                <th class="uk-table-shrink">Amount Due</th> 
                 <th class="uk-table-shrink">Action</th> 
            </tr>
        </thead>
        <tbody>
        
        <?php  
        if(is_array($invoice)){  
            foreach ($invoice as $invoices){
              $depart=$db->get_row('clients',array('id'=>$invoices['client_id'])); 
             ?>    
           <tr>
                <td ><?php echo $sno++;?></td>
                <td><?php echo $depart['name'];?></td>  
                <td><?php echo $invoices['status'];?></td>               
                <td><?php echo $invoices['due_date'];?></td> 
                <td><?php echo $invoices['final_amount'];?></td>  
                <td><?php echo $invoices['Amount_due'];?></td>  
                <td class="uk-text-nowrap"><ul class="uk-iconnav">
   
    <li ><a href="<?php echo $link->link('update_ticket',backend,'?id='.$invoices['id']);?>" class=" uk-text-primary uk-button uk-button-default uk-button-small" uk-icon="icon: file-edit">Reply</a></li>
   
    <li><a href="<?php echo $link->link('invoices',backend,'?id='.$invoices['id']);?>" class="uk-text-danger uk-button uk-button-default uk-button-small" uk-icon="icon: trash" onclick="return confirm('Are you sure to Delete')" >Delete</a></li>
</ul></td>                 
            </tr>
            <?php  }}  ?>
        </tbody>
    </table>
                 </div>
                </div>
            </div>
        </div>
</div> 
 