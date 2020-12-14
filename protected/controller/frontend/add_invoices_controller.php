<?php
$get_all_categories  = $db->get_all('categories'); 
$get_all_clients  = $db->get_all('clients');
$get_products  = $db->get_all('products');
$get_tax  = $db->get_all('tax');  
$get_project = $db->get_all('projects');

$sql = "SELECT invoice_number FROM invoices ORDER BY id DESC LIMIT 1";  
   
 $invoices = $db->run($sql)->fetchAll();

foreach ($invoices as $invoices1) {
  $qq=$invoices1['invoice_number'];
}

$string = $qq;
$rendom = preg_replace("/[^0-9]/", '', $string);

 if(isset($_REQUEST['project_id']) && $_REQUEST['project_id']!=""){
$getproject = $db->get_row('projects',array('id'=>$_REQUEST['project_id']));
}


if(isset($_POST['page_form'])){ 

 $response2=array();

   //$user_id = $_POST['user_id'];
   $client_id = $_POST['client_id'];
   $project_id = $getproject['id'];
   $invoice_number =$_POST['invoice_number'];
   $recurring = $_POST['recurring'];
   $date = $_POST['date'];
   $due_date = $_POST['due_date'];
   $status = $_POST['status'];
   $recurring_cycle = $_POST['recurring_cycle'];
   $notes = $_POST['notes'];   
   $terms = $_POST['terms'];     
   $discount = $_POST['discountf'];
   $finalAmount = $_POST['finalAmount'];
   $product = $_POST['product'];
   $description = $_POST['description'];
   $quantity = $_POST['quantity'];
   $price = $_POST['price'];
   $tax = $_POST['tax'];
   $taxCode = $_POST['taxCode'];
   $total = $_POST['total'];
    
      
   $arrlength = count($product);

   // print_r($_POST['product']);
   // echo$arrlength;
   //  exit();
 
    if(empty($date)){
     $display="<span uk-icon=\'icon: warning\'></span>Date can not be empty."; 
     $color="danger"; return; 
    }elseif(empty($due_date)){   
     $display="<span uk-icon=\'icon: warning\'></span>Due date can not be empty."; 
            $color="danger"; return;
    }elseif(empty($notes)){   
     $display="<span uk-icon=\'icon: warning\'></span>Note can not be empty."; 
            $color="danger"; return;
    }elseif(empty($terms)){   
     $display="<span uk-icon=\'icon: warning\'></span>Terms can not be empty."; 
            $color="danger"; return;
    }else{

$item_details=array();
if(is_array($product)){
  
foreach ($product as $key => $value) {
$d=$description[$key];
$q=$quantity[$key];
$p=$price[$key];
$t=$tax[$key];
$to=$total[$key];

   $item_details[$key]['item_name']=$value;
   $item_details[$key]['item_description']=$d;
   $item_details[$key]['item_quantity']=$q; 
   $item_details[$key]['item_price']=$p;
   $item_details[$key]['item_tax']=$t;
   $item_details[$key]['item_total']=$to;
  }

}
$insert_row = $db->insert('invoices',array(
  // 'user_id'=>$user_id,
  'client_id'=>$clients_details['id'],
  'project_id'=>$project_id,
  'invoice_number'=>$invoice_number,
  'recurring'=>$recurring,
  'date'=>$date, 
  'due_date'=> $due_date,
  'status'=> $status,
  'recurring_cycle'=> $recurring_cycle, 
  'notes'=> $notes,
  'terms'=> $terms,
  'final_amount'=> $finalAmount,
  'item_details'=>json_encode($item_details),  
  'due_amount'=>$finalAmount,
  'discount'=>$discount,
  'create_date'=>time(),
  'ip_address'=>$_SERVER['REMOTE_ADDR']));
 
if( $insert_row){
      $display="<span uk-icon=\'icon: success\'></span> Sccessfull Add Invoice.";  
      $color="success"; 
}else{
   $display="<span uk-icon=\'icon: warning\'></span> Problem.";  
    $color="success"; 
}
    
}
}

?>

