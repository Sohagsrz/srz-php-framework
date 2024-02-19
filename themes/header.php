<html lang="en">

<head>
       
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <!-- <link href="/assets/css/style.css" rel="stylesheet">  -->
  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo get_title();?></title> 
     
    <script src="//code.jquery.com/jquery-1.12.4.js"></script>
    <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
</head>

<body>
   <?php 
   
   /*** <div class="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 ps-0">
                    <div class="navbar d-flex justify-content-between">
                        <a href="/">
                            <div class="logo">
                            <img src="<?php echo get_site_logo();?>">
                            </div>
                        </a>
                        <div class="menu align-self-center">
                            <button type="button" class="border-0 currency-btn" style="background: transparent;" data-bs-toggle="modal" data-bs-target="#currencymodal">
                           <span class="leftbtn"><span class="flag-icon flag-icon-us flag-icon-squared"></span></span> <span class="madal-btn"> USD</span>
                        </button>
                            <button class="btn btn-white hambruger" type="button" data-bs-toggle="offcanvas" data-bs-target="#rightOffcanvas" aria-controls="rightOffcanvas">
                            <img src="/assets/images/navbtn.png">
                          </button>
                          
                            <div class="offcanvas offcanvas-end" tabindex="-1" id="rightOffcanvas" aria-labelledby="rightOffcanvasLabel">
                                <div class="offcanvas-header">
                                    
                                    <h5 id="offcanvasLightLabel">
                                    <img src="<?php echo get_site_logo();?>" >
                                    </h5>


                                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                                </div>
                                <div class="offcanvas-body">
                                    <div>
                                        <ul class="list-unstyled side_bars">
                                            <li class="link active">
                                                <a class="nav-link" href="/">Home</a>
                                            </li>
                                            <li class="link ">
                                                <a class="nav-link" href="/about">About Us</a>
                                            </li>
                                            <li class="link "><a class="nav-link" href="/faq">FAQ</a></li>
                                            <li class="link ">
                                                <a class="nav-link" href="/blog">Blog</a>
                                            </li>
                                            <li class="link ">
                                                <a class="nav-link" href="/contact">Contact</a>
                                            </li>

                                            <?php if(auth()->isLoggedIn()){?>
                                                <div class="dropdown">
                                                <a class="btn btn-light dropdown-toggle" 
                                                href="javascript:;" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false" style="width: 100%;    font-weight: 500;    border: none;text-align: left;background: #fff;">
                                                    <img src="<?php echo get_user_profile_picture();?>"   style="width: 38px;border-radius: 100%;">
                                                   <?php echo auth()->getEmail();?>
                                                </a>

                                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="width:100%">
                                                     <li><a class="dropdown-item" href="/dashboard">User Dashboard</a>
                                                    </li>

                                                    <li>
                                                        <form action="/logout" method="post">
                                                            <input type="hidden" name="_token" value="24PSTeIIe2S3dokZqY2BtbuWFi8oWBhghx0JDiWv">                                                            <button type="submit" class="dropdown-item">Log Out</button>
                                                        </form>
                                                    </li>

                                                </ul>
                                            </div>

                                            <?php }else{ ?>
                                            
                                                <li class="link"><a href="/login">Login</a></li>
                                            <?php }?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    ***/ 