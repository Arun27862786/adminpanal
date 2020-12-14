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

$content = $_FILES["report_file"]["name"];

                        $mailto = $get_client['email'];
                        $from_mail = "iwcnetwork@iwcnetwork.com";
                        $subject = $description;
                        $message = '<p> Message from IWCN</p>';
                        $from_name="Iwcnetwork";
                        
                        $boundary = "XYZ-" . date("dmYis") . "-ZYX";
                        $header = "--$boundary\r\n";
                        $header .= "Content-Transfer-Encoding: 8bits\r\n";
                        $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n\r\n"; 
                        $header .= "$email_body\r\n";
                        $header .= "--$boundary\r\n";
                  $header .= "Content-Type: application/octet-stream; name=\"".$filename."\r\n";
                    $header .= "Content-Disposition: attachment; filename=\"".$filename."\r\n";
                        $header .= "Content-Transfer-Encoding: base64\r\n";
                        $header .= "$content\r\n";
                        $header .= "--$boundary--\r\n";
                        $header2 = "MIME-Version: 1.0\r\n";
                        $header2 .= 'From: '.$from_name .'<'.$from_mail . ">\r\n" .
                            'Reply-To: '.$from_mail."\r\n"; 
                        $header2 .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n".
                             'X-Mailer: PHP/' . phpversion();
                        $confirm=mail($mailto,$subject,$header,$header2, "-r".$from_mail);

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