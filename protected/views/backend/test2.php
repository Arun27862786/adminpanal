<?php
 if (isset($_REQUEST['clients_id']) && $_REQUEST['clients_id']!=""){ 

  $clients_id=$_REQUEST['clients_id'];
  $clients=$db->get_row('clients',array('id'=>$clients_id));
  $qq=file_get_contents('uploads/InvoicePdf/pdfpage.html');
      
                        $filename = "Invoice Pdf";  
                        include SERVER_ROOT.'/protected/library/MPDF/index.php';
 
                        $mpdf = new \Mpdf\Mpdf([ 'mode' => 'c','format' => 'A4',[190,236]]);

                        $mpdf->SetDisplayMode ( 'fullpage' );
                        $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first//level of a list
                        $mpdf->WriteHTML (utf8_encode($qq));
                        $content = $mpdf->Output('', 'S');
                        $content = chunk_split(base64_encode($content));

                        $mailto = $clients['email'];
                        //   $mailto = 'durgeshkumar@iwcnetwork.com';
                        $from_mail = "iwcnetwork@iwcnetwork.com";
                        $subject = $filename;
                        $message = '<p> Message from IWCN</p>';
                        $from_name="Iwcnetwork";

                        //Headers of PDF and e-mail
                        //Headers of PDF and e-mail
                        $boundary = "XYZ-" . date("dmYis") . "-ZYX";
                        $header = "--$boundary\r\n";
                        $header .= "Content-Transfer-Encoding: 8bits\r\n";
                        $header .= "Content-Type: text/html; charset=ISO-8859-1\r\n\r\n"; // or utf-8
                        $header .= "$email_body\r\n";
                        $header .= "--$boundary\r\n";
                        $header .= "Content-Type: application/octet-stream; name=\"".$filename.".pdf\"\r\n";
                        $header .= "Content-Disposition: attachment; filename=\"".$filename.".pdf\"\r\n";
                        $header .= "Content-Transfer-Encoding: base64\r\n";
                        $header .= "$content\r\n";
                        $header .= "--$boundary--\r\n";
                        $header2 = "MIME-Version: 1.0\r\n";
                        $header2 .= 'From: '.$from_name .'<'.$from_mail . ">\r\n" .
                            'Reply-To: '.$from_mail."\r\n";
                        //$header2 .= "CC: ".CC_EMAIL."\r\n";
                        $header2 .= "Content-type: multipart/mixed; boundary=\"$boundary\"\r\n".
                             'X-Mailer: PHP/' . phpversion();
                        $confirm=mail($mailto,$subject,$header,$header2, "-r".$from_mail);
    if($confirm){
   $display="<span uk-icon=\'icon: check\'></span> Send Email Succssfully.";
   $color="success"; 
   //$session->redirect('invoice_pdf',backend,'?display='.$display);
    $session->redirect('invoices/?display='.$display,backend);
    }
    else{
    	$display="<span uk-icon=\'icon: warning\'></span> Problem in Sending Email.";
      $color="danger";
    }

}
 ?>

