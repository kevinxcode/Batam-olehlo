
 <!-- Inspiro Slider -->
        <div id="slider" class="inspiro-slider slider-halfscreen arrows-large arrows-creative dots-creative" data-height-xs="360" data-autoplay-timeout="2600" data-animate-in="fadeIn" data-animate-out="fadeOut" data-items="1" data-loop="true" data-autoplay="true">
            
			<!-- Slide 1 -->
			<?php 
include "config/config.php";
 $username=$_SESSION['username'];
$sql=mysql_query("SELECT * FROM foto where kategori='home' ORDER BY id_foto desc limit 8");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
            <div class="slide background-image" style="background-image:url('user_images/<?php echo $datapost['userPic']; ?>');">
                <div class="container">
                    <div class="slide-captions text-center">
                        <!-- Captions -->
                        
                      
                     
                      
                        <!-- end: Captions -->
                    </div>
                </div>
            </div>
			<?php }?>
            <!-- end: Slide 1 -->
           
        </div>
        <!--end: Inspiro Slider -->



			<!-- CALL TO ACTION -->    
        <div class="call-to-action call-to-action-colored background-colored m-b-0">
            <div class="container">
                <div class="col-md-10">
                   <h>Oleh-Oleh Kekinian Batam</h3>
                    
                </div>
                <div class="col-md-2"> <a href="#" class="btn btn-light btn-outline">Alamak Sedapnyeeee...</a> </div>
            </div>
        </div>
        <!-- END: CALL TO ACTION -->
			
			<br>
			
			<!--  FEATURES -->
            <div class="container">
                <div class="text-center m-b-60">
                    <h1 class="text-medium">YUK COBAIN BEDANYA </h1>
                  
                </div>
                <div class="row">
                    <div class="col-md-4 p-t-80">
                        <div class="icon-box icon-box-right effect medium border small" data-animation="fadeInLeft" data-animation-delay="200">
                            <div class="icon">
                                <a href="#"><i class="fa fa-desktop"></i></a>
                            </div>
                            <h3>BANANA CARAMEL</h3>
                            <p>Oleh Oleh Zaman Now - Batam Olehlo - Yuk Cobain BANANA CARAMEL</p>
                        </div>
                        <div class="icon-box icon-box-right effect medium border small" data-animation="fadeInLeft" data-animation-delay="400">
                            <div class="icon">
                                <a href="#"><i class="fa fa-desktop"></i></a>
                            </div>
                             <h3>AVOCADO</h3>
                            <p>Oleh Oleh Zaman Now - Batam Olehlo - Yuk Cobain AVOCADO</p>
                        </div>
                        <div class="icon-box icon-box-right effect medium border small" data-animation="fadeInLeft" data-animation-delay="600">
                            <div class="icon">
                                <a href="#"><i class="fa fa-desktop"></i></a>
                            </div>
                             <h3>TIRAMISU</h3>
                            <p>Oleh Oleh Zaman Now - Batam Olehlo - Yuk Cobain TIRAMISU</p>
                        </div>
                    </div>

                    <div class="col-md-4 text-center" data-animation="fadeInUp" data-animation-delay="100">
                        <img alt="img" class="img-responsive center-block" src="homepages/human.png">
                    </div>

                    <div class="col-md-4 p-t-80">
                        <div class="icon-box effect medium border small" data-animation="fadeInRight" data-animation-delay="200">
                            <div class="icon">
                                <a href="#"><i class="fa fa-desktop"></i></a>
                            </div>
                            <h3>CHOCOLATE</h3>
                            <p>Oleh Oleh Zaman Now - Batam Olehlo - Yuk Cobain CHOCOLATE</p>
                        </div>

                        <div class="icon-box effect medium border small" data-animation="fadeInRight" data-animation-delay="400">
                            <div class="icon">
                                <a href="#"><i class="fa fa-desktop"></i></a>
                            </div>
                            <h3>STRAWBERY</h3>
                            <p>Oleh Oleh Zaman Now - Batam Olehlo - Yuk Cobain STRAWBERY</p>
                        </div>

                        <div class="icon-box effect medium border small" data-animation="fadeInRight" data-animation-delay="600">
                            <div class="icon">
                                <a href="#"><i class="fa fa-desktop"></i></a>
                            </div>
                            <h3>Batam Olehlo</h3>
                            <p>Oleh Oleh Zaman Now - Batam Olehlo - Yuk Cobain...........................................</p>
                        </div>
                    </div>

                </div>
            </div>
  
        <!-- end: FEATURES -->
			
			
			
			 <!-- BLOG -->
        <section id="section4" class="background-grey">
            <div class="container">
                <div class="text-center m-b-40">
                    <h2 class="text-medium font-pacifico text-colored ">
					<img src="homepages/heading-icon-left.png" alt=""> Batam Olehlo <img src="homepages/heading-icon-right.png" alt=""></h2>
                </div>
				
				
				<!-- Content -->
        <section id="page-content">
            <div class="container">
                <!-- post content -->

                <!-- Page title -->
                <div class="page-title">
                    
                    
                </div>
                <!-- end: Page title -->

                <!-- Blog -->
                <div id="blog" class="grid-layout post-4-columns m-b-30" data-item="post-item">

                    <!-- Post item-->
					<?php 
