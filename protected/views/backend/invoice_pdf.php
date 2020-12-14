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
    <?php } 
if (isset($_REQUEST['invoice_id']) && $_REQUEST['invoice_id']!=""){
  $invoice_row = $db->get_row('invoices',array('id'=>$_REQUEST['invoice_id']));

  $project_name = $db->get_row('projects',array('id'=>$invoice_row['project_id']));

  $client_name = $db->get_row('clients',array('id'=>$project_name['client_id']));
  $setting=$db->get_row("settings"); 
}
?>

<div class="content-padder content-background">
<div class="uk-section-small uk-padding-medium-top">
<div class="uk-container uk-container-large">
<div class="uk-card uk-card-default uk-padding-small">

<div uk-grid>
            <div class="uk-width-expand@m"> 
           <legend class="uk-legend"><h2>Invoice Record </h2></legend>
      </div>
     <div class="uk-width-auto@m">  
        <a  href="<?php echo $link->link('invoices',backend);?>" class="uk-button uk-button-danger uk-border-rounded"><span uk-icon="icon: arrow-left"></span> Go Back </a>
       <a href="<?php echo $link->link('update_invoice',backend,'?update_id='.$invoice_row['id']);?>"class="uk-button uk-button-danger uk-border-rounded">Edit Invoice</a> 
      <a href="<?php echo $link->link('test',backend,'?pdfpage=pdfpage');?>"class="uk-button uk-button-primary uk-border-rounded">Download PDF</a>     
 <a href="<?php echo $link->link('test2',backend,'?clients_id='.$client_name['id']);?>" class="uk-button uk-button-success uk-border-rounded">Send Email PDF</a>
     </div>
 </div>  
  <hr class="uk-divider-icon">
 
<?php

     $characters = json_decode($invoice_row['item_details'],true);
$html='<table style="width:100%;">

 <tr> 
<td style="width:50%;">
<h3>Invoice Details</h3><h4>Invoice Number:&nbsp;'.$invoice_row['invoice_number'].'<br>Date:&nbsp;'.$invoice_row['date'].'<br>Due Date:&nbsp;'.$invoice_row['due_date'].'<br>Status:&nbsp;'.$invoice_row['status'].'</h4>
</td>

<td style="width:50%;">
  
  </td>
 </tr>
 
 <tr> 
<td style="width:50%;"><div><h4>Our Information</h4><hr>
  Company:&nbsp;'.$setting['name'].'<br>Address:&nbsp;'.$setting['address'].'<br>Phone No:&nbsp;'.$setting['telephone1'].'<br>Email:&nbsp;'.$setting['email'].'</div>
</td>

<td style="width:50%;">
  <div><h4>Billing To</h4><hr>Client Name:&nbsp;'.$client_name['name'].'<br>Phone Number:&nbsp;'.$client_name['phone'].'<br>Project Name:&nbsp;'.$project_name['project_name'].'<br>  Status:&nbsp;'.$invoice_row['status'].
  '</div>
  </td>
 </tr>
</table>';
 $html.='<table style="width:100%; border-top:2px dotted #ccc; padding-top:20px;margin-top:10px;" >
        <thead>
            <tr>
                <th class="uk-table-shrink">Item Name</th>
                <th class="uk-table-shrink">Description</th>
                <th class="uk-table-shrink">Quantity</th>
                <th class="uk-table-shrink">Price</th> 
                <th class="uk-table-shrink">Item Tax</th>
                <th class="uk-table-shrink">Total</th>  
            </tr>
        </thead>
        <tbody>';
        if(is_array($characters)){ 
            foreach ($characters as $character){
           $html.='<tr>
                <td style="text-align:center;">'.$character['item_name'].'</td>
                <td style="text-align:center;">'.$character['item_description'].'</td> 
                <td style="text-align:center;">'.$character['item_quantity'].'</td>
                <td style="text-align:center;">'.$character['item_price'].'</td>  
                <td style="text-align:center;">'.$character['item_tax'].'%</td>
                <td style="text-align:center;">'.$character['item_total'].'</td>             
            </tr>';
        }}
       $html.='</table>';
       $html.='<table style="width:100%; border-top:2px dotted #ccc; padding-top:20px;margin-top:10px;" >
 <tr> 
<td style="width:70%;">
</td>
<td style="width:30%;">
     <br>Final Amount:&nbsp;'.$invoice_row['final_amount'].'&nbsp;Rupees<br>Discount:&nbsp;'.$invoice_row['discount'].'&nbsp;Rupees<br>Paid Amount:&nbsp;'.$invoice_row['paid_amount'].'&nbsp;Rupees<br>Due Amount:&nbsp;'.$invoice_row['due_amount'].'&nbsp;Rupees<br>Payment Date:&nbsp;'.$invoice_row['payment_date'].'<br>Payment Method:&nbsp;'.$invoice_row['payment_method'].'<br></td>
 </tr>
 </table>';
       $html.='<h5>Notes:&nbsp;</h5><p>'.$invoice_row['notes'].'</p><hr>
       <h5>Terms:&nbsp;</h5><p>'.$invoice_row['terms'].'</p>';
 
ob_start();
echo $html; 
file_put_contents('uploads/InvoicePdf/pdfpage.html', ob_get_contents());

 ?>
</div>
</div>
</div>
</div> 