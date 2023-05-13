
        <!-- Page title -->
        <section id="page-title" data-parallax-image="homepages/galery2.jpg">
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
                            <h1>Kategori</h1>
							
							<a class="btn btn-default" href="session.php?p=post_data_galery"> Tambah<i class="fa fa-paper-plane"></i></a>
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
						
						
				
                            <h4 class="panel-title">Tambah kategori</h4>
                        </div>
                        <div class="panel-body panel-form">
                            <form class="form-horizontal form-bordered" data-parsley-validate="true"  action="./model/input_kategori.php" method="POST">
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4" for="fullname">Kategori :</label>
									<div class="col-md-6 col-sm-6">
										<input class="form-control" type="text" id="kategori" name="kategori" placeholder="kategori" data-parsley-required="true" />
									</div>
								</div>
								
								
								
								<div class="form-group">
									<label class="control-label col-md-4 col-sm-4"></label>
									<div class="col-md-6 col-sm-6">
										<button type="submit" class="btn btn-primary">Submit</button> <button type="reset" class="btn btn-danger">Resset</button>
									</div>
								</div>
                            </form>	
						
							
                        </div>
                        <!-- end: Gallery -->

						
 <table width="100%"  class="table table-striped table-bordered table-hover" id="data-table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>kategori</th>
                                        
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        include "config/config.php";
                                        $i=0;
                                        if(isset($_POST['button'])){
                                            $sql=mysql_query("select * from kategori where orcl or konsumen  Like '%" .$_POST['tcari']."'");
                                            }else{
                                                $sql=mysql_query("select * from kategori ");
                                            }while($data=mysql_fetch_array($sql)){
                                                $i++; 
                                        ?>

                                        <tr>
                                        <td align="center"><?php echo $i ?></td>
                                        <td align="center"><?php echo $data['kategori']; ?></td>
                                       
                                        <td style="width: 20%;" align="center">
                                        <a class="btn btn-danger btn-icon btn-circle" href="model/hapus_kategori.php?id_kategori=<?php echo $data['id_kategori']; ?>"> hapus<i class="glyphicon glyphicon-trash"></i></a>
                                        </td>
                                         <?php
                                     }
                                    ?>
                                </tbody>
                            </table>
            
	

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
