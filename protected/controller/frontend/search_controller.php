<?php 
if (isset($_REQUEST['question']) && $_REQUEST['question']!=""){
  $name=$_REQUEST['question'];
  $get_data = $db->get_all('knowledge',array('question'=>$name));
   
   if(is_array($get_data)){
   foreach ($get_data as $get_dat){
    $question=$get_dat['question'];
   }}
  } 

  
?> 