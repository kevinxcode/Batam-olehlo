
		 <?php
                          include "config/config.php";
                            $sql="select * from berita where userName='$_GET[userName]'";

                            $tampil=mysql_query($sql);
                            $data=mysql_fetch_array($tampil);
                        ?>
        <!-- Page title -->
        <section id="page-title" data-parallax-image="homepages/slide2.jpg">
            <div class="container">
                <div class="page-title">
                    
                  
                </div>
                <div class="breadcrumb">
                    <ul>
                       
                    </ul>
                </div>
            </div>
        </section>
        <!-- end: Page title -->

        <!-- Page Content -->
        <section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <!-- content -->
                    <div class="content col-md-9">
                        <!-- Blog -->
                        <div id="blog" class="single-post">
                            <!-- Post single item-->
							
					
						<h1><?php  $text = $data[userName];  echo str_replace("-", " ", $text);?></h1>
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image">
                                        <a href="#">
                                            <img alt="" src="user_images/<?PHP echo $data['userPic'];?>">
                                        </a>
                                    </div>
                                    <div class="post-item-description">
                                        <h2><?php  $text = $data[userName];  echo str_replace("-", " ", $text);?></h2>
                                        <div class="post-meta">

                                            <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo "$data[tanggal]"; ?></span>
                                        
                                           
                                            
                                        </div>
                                        <p><?php echo "$data[userProfession]"; ?></p>

                                    </div>
                                    <div class="post-tags">
									<?php 
include "config/config.php";
 $username=$_SESSION['username'];
$sql=mysql_query("select * from kategori order by rand(), id_kategori  desc   ");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
                                        <a href="#"><?php echo "$datapost[kategori]"; ?></a>
										<?php }?>
                                        
                                    </div>
									
                                    <div class="post-navigation">
                                        <!-- Gallery -->
                        <div class="grid-layout grid-4-columns" data-margin="20" data-item="grid-item" data-lightbox="gallery">
						  <?php 
//        includekan fungsi paginasi
        include 'pagination1.php';
//        koneksi ke database
     include "config/config.php";
//        query

        $sql =  "SELECT * FROM foto ORDER BY id_foto desc";
        $result = mysql_query($sql);
        
        //pagination config start
        $rpp = 4; // jumlah record per halaman
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
                            <div class="grid-item">
                                        <?php
$kalimat = "$data[userName]";
$sub_kalimat = substr($kalimat,0,12);
echo $sub_kalimat;
?> <hr>
							
                                    <a class="image-hover-zoom" href="user_images/<?php echo $data['userPic']; ?>" data-lightbox="gallery-item"><img src="user_images/<?php echo $data['userPic']; ?>"></a>
									<hr>
									
                            </div>
                            <?php
                        $i++; 
                        $count++;
                    }
                    ?>
							
                        </div>
                        <!-- end: Gallery -->
                                    </div>

                                </div>
                            </div>
                            <!-- end: Post single item-->
                        </div>

                    </div>
                    <!-- end: content -->

                    <!-- Sidebar-->
                    <div class="sidebar col-md-3">
                        <div class="pinOnScroll">
						
                            <!--widget search-->
                            <div class="widget  widget-newsletter">

                                <form id="widget-search-form-sidebar" action="cari_produk" method="POST" class="form-inline">
                                    <div class="input-group">
                                        <input type="text" aria-required="true" name="tcari" class="form-control widget-search-form" placeholder="Search for pages...">
                                        <span class="input-group-btn">
                  <button type="submit" id="widget-widget-search-form-button" class="btn btn-default"><i class="fa fa-search"></i></button>
                  </span> </div>
                                </form>
                            </div>
                            <!--end: search-->

                            <!--Tabs with Posts-->
                            <div class="widget">
                                <div id="tabs-01" class="tabs simple">
                                    <ul class="tabs-navigation">
                                        <li class="active"><a href="#tab1">Popular</a> </li>
                                        
                                       
                                    </ul>
                                    <div class="tabs-content">
                                        <div class="tab-pane active" id="tab1">
										
                                            <div class="post-thumbnail-list"><?php 
include "config/config.php";
 $username=$_SESSION['username'];
$sql=mysql_query("select * from berita order by rand(), id_berita  desc limit 5  ");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
                                                <div class="post-thumbnail-entry">
                                                    <img alt="" src="user_images/<?PHP echo $datapost['userPic'];?>">
                                                    <div class="post-thumbnail-content">
                                                        <a href="read_more&userName=<?php echo $datapost['userName']; ?>"><?php  $text = $datapost[userName];  echo str_replace("-", " ", $text);?></a>
                                                        <span class="post-date"><i class="fa fa-clock-o"></i> <?php echo $datapost['tanggal']; ?></span>
                                                        
                                                    </div>
                                                </div>
                                                <?php }?>
											   
											   
                                         
                                       
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                            <!--End: Tabs with Posts-->

							
                        <!--Flickr-->
                        <div class="widget clearfix widget-flickr">
                            <h4 class="widget-title">Instagram</h4>
                            <div class="grid-item">
                             
                                   <blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:28.10185185185185% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
								   <a href="https://www.instagram.com/p/BeCvIcPB-6W/?hl=en&taken-by=batamolehlo" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">A video posted by Batam Olehlo (@batamolehlo)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-01-10T12:32:27+00:00">.</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script></div><hr>
<blockquote class="instagram-media" data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:28.10185185185185% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div><p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">
								   <a href="https://www.instagram.com/p/BeJhbz_nVeX/?taken-by=okisetianadewi" style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none;" target="_blank">
								   A video posted by Batam Olehlo (@batamolehlo)</a> on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2017-01-10T12:32:27+00:00">
								   .</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script></div>
                              
                            </div>
                        </div>
                        <!--End: Flickr-->
                 
                         


                        </div>
                    </div>
                    <!-- end: sidebar-->
                </div>
            </div>
        </section>
        <!-- end: Page Content -->
        

    </div>
    <!-- end: Wrapper -->
