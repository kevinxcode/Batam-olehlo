
<body>

    <!-- Wrapper -->
    <div id="">

        <!-- Header -->
     <header id="header"><nav class="header-fullwidth navbar navbar-inverse navbar-fixed-top">
            <div id="header-wrap">
                <div class="container">
                    <!--Logo-->
                    <div id="logo">
                        <a href="session.php" class="logo" data-dark-logo="homepages/logo.png">
                            <img src="homepages/logo.png" alt="Polo Logo">
                        </a>
                    </div>
                    <!--End: Logo-->

                    <!--Top Search Form-->
                    <div id="top-search">
                        <form action="search-results-page.html" method="get">
                            <input type="text" name="q" class="form-control" value="" placeholder="Start typing & press  &quot;Enter&quot;">
                        </form>
                    </div>
                    <!--end: Top Search Form-->

					
					
                    <!--Header Extras-->
                    <div class="header-extras">
                        <ul>
                            <li>
                                <!--top search-->
                                <a id="top-search-trigger" href="#" class="toggle-item">
                                    <i class="fa fa-search"></i>
                                    <i class="fa fa-close"></i>
                                </a>
                                <!--end: top search-->
                            </li>
                            
                            <li>
                                <div class="topbar-dropdown">
                                    <a class="title"><i class="fa fa-globe"></i></a>
                                    <div class="dropdown-list">
                                        <a class="list-entry" href="#">a</a>
                                        <a class="list-entry" href="#">b</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!--end: Header Extras-->
					
					

                    <!--Navigation Resposnive Trigger-->
                    <div id="mainMenu-trigger">
                        <button class="lines-button x"> <span class="lines"></span> </button>
                    </div>
                    <!--end: Navigation Resposnive Trigger-->

                    <!--Navigation-->
                    <div id="mainMenu" class="light">
                        <div class="container">
                            <nav>
                                <ul>
                                      <li><a href="session.php">Olehlovers</a></li>
                                    <li><a href="session.php?p=about_us">Tentang Awak</a></li>
                                    <li><a href="session.php?p=galery">Galery </a></li>
                                  <li><a href="session.php?p=corner">Corner Kita </a></li>
                                   
										 <li><a href="session.php?p=contact">Contact US </a></li>
									 <li><a href="session.php?p=post">Posting </a></li>
									 <li><a href="model/aksi_logout.php">Keluar </a></li>
									 
                                            
                                        </ul>
                                    </li>
									
                                 
								 
                                    
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <!--end: Navigation-->
                </div>
            </div>
        </header>
        <!-- end: Header -->

     <?php
            $pages_dir = 'pages/content';
                if(!empty($_GET['p'])){
                    $pages = scandir($pages_dir, 0);
                    unset($pages[0], $pages[1]);
                    $p = $_GET['p'];
                    if(in_array($p.'.php', $pages)){
                        include($pages_dir.'/'.$p.'.php');
                    } else {
                        include($pages_dir.'/404.php');
                    }
                } else {
                    include($pages_dir.'/home.php');
                }
            ?>