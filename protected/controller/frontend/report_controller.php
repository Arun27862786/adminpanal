  <?php

$client_id = $clients_details['id'];
$get_all_clients  = $db->get_all('clients');
$sql = "SELECT reports.id,reports.description,reports.report_file,clients.name FROM reports INNER JOIN clients ON clients.id=reports.client_id WHERE reports.client_id='$client_id'";  
 
       $insert = $db->run($sql); 
       $report = $insert->fetchAll();
  
$reports = $db->get_all('report');

if (isset($_REQUEST['reportid']) && $_REQUEST['reportid']!=""){

$get_report  = $db->get_row('reports',array('id'=>$_REQUEST['reportid']));
  $file_name = $get_report['report_file'];
    $delete_reports = $db->delete('reports',array('id'=>$_REQUEST['reportid']));
    if($delete_reports){
    	$myFile = "uploads/report/" . $file_name;
         unlink($myFile) or die("Couldn't delete file");
        $session->redirect('report',frontend);
   
   }else{
    	$display="<span uk-icon=\'icon: warning\'></span>Problem in  Record deletion.";
      $color="danger";
    } 
 }
 ?>
    