<?php 

 if (isset($_POST['form_select_items'])){

 $number_of_row=$_POST['number_of_row'];
 $selected = $_POST['product_checkbox'];

 $response=array();
  $response1=array();

 $response['number_of_row']=$number_of_row;

if(is_array($selected)){  
foreach($selected as $key=>$items) {

$item_select=$db->get_row("products",array("id"=>$items));

$response1[$key]=$item_select;

}}

$response['products']=$response1;

echo json_encode($response);
}


if(isset($_POST['page_form'])){ 

 $response2=array();

   $user_id = $_POST['user_id'];
   $client_id = $_POST['client_id'];
    $project_id = $_POST['project_id'];
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
    $response2['error']=true;
    $response2['msg']='Oopes! Date Can not Be Empty.';  
    }elseif(empty($due_date)){   
    $response2['error']=true;
    $response2['msg']='<div class="alert alert-danger">
    <i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">&times;</button>Oopes! Due_date Can not Be Empty.</div>';  
    }elseif(empty($notes)){   
    $response2['error']=true;
    $response2['msg']='Oopes! Notes Can not Be Empty.';  
    }elseif(empty($terms)){   
    $response2['error']=true;
    $response2['msg']='<div class="alert alert-danger">
    <i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">&times;</button>Oopes! Terms Can not Be Empty.</div>';  
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
$insert_row = $db->insert('invoices',array('client_id'=>$client_id,
  'user_id'=>$user_id,
  'project_id'=>$project_id,
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
      $response2['error']=false;
     $response2['msg']=' Data Successfully inserted. ';
}else{
  $response2['error']=true;
    $response2['msg']=' Problem in Data insertion. ';
}
    
}
   echo json_encode($response2);
}

?>