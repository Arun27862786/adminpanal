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
   <style type="text/css">
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
             <legend class="uk-legend"> All Invoices</legend>
      </div>
     <!-- <div class="uk-width-auto@m">
        <a  href="<?php echo $link->link('add_invoices',backend);?>" class="uk-button uk-button-primary uk-border-rounded"><span uk-icon="icon: plus"></span> Add Invoice </a>
     </div> -->
 </div>
   <hr class="uk-divider-icon">
       <div class="uk-overflow-auto">
    <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
        <thead>
            <tr>
                <th class="uk_table_css">S.No.</th>                
                <th >Invoice Number</th>
                 <th >Project Title </th>
                <th >Client Name</th>
                <th >Status</th>
                <th >Due Date</th>  
                <th >Total</th>  
                <th >Amount Due</th> 
                 <th >Action</th> 
            </tr>
        </thead>
        <tbody>
        
        <?php  
        if(is_array($invoice)){  
            foreach ($invoice as $invoices){
             ?>    
           <tr>
                <td><?php echo $sno++;?></td>
                <td><?php echo $invoices['invoice_number'];?></td>
                <td><?php echo $invoices['project_name'];?></td> 
                <td><?php echo $clients_details['name'];?></td>  
                <td><?php echo $invoices['status'];?></td>               
                <td><?php echo $invoices['due_date'];?></td> 
                <td><?php echo $invoices['final_amount'];?></td>  
                <td><?php echo $invoices['due_amount'];?></td>  
                <td class="uk-text-nowrap"><ul class="uk-iconnav">
                   <li ><div class="uk-button-group"> 
    <div class="uk-inline">
        <button class="uk-button uk-button-default" type="button"><span uk-icon="icon:  triangle-down"></span></button>
        <div uk-dropdown="mode: click; boundary: ! .uk-button-group; boundary-align: true; pos: left-center"> 
            <ul class="uk-nav uk-dropdown-nav">  
            <li class="uk-nav-header"><a class="uk-text-success add_model" href="#modal_product"  id="<?php echo $invoices['id'];?>" uk-toggle  uk-icon="icon:strikethrough" >Payment</a></li>

         <li class="uk-nav-header"><a  class="uk-text-primary"href="<?php echo $link->link('view_invoice',frontend,'?update_id='.$invoices['id']);?>"  uk-icon="icon: file-edit">View</a></li>  

            </ul>
        </div>
    </div>
    
</div></li>
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
 
 <!-- ///////////////////////////////////////////////////////////////////////// -->


 <div id="modal_product" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <button class="uk-close-large uk-modal-close-default" type="button" uk-close></button>
        <div class="uk-modal-header">
            <h2 class="uk-modal-title">Payment</h2>
        </div>
         
        <div class="uk-modal-body"> 
<div class="uk-overflow-auto"> 
  <form class="model_data" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
     <input class="uk-input" type="hidden" name="invoice_id" id="pp">
     <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">Date</label>
       <input class="uk-input" type="date" name="paid_date" >
        </div>
        <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">Payment Method</label>
      <select class="uk-select" name="method">
                <option>Cheque</option>
                <option>Paypal</option>
                <option>Stripe</option>

            </select>
        </div>
        <div class="uk-margin"> 
      <label class="uk-form-label" for="form-stacked-text">Paid Amount</label>
       <input class="uk-input" type="number" name="paid_amount" >
        </div>
           
    <div class="uk-modal-footer" uk-grid> 
    <div class="uk-width-expand@m">
        <button  type="submit" id="select_products" class="uk-button uk-button-primary uk-border-rounded" name="paid_btn" ><span uk-icon="icon:plus;" ></span>Paid</button> 
    </div> 
      <div class="uk-width-auto@m" > 
        <button  class=" uk-button uk-button-danger uk-border-rounded uk-model-hide uk-button uk-button-default uk-modal-close" name="client_btn" type="reset" ><span uk-icon="icon:close;" id="reset_form" ></span>Cancel</button> 
    </div>  
    </div>  
  </form> 
                 </div>

           </div>
    </div>
</div> 

<script> 
$(".add_model").click(function(){

  var id_value = $(this).attr('id');
 
  $("#pp").val(id_value);

}); 
</script>
