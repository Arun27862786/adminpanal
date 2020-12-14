<?php 
$get_all_clients  = $db->get_all('clients');    
if(isset($_POST['report_btn'])){
  $client_id=$_POST['clientid'];

  $get_client=$db->get_row('clients',array('id'=>$client_id));

 $description=$_POST['description'];  
 $file= $_FILES["report_file"]["name"];  
 $filename = time() . '_' . $_FILES["report_file"]["name"]; 
 echo $get_client['email'];

  if(empty($description))
    {   $display="<span uk-icon=\'icon: warning\'></span>description can not be empty.";
        $color="danger"; 
        return;
    }elseif(empty($client_id)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>Choose Client name.";
      $color="danger";
         return;
    }elseif(empty($file)) 
    { 
      $display="<span uk-icon=\'icon: warning\'></span>filename can not be empty.";
      $color="danger";
         return;
    }else{
       move_uploaded_file($_FILES["report_file"]["tmp_name"], "uploads/report/" . $filename);

        $insert_report = $db->insert('reports',array('client_id'=>$client_id,'description'=>$description,'report_file'=>$filename));
        
$to = $get_client['email'];
$from =$get_client['name'];
$fromName = "message"; 
$subject ="subject"; 
$file = $_FILES['report_file']['tmp_name']; 


$htmlContent = '<h1>PHP Email with Attachment</h1>
    <p>This email has sent from PHP script with attachment.</p>';

$headers = "From: $fromName"." <".$from.">";

$semi_rand = md5(time()); 
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

$headers .= "\nMIME-Version: 1.0\n" . "Content-Type: multipart/mixed;\n" . " boundary=\"{$mime_boundary}\""; 

$message = "--{$mime_boundary}\n" . "Content-Type: text/html; charset=\"UTF-8\"\n" .
"Content-Transfer-Encoding: 7bit\n\n" . $htmlContent . "\n\n"; 

if(!empty($file) > 0){
    if(is_file($file)){
        $message .= "--{$mime_boundary}\n";
        $fp =    @fopen($file,"rb");
        $data =  @fread($fp,filesize($file));

        @fclose($fp);
        $data = chunk_split(base64_encode($data));
        $message .= "Content-Type: application/octet-stream; name=\"".basename($file)."\"\n" . 
        "Content-Description: ".basename($file)."\n" .
        "Content-Disposition: attachment;\n" . " filename=\"".basename($file)."\"; size=".filesize($file).";\n" . 
        "Content-Transfer-Encoding: base64\n\n" . $data . "\n\n";
    }
}if($to==''){
       $display="<span uk-icon=\'icon: warning\'></span>Email can not be empty.";
         $color="danger"; return;
       }elseif(!filter_var($to,FILTER_VALIDATE_EMAIL))
       {      
         $display="<span uk-icon=\'icon: warning\'></span>Email Not valid.";
         $color="danger"; return;
       }
         else{ 
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;
$mail = @mail($to, $subject, $message, $headers, $returnpath); 
}
    }
    if($insert_report){
   $display="<span uk-icon=\'icon: check\'></span>Successfull Report Inserted.";
   $color="success"; 
    }
    else{
        $display="<span uk-icon=\'icon: warning\'></span>Problem in  Record Insertion.";
      $color="danger";
    }
}
?>