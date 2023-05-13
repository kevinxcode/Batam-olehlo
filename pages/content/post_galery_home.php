
        <!-- Page title -->
        <section id="page-title" data-parallax-image="homepages/slide2.jpg">
            <div class="container">
                <div class="page-title">
                  
                </div>
                <div class="breadcrumb">
                    
                </div>
            </div>
        </section>
        <!-- end: Page title -->


<!-- Content -->
        <section id="page-content" class="sidebar-left">
            <div class="container">
                <div class="row">
                    <!-- post content -->
                    <div class="content col-md-9">
                        <!-- Page title -->
                        <div class="page-title">
                            <h1>Recent Post Home Image</h1>
							
							<a class="btn btn-default" href="session.php?p=post_data_galery_home"> Tambah<i class="fa fa-paper-plane"></i></a>
                            <div class="breadcrumb float-right">
                                <ul>
                                    <li><a href="#">Home</a>
                                    </li>
                                    <li><a href="#">posting</a>
                                    </li>
                                    
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- end: Page title -->
<hr>
 <!-- Gallery -->
                <div class="grid-layout grid-3-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
				<?php 
//        includekan fungsi paginasi
        include 'pagination1.php';
//        koneksi ke database
     include "config/config.php";
//        query

        $sql =  "SELECT * FROM foto where kategori='home' ORDER BY id_foto desc";
        $result = mysql_query($sql);
        
        //pagination config start
        $rpp = 18; // jumlah record per halaman
        $reload = "session.php?p=post_galery";
        $page = intval($_GET["page"]);
        if($page<=0) $page = 1;  
        $tcount = mysql_num_rows($result);
        $tpages = ($tcount) ? ceil($tcount/$rpp) : 1; // total pages, last page number
        $count = 0;
        $i = ($page-1)*$rpp;
        $no_urut = ($page-1)*$rpp;
        //pagination config end
        ?>
		 <?php
                    while(($count<$rpp) && ($i<$tcount)) {
                        mysql_data_seek($result,$i);
                        $data = mysql_fetch_array($result);
                    ?>
                    <div class="grid-item" Align="center"><?php  $text = $data[userName];  echo str_replace("-", " ", $text);?>
					<div class="pull-right">
                                <div class="btn-group">
							
								<a  href="model/delete_foto.php?id_foto=<?php echo $data['id_foto']; ?>"> Hapus<span class="caret"></span></i></a>

                                    </button>
                                    
                                </div>
                            </div>
					
                        <a class="image-hover-zoom" href="user_images/<?php echo $data['userPic']; ?>" data-lightbox="gallery-item">
						<div class="gallery7"><img src="user_images/<?php echo $data['userPic']; ?>"></a>
						
                    </div>
                    </div>
                          <?php
                        $i++; 
                        $count++;
                    }
                    ?>
                </div>
				
                <!-- end: Gallery -->


						<hr>

            
			<div class="box-tools pull-right">
            <div><?php echo paginate_one($reload, $page, $tpages); ?></div>
        </div>

                    </div>
                    <!-- end: post content -->

					
					
					
					
                    <!-- Sidebar-->
                    <div class="sidebar col-md-3">
                        <div class="pinOnScroll">
                            <!--Tabs with Posts-->
                            <div class="widget ">
                                <h4 class="widget-title"><i class="glyphicon glyphicon-th-list"></i> Menu</h4>
                                <div class="post-thumbnail-list">
                                            <a href="session.php?p=post">Posting Data</a>
                                        </div>
										<hr>
                               
									
									 <div class="post-thumbnail-list">
                              
                                            <a href="session.php?p=post_galery">Posting Galery</a>
                                        </div>	<hr>
										
										<div class="post-thumbnail-list">
                              
                                            <a href="session.php?p=post_galery_home">Home Image</a>
                                        </div>	<hr>
                                  
									
									 <div class="post-thumbnail-list">
                                  
                                            <a href="session.php?p=kategori">Kategori</a>
                                        </div>	<hr>
                                    
									
									 <div class="post-thumbnail-list">
                                    
                                            <a href="session.php?p=profile">Profile</a>
                                        </div>	<hr>
                                  
									
									 <div class="post-thumbnail-list">
                                   
                                            <a href="session.php?p=User">User</a>
                                        </div>	<hr>
                                    

                             
                            </div>
                            </div>
                            <!--End: Tabs with Posts-->

                         
                          

                            <!--widget newsletter-->
                            <div class="widget  widget-newsletter">
                                <form class="widget-subscribe-form form-inline" action="include/subscribe-form.php" role="form" method="post">
                                    <h4 class="widget-title">Newsletter</h4>
                                    <small>Stay informed on our latest news!</small>
                                    <div class="input-group">
                                        <input type="email" aria-required="true" name="widget-subscribe-form-email" class="form-control required email" placeholder="Enter your Email">
                                        <span class="input-group-btn">
                  <button type="submit" id="widget-subscribe-submit-button" class="btn btn-default"><i class="fa fa-paper-plane"></i></button>
                  </span> </div>
                                </form>
                                 
                            </div>
                            <!--end: widget newsletter-->
                        </div>
                    </div>
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section>
        <!-- end: Content -->
        

    </div>
    <!-- end: Wrapper -->
