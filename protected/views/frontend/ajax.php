<?php
if (isset($_POST['page_form'])) {
 
$response=array();

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];
 
if ($fname=="") {
    $response['error']=true;
    $response['msg']='<div class="alert alert-danger">
    <i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">&times;</button>Oopes! Email Cannot Be Empty.
    </div>';
}elseif ($lname=="") {
    $response['error']=true;
    $response['msg']='<div class="alert alert-danger">
    <i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">&times;</button>Oopes! Email Cannot Be Empty.
    </div>';
}elseif ($email=="") {
    $response['error']=true;
    $response['msg']='<div class="alert alert-danger">
    <i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">&times;</button>Oopes! Email Cannot Be Empty.
    </div>';
}elseif ($address=="") {
    $response['error']=true;
    $response['msg']='<div class="alert alert-danger">
    <i class="lnr lnr-sad"></i> <button class="close" data-dismiss="alert" type="button">&times;</button>Oopes! Email Cannot Be Empty.
    </div>';
}else{ 
    $insert = $db->insert('pages',array('firstname'=>$fname,'lastname'=>$lname,'email'=>$email,'address'=> $address)); 
     if($insert)
     {
    $response['error']=false;
    $response['msg']="Data Insert successfully";
      
    }else{
        $response['error']=true;
    $response['msg']=" Email already exist.";
         } 
}
echo json_encode($response);
}

//-------------------------------------------------------------------------------------------
if (isset($_POST['Del_var'])) {

$delete_id= $_POST['idd'];
$table= $_POST['table'];
$response=array(); 

if ($delete_id=="") {
    $response['error']=true;
    $response['msg']="Problem in id";
}elseif($table=="") {

    $response['error']=true;
    $response['msg']="Problem in Table name";
}else{

    $delete_page = $db->delete($table, array('id'=>$delete_id));
   if($delete_page){
    $response['error']=false;
    $response['msg']="Data Deleted successfully";
    $response['display']="<span uk-icon=\'icon: check\'></span>Data Deleted successfully";
      $response['color']="success"; 

   }else{
         $response['error']=true;
       $response['msg']="Problem";
   }
} 
echo json_encode($response); 
}
//------------------------------------------------------------------------------------------

if (isset($_POST['update_form'])) {
 
$response=array();

$id=$_POST['id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$address=$_POST['address'];

if ($fname=="") {
    $response['error']=true;
    $response['msg']="first name empty";
}elseif ($lname=="") {
    $response['error']=true;
    $response['msg']="Last name empty";
}elseif ($email=="") {
    $response['error']=true;
    $response['msg']="Email name empty";
}elseif ($address=="") {
    $response['error']=true;
    $response['msg']="Address name empty";
}else{ 
$updated = $db->update('pages',array('firstname'=>$fname,'lastname'=>$lname,'address'=> $address),array('id'=>$id)); 
    if($updated)
     {
    $response['error']=false;
    $response['msg']="Data Update successfully";
    $response['display']="Data Update successfully";
     $display="<span uk-icon=\'icon: check\'></span> Success! Data Available.";
      $color="success"; 
      
    }else{
        $response['error']=true;
    $response['msg']="Nothing You Do!";
         }
}
echo json_encode($response);
}
?>