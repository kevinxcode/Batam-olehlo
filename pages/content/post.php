
        <!-- Page title -->
        <section id="page-title" data-parallax-image="homepages/galery.jpg">
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
                            <h1>Recent Post</h1>
							
							<a class="btn btn-default" href="session.php?p=post_data"> Tambah<i class="fa fa-paper-plane"></i></a>
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
                        <!-- Blog -->
                        <div id="blog" class="post-thumbnails">

						
						  <?php 
//        includekan fungsi paginasi
        include 'pagination1.php';
//        koneksi ke database
     include "config/config.php";
//        query

        $sql =  "SELECT * FROM berita ORDER BY id_berita desc";
        $result = mysql_query($sql);
        
        //pagination config start
        $rpp = 5; // jumlah record per halaman
        $reload = "session.php?p=post";
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
						
                            <!-- Post item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
										<div class="gallery7">
                                            <img alt="" src="user_images/<?php echo $data['userPic']; ?>">
                                        </a> </div>
                                       
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo $data['tanggal']; ?></span>
                                      
                                        <h2><a href="#"><?php  $text = $data[userName];  echo str_replace("-", " ", $text);?>
</a></h2>
                                        <p><?php
$kalimat = "$data[userProfession]";
$sub_kalimat = substr($kalimat,0,25);
echo $sub_kalimat;
?></p>

                                        <a href="read_more&userName=<?php echo $data['userName']; ?>" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>
										<br>
 <a class="btn btn-danger btn-icon btn-circle" href="model/delete.php?id_berita=<?php echo $data['id_berita']; ?>"> Hapus<i class="glyphicon glyphicon-trash"></i></a>
                                    </div>
                                </div>
                            </div>
                            <!-- end: Post item-->
							<hr>
<?php
                        $i++; 
                        $count++;
                    }
                    ?>
            
			<div class="box-tools pull-right">
            <div><?php echo paginate_one($reload, $page, $tpages); ?></div>
        </div>

                        </div>
                        <!-- end: Blog -->
                    </div></div>
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

  