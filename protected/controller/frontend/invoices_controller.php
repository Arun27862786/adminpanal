 <?php  
$client=$clients_details['id'];

$sql = "SELECT invoices.id,invoices.invoice_number,invoices.status,invoices.due_date,invoices.final_amount,invoices.due_amount,projects.project_name FROM invoices LEFT JOIN projects ON invoices.project_id=projects.id where projects.client_id='$client'";  
  
 $invoice = $db->run($sql)->fetchAll();
 

//$invoice=$db->get_all('invoices'); 
   

if (isset($_REQUEST['id']) && $_REQUEST['id']!="")
{
    $delete_invoice = $db->delete('invoices',array('id'=>$_REQUEST['id']));
    $delete_product = $db->delete('product_fields',array('id'=>$_REQUEST['id']));
    if($delete_invoice){
        $session->redirect('invoices',backend);
   } 
}   
 
 if(isset($_POST['paid_btn'])){

 $invoice_id=$_POST['invoice_id'];
 $paid_date=$_POST['paid_date'];
 $method=$_POST['method'];
 $paid_amount=$_POST['paid_amount'];   

  if(empty($paid_date))
    {   $display="<span uk-icon=\'icon: warning\'></span>Date can not be empty.";
        $color="danger";    return;
    }elseif(empty($paid_amount)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Amount can not be empty.";
      $color="danger";   return;
    }else{ 

    	$get_invoice = $db->get_row('invoices',array('id'=>$invoice_id));

    	$famount=$get_invoice['final_amount'];
        $famount=$get_invoice['final_amount'];
        $damount=$get_invoice['due_amount'];
        $pamount=$famount-$damount;
        $paid_amount=$paid_amount+$pamount;
        $due_amount=$famount-$paid_amount;

    $paid_insert = $db->update('invoices',array('client_id'=>$clients_details['id'],'payment_method'=>$method,'paid_amount'=>$paid_amount,'due_amount'=>$due_amount,'payment_date'=>$paid_date),array('id'=>$invoice_id));
 

        if($due_amount==0){
            $paid_insert1 = $db->update('invoices',array('status'=>"paid"),array('id'=>$invoice_id));
            
        }else{
            $paid_insert2 = $db->update('invoices',array('status'=>"partialy paid"),array('id'=>$invoice_id));
             
        }
    }
    if($paid_insert){
	   $display="<span uk-icon=\'icon: check\'></span>Successfully paid.";
	   $color="success";	   
    }
    else{
    	$display="<span uk-icon=\'icon: warning\'></span>Problem .";
        $color="danger";
    }
}

    
 ?>    
 