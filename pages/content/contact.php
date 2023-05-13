

       <!-- Page title -->
        <section id="page-title" data-parallax-image="homepages/galery.jpg">
            <div class="container">
                <div class="page-title">
                  
                </div>
                <div class="breadcrumb">
                    <ul>
                        
                        </li>
                    </ul>
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
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-uppercase">Get In Touch</h3>
                                <p>Alamak Sedapnyee oleh oleh kekinian batam olehlo</p>

                                <div class="m-t-30">
                                    
                                    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h3 class="text-uppercase">Address & Map</h3>
                                <div class="row">
                                    <div class="col-md-8">
                                        <address>
						  <strong>Batamolehlo</strong><br>
						Outlet Batam Olehlo:
Komp. Ruko Tunas Bizpark Blok. B No. 23A
Tunas Industrial Park, Batam Center 29464<br>
						  
						  <abbr title="Phone">P:</abbr> 08xxx
						</address>
                                    </div>
                                    
                                </div>
                                <!-- Google map sensor -->
                                 <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d249.31719170663473!2d104.07725793413378!3d1.1059516950102437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sid!4v1519637180602" width="400" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                            </div>

                        </div>

                    </div>
                    <!-- end: post content -->

                    <!-- Sidebar-->
                    <div class="sidebar col-md-3">
                      
                            <!--Tabs with Posts-->
                            <div class="widget ">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="post-thumbnail-list">
								<?php 
include "config/config.php";
 $username=$_SESSION['username'];
$sql=mysql_query("select * from berita order by rand(), id_berita  desc limit 5  ");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="user_images/<?PHP echo $datapost['userPic'];?>">
                                        <div class="post-thumbnail-content">
                                            <a href="read_more&userName=<?php echo $datapost['userName']; ?>"><?php  $text = $datapost[userName];  echo str_replace("-", " ", $text);?></a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> <?php echo $datapost['tanggal']; ?></span>
                                            <span class="post-category"><i class="fa fa-tag"></i> <?php echo $datapost['kategori']; ?></span>
                                        </div>
                                    </div>
                                     <?php }?>
                                </div>
                            </div>
                            <!--End: Tabs with Posts-->

                          
                            
                        </div>
                    
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section>
        <!-- end: Content -->

     

    </div>
    <!-- end: Wrapper -->
