<?php $site_name=$db->get_row('settings'); ?>
<!DOCTYPE html>
<html>
    <head>
       <title><?php echo $site_name['name']; ?></title>

        <meta charset="UTF-8">
        <meta name="description" content="Clean and responsive administration panel">
        <meta name="keywords" content="Admin,Panel,HTML,CSS,XML,JavaScript"> 
        <meta name="author" content="Erik Campobadal"> 
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.1.6/css/uikit.min.css" />
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
    
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


      <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.foundation.min.css" />
         <link rel="stylesheet" href="<?php echo SITE_URL.'/assets/frontend/css/uikit_style.css';?>" />  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js" ></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js" ></script>
    </head>
    <body>
        <div uk-sticky class="uk-navbar-container tm-navbar-container uk-active">
            <div class="uk-container uk-container-expand">
                <nav uk-navbar>
                    <div class="uk-navbar-left">

                        <a id="sidebar_toggle" class="uk-navbar-toggle" uk-navbar-toggle-icon ></a>
                        <a href="<?php echo $link->link('home',frontend);?>" class="uk-navbar-item uk-logo">
                            Home
                        </a>
                    </div>
                    <div class="uk-navbar-right uk-text-white">
                        <ul class="uk-navbar-nav">
                        <li class="uk-active">
                        <!-- <a href="#"><i class="fa fa-bell fa-2x"></i><span class="uk-badge">16</span></a> --> 
<div uk-drop="offset: 5;mode:click;animation: uk-animation-scale-up; duration: 380;">
    <div class="uk-card uk-card-body uk-card-default uk-padding-medium">
                                   <ul uk-tab>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                        <li><a href="#">Item</a></li>
                                    </ul>
                                    
                                    <ul class="uk-switcher uk-margin">
                                        <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur, sed do eiusmod.</li>
                                    </ul></div>
</div>
                        
                        </li>
                        <li class="uk-active">
                                <a href="#" style="text-transform: capitalize;"><img class="uk-border-circle" src="<?php echo SITE_URL.'/uploads/logins/'.$clients_details['photo'];?>"  width="30">&nbsp; <?php echo $clients_details['name'];?> &nbsp;<span class="ion-ios-arrow-down"></span></a>
                                <div uk-dropdown="offset: 5;mode:click;animation: uk-animation-scale-up; duration: 380;" style="min-width: 140px;padding: 10px 0px 15px 20px;">   
                                   <ul class="uk-nav uk-dropdown-nav">
                                        <li class="uk-active"><a href="<?php echo $link->link('profile',frontend);?>">Profile</a></li> 
                                        <li><a href="#">Settings</a></li>
                                        <li><a href="<?php echo $link->link('logout',frontend);?>">Logout</a></ li>
                                   </ul> 
                                </div>     
                            </li>    
                        </ul>  
                    </div>  
                </nav>
            </div> 
        </div> 
        <div id="sidebar" class="tm-sidebar-left uk-background-default">
            <center>
                <div class="user">
                    <img width="80" class="uk-border-circle" src="<?php echo SITE_URL.'/uploads/logins/'.$clients_details['photo'];?>" />
                    <div class="uk-margin-top"></div>
                    <div id="name" class="uk-text-truncate"><?php echo $clients_details['name'].' '.$user_details['lastname'];?></div>
                    <div id="email" class="uk-text-truncate"><?php echo $clients_details['email'];?></div>
                    <span id="status" data-enabled="true" data-online-text="Online" data-away-text="Away" data-interval="10000" class="uk-margin-top uk-label uk-label-success">Online</span>
                </div>
                <br />
            </center>
            <ul class="uk-nav-default uk-nav-parent-icon" uk-nav>
                <!-- <li class="uk-active"><a href="#">Active</a></li> -->
                 <li <?php if($query1ans=='home'){?>class="uk-active"<?php }?>>
                    <a href="<?php echo $link->link('home',frontend);?>"><span class="uk-margin-small-right" uk-icon="icon: home"></span> Dashboard</a>
                </li>   
                <li <?php if($query1ans=='clients'){?>class="uk-active"<?php }?> ><a href="<?php echo $link->link('clients',frontend);?>"><span class="uk-margin-small-right" uk-icon="icon: users"></span>Clients</a></li>
                <li <?php if($query1ans=='ticket'){?>class="uk-active"<?php }?> ><a href="<?php echo $link->link('ticket',frontend);?>"><span class="uk-margin-small-right" uk-icon="icon: thumbnails"></span>Ticket</a></li>
                <li <?php if($query1ans=='knowledge_base'){?>class="uk-active"<?php }?> ><a href="<?php echo $link->link('knowledge_base',frontend);?>"><span class="uk-margin-small-right" uk-icon="icon: question"></span>Knowledge Base</a></li>
                 <li <?php if($query1ans=='project'){?>class="uk-active"<?php }?> ><a href="<?php echo $link->link('project',frontend);?>"><span class="uk-margin-small-right" uk-icon="icon: folder"></span>Project</a>
                    
                  <!--  <li <?php if($query1ans=='email'){?>class="uk-active"<?php }?> ><a href="<?php echo $link->link('email',frontend);?>"><span class="uk-margin-small-right" uk-icon="icon: mail"></span>Send Email</a></li> -->
                   <li <?php if($query2ans=='invoices'){?>class="uk-active"<?php }?> ><a href="<?php echo $link->link('invoices',frontend);?>"><span class="uk-margin-small-right" uk-icon="icon: album"></span>Invoices</a>
                  </li>
                  
                <li <?php if($query1ans=='report'){?>class="uk-active"<?php }?> ><a href="<?php echo $link->link('report',frontend);?>"><span class="uk-margin-small-right" uk-icon="icon: pull"></span>Report</a></li>
               
               
               
               
            <!--   <li class="uk-parent">
                    <a href="#">Parent</a>
                    <ul class="uk-nav-sub">
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </li>
                 <li class="uk-parent" title="Forms">
                                <a href="#">Forms</a>   
                                <ul class="uk-nav-sub">
                                    <li>
                                        <ul class="uk-nav-default uk-nav-parent-icon uk-nav" uk-nav="">
                                    <li class="uk-parent">
                                            <a href="#">Form Examples</a>
                                                <ul class="uk-nav-default uk-nav-sub">
                                                    <li class=""><a href="">Booking Forms</a></li>
                                                    <li><a href="#">Car Rental forms</a></li>
                                                </ul>
                                           </li>                           
                                </ul>
                                   </li>
                                </ul> 
                           </li> 
                <li class="uk-nav-header">Header</li>
                <li class="uk-parent">
                    <a href="#"><span class="uk-margin-small-right" uk-icon="icon: home"></span> Dashboard</a>
                    <ul class="uk-nav-sub">   
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                    </ul>
                </li>              
                        <li><a href="#">Item</a></li>
                        <li><a href="#">Item</a></li>
                <li class="uk-nav-divider"></li>
                <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: trash"></span> Item</a></li>-->
            </ul> 
             </div>
</html>
 