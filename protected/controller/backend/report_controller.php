 <?php

$get_all_clients  = $db->get_all('clients');

$sql = "SELECT reports.id,reports.client_id,reports.description,reports.report_file,clients.name FROM reports INNER JOIN clients ON clients.id=reports.client_id";  
  
//$query = $db->run($sqq);
 $insert = $db->run($sql); 
       $report = $insert->fetchAll();
          
       //print_r($result);

$reports = $db->get_all('report');

if (isset($_REQUEST['reportid']) && $_REQUEST['reportid']!=""){

$get_report  = $db->get_row('reports',array('id'=>$_REQUEST['reportid']));
  $file_name = $get_report['report_file'];

    $delete_reports = $db->delete('reports',array('id'=>$_REQUEST['reportid']));
    if($delete_reports){

         $myFile = "uploads/report/" . $file_name;
         unlink($myFile); 
       // $session->redirect('report',backend);
   
   } }
 ?>
   