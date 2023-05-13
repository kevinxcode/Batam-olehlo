
        <!-- Page title -->
        <section id="page-title" data-parallax-image="homepages/slide2.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Kategori </h1>
                    <span>Batamolehlo - Oleh Oleh Kekinian Batam</span>
                </div>
                <div class="breadcrumb">
                    <ul>
                        <li><a href="#">Home</a>
                        </li>
                        
                        </li>
                        <li class="active"><a href="#">Oleh Oleh Kekinian Batam</a>
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
                        <!-- Page title -->
                        <div class="page-title">
                          
							
							
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

<!-- Gallery -->
                        <div class="grid-layout grid-4-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
						
						 <h4 class="panel-title">Edit User</h4>
				
                           <?php
                            include "config/config.php";
                            $sql="select * from tb_pengguna where username='$_GET[username]'";

                            $tampil=mysql_query($sql);
                            $data=mysql_fetch_array($tampil);
                        ?>
                            <form class="form-horizontal form-bordered" data-parsley-validate="true" name="demo-form" action="model/update_penggunaIT.php" method="POST">
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="fullname">Username :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" id="fullname" name="username" placeholder="Username" .="true" value="<?php echo $data['username']; ?>" />
                                        <input type="hidden" name="username2" value="<?php echo "$data[username]"; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Password :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input type="password" name="password" id="password-indicator-default" class="form-control m-b-5" />
                                        <div id="passwordStrengthDiv" class="is0 m-t-5"></div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4" for="fullname">Nama Lengkap :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <input class="form-control" type="text" id="fullname" name="nama_lengkap" placeholder="Nama Lengkap" .="true"value="<?php echo $data['nama_lengkap']; ?>"  />
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4">Level :</label>
                                    <div class="col-md-6 col-sm-6">
                                        <select class="form-control" id="select-required" name="level" .="true">
                                            <option><?php echo $data['level']; ?> </option>
                                           
                                        </select>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label class="control-label col-md-4 col-sm-4"></label>
                                    <div class="col-md-6 col-sm-6">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
						
							
                        </div>
                        <!-- end: Gallery -->

						
 
            
	

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
