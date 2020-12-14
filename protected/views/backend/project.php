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
  <style>
    .hourly_css{
          border: 1px solid #eee;
    padding: 8px;
    border-radius: 5%;
        margin-left: 10px;
    }
    .uk-nav-header:not(:first-child) {
    margin-top: 5px;
   }
    
  </style>
<div class="content-padder content-background">          
            <div class="uk-section-small uk-padding-medium-top">
                <div class="uk-container uk-container-large">  
 <div class="uk-card uk-card-default uk-padding-small">
    <div uk-grid> 
            <div class="uk-width-expand@m"> 
             <div class="uk-margin">
            <select name="status" id="project_status" class="uk-select uk-border-rounded uk-form-width-medium ">
                <option <?php if($status_v=='active'){echo 'selected="selected"';} ?> value="active">Active</option>
                <option  <?php if($status_v=='archived'){echo 'selected="selected"';} ?> value="archived">Archived</option>
            </select>           
        </div>
      </div>
     <div class="uk-width-auto@m">
                
        <a  class="uk-button uk-button-primary uk-border-rounded" href="#modal_product" id="add_model" uk-toggle><!-- <span uk-icon="icon: plus-circle"></span> -->New Project</a>
     </div>
 </div>
   <hr class="uk-divider-icon">
       <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk_table_css">S.No.</th>
                <th>Title</th>
                <th>Clients</th>
                <th>Invoice Number</th>
                <th>Start Dat</th>
                <th>Total</th>   
                <th>Due</th>                  
                 <th>Action</th> 
            </tr> 
        </thead>
        <tbody>
        
        <?php  
        if(empty($active) && empty($archived)){
        if(is_array($project)){  
            foreach ($project as $projects){
              $departs=$db->get_row('clients',array('id'=>$projects['client_id']));
              $invoice=$db->get_row('invoices',array('project_id'=>$projects['id'])) 
             ?>    
           <tr>
                <td ><?php echo $sno++;?></td>
                <td><?php echo $projects['project_name'];?></td>  
                <td><?php echo $departs['name'];?></td> 
                <td><?php echo $invoice['invoice_number'];?></td>              
                <td><?php echo $projects['time_stamp'];?></td> 
                <td><?php echo $projects['final_amount'];?></td>  
                <td><?php echo $projects['due_amount'];?></td>                    
                <td class="uk-text-nowrap"><ul class="uk-iconnav">
   
    <li ><div class="uk-button-group"> 
    <div class="uk-inline">
        <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"></span></button>
        <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true; pos: left-center"> 
            <ul class="uk-nav uk-dropdown-nav ">  
               <li class="uk-nav-header"><a class="uk-text-success" href="<?php echo $link->link('project_invoice',backend,'?project_id='.$projects['id']);?>" uk-icon="icon: folder">Invoices</a></li>  

             <li class="uk-nav-header"><a class="uk-text-success" href="<?php echo $link->link('view_project',backend,'?view_id='.$projects['id']);?>" uk-icon="icon: file-edit">View Project</a></li>
             
             <li class="uk-nav-header"><a class="uk-text-primary" href="<?php echo $link->link('project',backend,'?archived_id='.$projects['id']);?>" onclick="return confirm('Are you sure to archived ')" uk-icon="icon: file-edit">archived Project</a></li>

             <li class="uk-nav-header"><a class="uk-text-danger" href="<?php echo $link->link('project',backend,'?delete_id='.$projects['id']);?>" onclick="return confirm('Are you sure to Delete')" uk-icon="icon: trash">Delete Project</a></li>
            </ul>
        </div>
    </div>
</div></li>
 </td>                 
            </tr>
            <?php  }}}  
            
        if(is_array($archived)){  
            foreach ($archived as $project2){
              $departs=$db->get_row('clients',array('id'=>$project2['client_id'])); 
               $invoice1=$db->get_row('invoices',array('project_id'=>$project2['id'])); 
             ?>    
           <tr>
                <td ><?php echo $sno++;?></td>
                <td><?php echo $project2['project_name'];?></td>  
                <td><?php echo $departs['name'];?></td>                 
                <td><?php echo $invoice1['invoice_number'];?></td>              
                <td><?php echo $project2['time_stamp'];?></td>
                 <td><?php echo $project2['final_amount'];?></td> 
                <td><?php echo $project2['due_amount'];?></td>                   
                <td class="uk-text-nowrap"><ul class="uk-iconnav">
   
    <li ><div class="uk-button-group"> 
    <div class="uk-inline">
        <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"></span></button>
        <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true; pos: left-center">
            <ul class="uk-nav uk-dropdown-nav">  
                <li class="uk-nav-header"><a class="uk-text-success" href="<?php echo $link->link('project_invoice',backend,'?project_id='.$project2['id']);?>" uk-icon="icon: folder">Invoices</a></li>
              <li class="uk-nav-header"><a class="uk-text-success" href="<?php echo $link->link('view_project',backend,'?view_id='.$project2['id']);?>" uk-icon="icon: file-edit" >View Project</a></li>
             <li class="uk-nav-header"><a class="uk-text-primary" href="<?php echo $link->link('project',backend,'?restore_id='.$project2['id']);?>"onclick="return confirm('Are you sure to Restore ')"uk-icon="icon: file-edit" >Restore Project</a></li>
             <li class="uk-nav-header"><a class="uk-text-danger"  href="<?php echo $link->link('project',backend,'?delete_id='.$project2['id']);?>" onclick="return confirm('Are you sure to Delete')" uk-icon="icon: trash" >Delete Project</a></li>
            </ul>
        </div>
    </div>
</div></li>
 </td>                 
            </tr>
            <?php  }}  
                
        if(is_array($active)){  
            foreach ($active as $project4){
              $departs=$db->get_row('clients',array('id'=>$project4['client_id']));
              $invoice1=$db->get_row('invoices',array('project_id'=>$project4['id']));  
             ?>    
           <tr>
                <td ><?php echo $sno++;?></td>
                <td><?php echo $project4['project_name'];?></td>  
                <td><?php echo $departs['name'];?></td>
                <td><?php echo $invoice1['invoice_number'];?></td>             
                <td><?php echo $project4['time_stamp'];?></td> 
                <td><?php echo $project4['final_amount'];?></td> 
                <td><?php echo $project4['due_amount'];?></td>                   
                <td class="uk-text-nowrap"><ul class="uk-iconnav">
   
    <li ><div class="uk-button-group"> 
    <div class="uk-inline">
        <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"></span></button>
        <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true; pos: left-center"> 
            <ul class="uk-nav uk-dropdown-nav"> 
              <li class="uk-nav-header"><a class="uk-text-success" href="<?php echo $link->link('project_invoice',backend,'?project_id='.$project4['id']);?>" uk-icon="icon: folder">Invoices</a></li> 
             <li class="uk-nav-header"><a class="uk-text-success" href="<?php echo $link->link('view_project',backend,'?view_id='.$project4['id']);?>"uk-icon="icon: file-edit" >View Project</a></li>
             <li class="uk-nav-header"><a  class="uk-text-primary"href="<?php echo $link->link('project',backend,'?archived_id='.$project4['id']);?>"onclick="return confirm('Are you sure to archived ')" uk-icon="icon: file-edit">archived Project</a></li>
             <li class="uk-nav-header"><a class="uk-text-danger"  href="<?php echo $link->link('project',backend,'?delete_id='.$project4['id']);?>" onclick="return confirm('Are you sure to Delete')"  uk-icon="icon: trash">Delete Project</a></li>
            </ul>
        </div>
    </div>
</div></li>
 </td>                 
            </tr>
            <?php  }}  ?>
            
        </tbody>
    </table>
                 </div>
                </div>
            </div>
        </div>
