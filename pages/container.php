
<body>

    <!-- Wrapper -->
    <div id="">

        <!-- Header -->
<span itemscope itemtype="http://schema.org/Product"><header id="header"><nav class="header-fullwidth navbar navbar-inverse navbar-fixed-top">
            <div id="header-wrap">
                <div class="container">
                    <!-- Logo -->
                    <div id="logo">
                        <a id="_brand2" itemprop="brand" itemscope itemtype="http://schema.org/Brand" href="home" class="logo" data-dark-logo="homepages/logo-dark.png">
                            <img itemprop="logo" src="homepages/logo.png" alt=""/>
                        </a>
                    </div>
                    <!-- End: Logo -->

                    <!--Top Search Form-->
                    <div id="top-search">
                        <form action="cari_produk" method="POST">
								<input type="text" name="tcari" class="form-control" placeholder="Cari Produk">
								
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
                                    <li><a href="home">Olehlovers</a></li>
                                    <li><a href="about_us">Tentang Awak</a></li>
                                    <li><a href="galery">Galery </a></li>
									 <li><a href="corner">Corner Kita </a></li>
                                    
                                       
                                 
									 <li><a href="contact">Contact US </a></li>
									 <li><a href="login">Login </a></li>
									
                                 
								 
                                    
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