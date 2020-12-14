 <?php 
 if(isset($_POST['emailbtn']) && isset($_FILES['attachment'])) 
{ 
  //print_r($_POST);
$to = $_POST["email"];
$from =$_POST["name"];
$fromName = $_POST["message"]; 
$subject = $_POST["subject"]; 
$file = $_FILES['attachment']['tmp_name'];
 
$htmlContent = '<h1> Attachment </h1>
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
        $display='<div class="uk-alert-danger" uk-alert>
            <a class="uk-alert-close" uk-close></a>
            <p>Email can not be empty.</p>
            </div>';
       }elseif(!filter_var($to,FILTER_VALIDATE_EMAIL))
       {      
         $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Email Not valid.";
         $color="danger";
       }
         else{ 
$message .= "--{$mime_boundary}--";
$returnpath = "-f" . $from;
$mail = @mail($to, $subject, $message, $headers, $returnpath); 
}
 if($mail)
     {
    $display="<span uk-icon=\'icon: check\'></span> Success! ";
      $color="success";      
    }else{
       $display="<span uk-icon=\'icon: warning\'></span> Query not run";
       $color="danger";
    }
}
?>