</div> 
 

 <!-- ///////////////////////////////////////////// -->

 <div id="modal_product" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">

        <button class="uk-close-large uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
           <center> <h2 class="uk-modal-title">Create New Project</h2></center>
        </div>
        
        <div class="uk-modal-body"> 
<div class="uk-overflow-auto"> 
  <form class="model_data"   action="<?php $_SERVER['PHP_SELF'];?>" method="post"> 
     <div class="uk-margin"> 
    <label class="uk-form-label" for="form-horizontal-text">CHOOSE CLIENT</label> 
        <div class="uk-form-controls">
       <select  name='client_id' class="uk-select uk-border-rounded">
       <?php if(is_array($clients)){ 
        foreach($clients as $all) { ?> 
        <option value="<?php echo $all['id']; ?>">  
         <? echo $all['name']; ?></option> 
          <? } }?>
        </select>
      </div> 
    </div>

     <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">PROJECT NAME</label>
       <input class="uk-input uk-border-rounded" type="text" name="project_name" placeholder="Homepage Redesign">
        </div>

       
    <div><div class="uk-margin"> 
    <label class="uk-form-label" for="form-horizontal-text">CURRENCY </label>
      <div class="uk-child-width-expand@m uk-grid-small"  uk-grid>
        <div class="uk-form-controls ">
       <select  name='currency' class="uk-select uk-border-rounded">
      <option>ALL</option>
      <option>AFL</option>
      <option>USD</option> 
      <option>PHP</option>
      <option>RON</option>
      <option>SBD</option>
      <option>STD</option>
      <option>USD</option>
        </select>          
      </div> 

      <!--  <div class="uk-form-controls hourly_css"> 
         <output><input class="uk-checkbox" type="checkbox" id='hourly'> Hourly Rate?</output>
      </div> 
    </div>
    <div class="uk-margin" style="display:none;" id="per_hour"> 
      <label class="uk-form-label" for="form-stacked-text">RATE PER-HOUR</label>
    <input class="uk-input uk-border-rounded" type="text" name="per_hour" placeholder="60.00">
        </div>
  </div> -->
   
</div>

 
    <div class="uk-modal-footer" >  
        <button  type="submit" class="uk-button uk-button-success uk-border-rounded uk-width-1-1@m" name="add_project" ><span uk-icon="icon:plus;" ></span>Add Project</button> 
        
    </div>  
     

  </form> 
        </div>

           </div>
    </div>
</div>  

<script>

$(document).ready(function(){
  $("#hourly").click(function(){
    $("#per_hour").toggle();

  });
});

$("#project_status").change(function(){
 
var st=$('#project_status').val();
window.location="<?php echo $link->link('project',backend,'?status_v='); ?>"+st;
});
</script>