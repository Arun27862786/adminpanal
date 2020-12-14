<?php
 if (isset($_REQUEST['pdfpage']) && $_REQUEST['pdfpage']!=""){ 

 // $receipt=  SERVER_ROOT.'uploads/InvoicePdf/pdfpage.html';
  
   $qq=file_get_contents('uploads/InvoicePdf/pdfpage.html');

  include SERVER_ROOT.'/protected/library/MPDF/index.php';
 

                        $mpdf = new \Mpdf\Mpdf([ 'mode' => 'c','format' => 'A4',[190,236]]);

                        $mpdf->SetDisplayMode ( 'fullpage' );
                        $mpdf->list_indent_first_level = 0;

                        $mpdf->WriteHTML (utf8_encode($qq));
 
                        $mpdf->Output('','D');


      }

 ?>