include "config/config.php";
 $username=$_SESSION['username'];
$sql=mysql_query("SELECT * FROM berita ORDER BY id_berita desc limit 8");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
					
                    <div class="post-item border">
                        <div class="post-item-wrap">
                            <div class="post-image">
                                <a href="read_more&userName=<?php echo $datapost['userName']; ?>">
                                   <div class="gallery1"> <img alt="" src="user_images/<?php echo $datapost['userPic']; ?>"></div>
                                </a>
                               
                            </div>
                            <div class="post-item-description">
                              <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo $datapost['tanggal']; ?></span>
                                
                                  <p><a href="read_more&userName=<?php echo $datapost['userName']; ?>"><?php  $text = $datapost[userName];  echo str_replace("-", " ", $text);?>  </p>
</a>
                                

                                <a href="read_more&userName=<?php echo $datapost['userName']; ?>" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                            </div>
                        </div>
                    </div>
					<?php }?>
                    <!-- end: Post item-->


                </div>
                <!-- end: Blog -->
				

              <!-- Pagination -->
                <div class="pagination pagination-simple">
                    <ul>
                        <li>
                            <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a>
                        </li>
                   
                        <li class="active"><a href="cari_produk">Load More</a> </li>
                       
                        <li>
                            <a href="#" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a>
                        </li>
                    </ul>
                </div>
                <!-- end: Pagination -->
			
				
            
            </div>
        </section>
        <!-- end: BLOG -->
			
        </div>
        <!-- END SECTION REVOLUTION SLIDER -->
		
			
        <!-- ABOUT PRODUCTS -->
        <section id="section2" class="p-t-150 p-b-150"style="background-image:url(homepages/home_paralax.png); background-color:#e9e6df;">
            <div class="container">
                <div class="row">

                    <div class="row">
                        <div class="col-md-6 m-b-30">
                            <div data-animation="fadeIn">
                                <img src="homepages/bread-1.png" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-md-6 text-center" data-animation="fadeIn">
                            <div class="m-b-40">
                                <span class="lead">Our Secret</span>
                                <h2 class="text-medium font-pacifico text-colored">Baked with Love</h2>
                                <span class="lead"> Oleh Oleh Zaman Now - Batam Olehlo COMING SOON @ BATAM Kepulauan Riau 
				</span>
                            </div>
                            <a href="#" class="btn btn-outline btn-dark"><span>Learn More</span></a>
                        </div>
                    </div>

                   
               

                   

                </div>
            </div>
        </section>
        <!-- end: ABOUT PRODUCTS -->


        <!-- SEPERATOR IMAGE -->
        <div class="seperator seperator-image seperator-over-top" style="background-image:url(homepages/bakery/images/seperator-top.png)"></div>
        <!-- SEPERATOR IMAGE -->

        

        <!-- SEPERATOR IMAGE -->
        <div class="seperator seperator-image" style="background-image:url(homepages/bakery/images/seperator-bottom.png)"></div>
        <!-- SEPERATOR IMAGE -->

		
		 <!-- BLOG -->
        <section id="section4" class="background-grey">
            <div class="container">
                <div class="text-center m-b-40">
                    <h2 class="text-medium font-pacifico text-colored "><img src="homepages/heading-icon-left.png" alt=""> Our Galery <img src="homepages/heading-icon-right.png" alt=""></h2>
                </div>
				
				
				
				
                   <!-- Gallery -->
                <div class="grid-layout grid-3-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
				<?php 
