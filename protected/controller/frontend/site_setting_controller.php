<?php

if(isset($_POST['submit_settings']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$website=$_POST['website'];
	$address=htmlentities($_POST['address']);
	$maxsizeallowed=$feature->getMaximumFileUploadSize();
	$country=$_POST['country'];
	$city=$_POST['city'];
	$state=$_POST['state'];
	$zip=$_POST['zip'];
	$timezone=$_POST['timezone'];
	$dateformat=$_POST['dateformat'];
	$telephone1=$_POST['telephone1'];
	$telephone2=$_POST['telephone2'];

	$currency_symbol=$_POST['currencysymbol'];

	$fiscal_month=$_POST['fiscalmonth'];
	$pdflogosize=$_POST['pdflogosize'];
	$logosize=$_POST['logosize'];


	$cookie_value=$_POST['cookie_expire'];
	$setting_logo=$_FILES['logo'];
	$pdf_logo=$_FILES['pdf_logo'];

	$create_date=date('y-m-d,h:i:s');
	$ip_address=$_SERVER['REMOTE_ADDR'];

	//For logo
	$handle= new upload($setting_logo);
	$ext=$handle->file_src_name_ext;
	$path=SERVER_ROOT.'/uploads/logo/';
	if(!is_dir($path))
	{
		if(!file_exists($path)){
			mkdir($path);
		}
	}
	elseif ($email=='')
	{
	    $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Company-Email cannot be empty.";
	    $color="danger";
	    
	    
	}

	elseif(!$fv->check_email($email))
	{
	    $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Please enter valid format in company-email.";
	    $color="danger";
	}
	elseif ($logosize>$maxsizeallowed)
	{
	    $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Logo File must be less than '.$upload_max_size.'";
	    $color="danger";
	}
	elseif ($pdflogosize>$maxsizeallowed)
	{
	    $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! PDF Logo File must be less than '.$upload_max_size.'";
	    $color="danger";
	}
	elseif ($ext!='jpeg' && $ext!='jpg' && $ext!='png' && $setting_logo['name'] !='' )
	{
	    $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Only jpeg,jpg and png files are allowed for print logo.";
	    $color="danger";
	}
	elseif(($setting_logo['name']) != ''){
	if(file_exists(SERVER_ROOT.'/uploads/logo/'.$settings['logo']) && (($settings['logo'])!=''))
	{
		unlink(SERVER_ROOT.'/uploads/logo/'.$settings['logo']);
	}
	$newfilename = $handle->file_new_name_body=time();
	$ext = $handle->image_src_type;
	$filename = $newfilename.'.'.$ext;
	if ($handle->image_src_type == 'jpg' || $handle->image_src_type == 'jpeg' || $handle->image_src_type == 'png' || $handle->image_src_type == 'JPG')
	{
		if ($handle->uploaded) {
			$handle->Process($path);
			if ($handle->processed)
			{
				$update=$db->update('settings',array('name'=>$name,'email'=>$email,'website'=>$website,'address'=>$address,'country'=>$country,'city'=>$city,'state'=>$state,'zip'=>$zip,'timezone'=>$timezone,'date_format'=>$dateformat,'telephone1'=>$telephone1,'telephone2'=>$telephone2,'currency_symbol'=>$currency_symbol,'cookie_expire'=>$cookie_value,'logo'=>$filename),array('id'=>1));
			}
		}
	}}
	else{
		$update=$db->update('settings',array('name'=>$name,'email'=>$email,'website'=>$website,'address'=>$address,'country'=>$country,'city'=>$city,'state'=>$state,'zip'=>$zip,'timezone'=>$timezone,'date_format'=>$dateformat,'telephone1'=>$telephone1,'telephone2'=>$telephone2,'currency_symbol'=>$currency_symbol,'cookie_expire'=>$cookie_value),array('id'=>1));
	}

	//for Pdf logo
	$handle= new upload($pdf_logo);
	$ext_pdf=$handle->file_src_name_ext;
	$path=SERVER_ROOT.'/uploads/pdflogo/';
	if(!is_dir($path))
	{
	    if(!file_exists($path)){
	        mkdir($path);
	    }
	}
	if ($ext_pdf!='jpeg' && $ext_pdf!='jpg' && $ext_pdf!='png' && $pdf_logo['name'] !='' )
	{
	    $display="<span uk-icon=\'icon: warning\'></span> Oh Snap ! Only jpeg,jpg and png files are allowed for pdf logo.";
	    $color="danger";
	    
	   
	}
	elseif(($pdf_logo['name']) != ''){
	    if(file_exists(SERVER_ROOT.'/uploads/pdflogo/'.$settings['pdflogo']) && (($settings['pdflogo'])!=''))
	    {
	        unlink(SERVER_ROOT.'/uploads/pdflogo/'.$settings['pdflogo']);
	    }
	    $newfilename = $handle->file_new_name_body=time();
	    $ext = $handle->image_src_type;
	    $filename = $newfilename.'.'.$ext;

	    if ($handle->image_src_type == 'jpg' || $handle->image_src_type == 'jpeg' || $handle->image_src_type == 'png' || $handle->image_src_type == 'JPG')
	    {
	        if ($handle->uploaded) {

	            $handle->Process($path);
	            if ($handle->processed)
	            {
	                $update=$db->update('settings',array('name'=>$name,'email'=>$email,'website'=>$website,'address'=>$address,'country'=>$country,'city'=>$city,'state'=>$state,'zip'=>$zip,'timezone'=>$timezone,'date_format'=>$dateformat,'telephone1'=>$telephone1,'telephone2'=>$telephone2,'currency_symbol'=>$currency_symbol,'cookie_expire'=>$cookie_value,'pdflogo'=>$filename),array('id'=>1));
	            }
	        }
	    }}
	if($update)
	{
	    $display="<span uk-icon=\'icon: check\'></span> Success! Data Updated.";
	    $color="success";
		
	}
	
	
	
	
}
?>