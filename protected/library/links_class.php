<?php
class links{
	
	public function link($pagename,$panel=NULL,$query=NULL)
	{
		
if(SEO==1)
{
    if($panel==backend)
    {
       // $query=preg_replace('/&/', '?', $query, 1);
        
        //$query=str_replace('&', '?', $query);
        return SITE_URL."/".backend."/".$pagename."/".$query;
    }
    else {
   // $query=preg_replace('/&/', '?', $query, 1);
    
    //$query=str_replace('&', '?', $query);
    return SITE_URL."/".$pagename."/".$query;
    }
}
    else
    {
if($panel==backend)
	return SITE_URL."/index.php?".frontend."=redirecttoadmin&".backend."=".$pagename.$query;

else 
	return SITE_URL.'/index.php?'.frontend.'='.$pagename.$query;
		
    }	
		
	}
	public function hrefquery()
	{
		$request=$_SERVER['REQUEST_URI'];

		$parsed= explode('?', $request);
	
		
       $parsed=explode('=',$parsed['2']);
      
	return $parsed;
		
	}
	
}
?>