//        includekan fungsi paginasi
        include 'pagination1.php';
//        koneksi ke database
     include "config/config.php";
//        query

        $sql =  "SELECT * FROM foto ORDER BY id_foto desc";
        $result = mysql_query($sql);
        
        //pagination config start
        $rpp = 6; // jumlah record per halaman
        $reload = "session.php?p=galery";
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
                    <div class="grid-item" Align="center">
                        <a class="image-hover-zoom" href="user_images/<?php echo $data['userPic']; ?>" data-lightbox="gallery-item">
						<div class="gallery7"><img src="user_images/<?php echo $data['userPic']; ?>"></a><?php  $text = $datapost[userName];  echo str_replace("-", " ", $text);?></div>
						
                    </div>
                          <?php
                        $i++; 
                        $count++;
                    }
                    ?>
                </div>
				<div class="box-tools pull-right">
           
        </div>
                <!-- end: Gallery -->

       
<!-- Pagination -->
                <div class="pagination pagination-simple">
                    <ul>
                        <li>
                            <a href="#" aria-label="Previous"> <span aria-hidden="true"><i class="fa fa-angle-left"></i></span> </a>
                        </li>
                        
                        <li class="active"><a href="galery">Load More</a> </li>
                       
                        <li>
                            <a href="#" aria-label="Next"> <span aria-hidden="true"><i class="fa fa-angle-right"></i></span> </a>
                        </li>
                    </ul>
                </div>
                <!-- end: Pagination -->
            
            </div>
        </section>
		
		
		<div class="container">
 
               
                        <!-- Gallery -->
                        <div class="grid-layout grid-4-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
						
                       <div class="grid-item">
                                   <div class="textwidget">
								   <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:28.10185185185185% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
								   <a href="https://www.instagram.com/p/BfpuKLZhr6V/?hl=en&taken-by=batamolehlo" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">
								   A video posted by Batam Olehlo (@batamolehlo)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-01-10T12:32:27+00:00">
								   .</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script></div>
                            </div>
							
                             <div class="grid-item">
                                   <div class="textwidget">
								   <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:28.10185185185185% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
								   <a href="https://www.instagram.com/p/BeCvIcPB-6W/?hl=en&taken-by=batamolehlo" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A video posted by Batam Olehlo (@batamolehlo)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-01-10T12:32:27+00:00">.</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script></div>
                            </div>
							
                             <div class="grid-item">
                                   <div class="textwidget">
								   <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:28.10185185185185% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
								   <a href="https://www.instagram.com/p/BeDUzO8nwQV/?taken-by=okisetianadewi" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A video posted by Batam Olehlo (@batamolehlo)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-01-10T12:32:27+00:00">.</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script></div>
                            </div>
							
                             <div class="grid-item">
                                   <div class="textwidget">
								   <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:28.10185185185185% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
								   <a href="https://www.instagram.com/p/BeHis58hmiJ/?hl=en&taken-by=batamolehlo" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A video posted by Batam Olehlo (@batamolehlo)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-01-10T12:32:27+00:00">.</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script></div>
                            </div>
                           
                        </div>
                        <!-- end: Gallery -->
              


            </div>
            </div>
       