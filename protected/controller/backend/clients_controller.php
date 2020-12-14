<?php
//$db->order_by="`id` DESC"; 

  $get_all_clients = $db->get_all('clients');
 
// if(isset($_REQUEST['id']) && $_REQUEST['id']!=""){
// $getclient = $db->get_row('clients',array('id'=>$_REQUEST['id']));
// }
// if(isset($_POST['update_client'])){ 
//     $name = $_POST['name']; 
//     $email = $_POST['email'];  
//     $phone = $_POST['phone'];
//     $address = $_POST['address']; 
     
//     $update_client = $db->update('clients',array('name'=>$name,'email'=>$email,'phone'=>$phone,'address'=>$address),array('id'=>$_REQUEST['id']));
//     if($update_client){
//         $session->redirect('clients',backend);
//     }
// }
// elseif (isset($_REQUEST['delete_id']) && $_REQUEST['delete_id']!=""){
//     $delete_client = $db->delete('clients',array('id'=>$_REQUEST['delete_id']));
//     if($delete_client){
//         $session->redirect('clients',backend);
//     }
// }elseif(isset($_POST['add_client']))
// {
//     $name = $_POST['name'];
//     $email = $_POST['email'];
//     $phone = $_POST['phone'];
//     $address = $_POST['address'];

//      if(empty($name) ){
//         $display="<span uk-icon=\'icon: warning\'></span>Name field is empty.";
//         $color="danger"; return;
//    }elseif(empty($phone) ){
//         $display="<span uk-icon=\'icon: warning\'></span>Phone field is empty.";
//         $color="danger"; return;
//    }elseif($email=='')
//     {
//         $display="<span uk-icon=\'icon: warning\'></span>Email field is empty.";
//         $color="danger"; return;
//     }
//     elseif(!filter_var($email,FILTER_VALIDATE_EMAIL))
//     {      
//          $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Email Not valid.";
//          $color="danger"; return;
//     }elseif(empty($address) ){
//         $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! address field is empty.";
//         $color="danger"; return;
//    } else{
//     $insert  = $db->insert('clients',array('name'=>$name,'email'=>$email,'phone'=>$phone,'address'=>$address,'created_date'=>time(),'ip'=>$_SERVER['REMOTE_ADDR']));
//     } 
//     if($insert)
//      {
//     $display="<span uk-icon=\'icon: check\'></span> Success! Data inserted.";
//       $color="success";
      
//     }else{
//         $display="<span uk-icon=\'icon: warning\'></span> Email already exist.";
//       $color="danger";
//          }    
     
//}
?>