 <?php
 if(isset($_REQUEST['id']) && $_REQUEST['id']!=""){
    $getknowledge_info = $db->get_row('knowledge',array('id'=>$_REQUEST['id']));
      $getdepartment = $db->get_row('departments',array('id'=>$getknowledge_info['department_id']));
}  
 $depart=$db->get_all('departments');

if (isset($_POST['upd_knowledge'])) {
$department=$_POST['department'];   

 $question=$_POST['question']; 
 $answer=$_POST['answer'];
 
  if(empty($department) )
    {    $display="<span uk-icon=\'icon: warning\'></span>Department can not be empty.";
        $color="danger";   return;
   }
   elseif(empty($question)) 
     { 
       $display="<span uk-icon=\'icon: warning\'></span>Question can not be empty.";
              $color="danger";   return;
     }
    elseif(empty($answer)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Answer can not be empty.";
             $color="danger"; return;
    }else{
    $insert_knowledge = $db->update('knowledge',array('user_id'=>$user_details['user_id'],'department_id'=>$department,'question'=>$question,'answer'=>$answer,'create_date'=>time(),'ip_address'=>$_SERVER['REMOTE_ADDR']),array('id'=>$_REQUEST['id']));

      }
    if($insert_knowledge){
   $display="<span uk-icon=\'icon: check\'></span> Successfull Data Inserted.";
   $color="success"; 
    }
    else{
      $display="<span uk-icon=\'icon: warning\'></span> Problem in Insertion.";
      $color="danger";
    }
} 
 ?>