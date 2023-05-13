
        <!-- Page title -->
        <section id="page-title" data-parallax-image="homepages/galery2.jpg">
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
        <section id="page-content" class="sidebar-right">
            <div class="container">
                <div class="row">
                    <!-- post content -->
                    <div class="content col-md-9">

                        <!-- Blog -->
                        <div id="blog" class="post-thumbnails">
<?php 
//        includekan fungsi paginasi
        include 'pagination1.php';
//        koneksi ke database
include "config/config.php";
//        query
 $input=$_POST[tcari];
        $sql =  "SELECT * FROM berita   where userName  Like '%$input%'  order by  id_berita desc";
        
        $result = mysql_query($sql);
        
        //pagination config start
        $rpp = 8; // jumlah record per halaman
        $reload = "cari_produk";
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
                        $datapost = mysql_fetch_array($result);
                    ?>
                            <!-- Post item-->
                            <div class="post-item">
                                <div class="post-item-wrap">
                                    <div class="post-image gallery8">
                                        <a href="read_more&userName=<?php echo $datapost['userName']; ?>">
                                            <img alt="" src="user_images/<?PHP echo $datapost['userPic'];?>">
                                        </a>
                                    
                                    </div>
                                    <div class="post-item-description">
                                        <span class="post-meta-date"><i class="fa fa-calendar-o"></i><?php echo $datapost['tanggal']; ?></span>
                                       
                                        <h2><a href="read_more&userName=<?php echo $datapost['userName']; ?>"><?php echo $datapost['userName']; ?>
</a></h2>
                                        <p><?php
$kalimat = "$datapost[userProfession]";
$sub_kalimat = substr($kalimat,0,30);
echo $sub_kalimat;
?></p>

                                        <a href="read_more&userName=<?php echo $datapost['userName']; ?>" class="item-link">Read More <i class="fa fa-arrow-right"></i></a>

                                    </div>
                                </div>
								
								
                            </div>
							 <?php
                        $i++; 
                        $count++;
                    }
                    ?>
						</div>	
<div class="box-tools pull-right">
            <div><?php echo paginate_one($reload, $page, $tpages); ?></div>
        </div>
                          
                            
                            <!-- end: Post item-->

                       
                        
                        

                    </div>
                    <!-- end: post content -->

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
                            <div class="widget ">
                                <h4 class="widget-title">Recent Posts</h4>
                                <div class="post-thumbnail-list">
								<?php 
include "config/config.php";
 $username=$_SESSION['username'];
$sql=mysql_query("select * from berita order by rand(), id_berita  desc limit 6  ");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="user_images/<?PHP echo $datapost['userPic'];?>">
                                        <div class="post-thumbnail-content">
                                            <a href="read_more&userName=<?php echo $datapost['userName']; ?>"><?php echo $datapost['userName']; ?></a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> <?php echo $datapost['tanggal']; ?></span>
                                            
                                        </div>
                                    </div>
                                     <?php }?>
                                    
                                    
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
                        </div>
                      
                        <!--End: Flickr-->

                            <!--widget tags -->
                            <div class="widget  widget-tags">
                                <h4 class="widget-title">Tags</h4>
                                <div class="tags">
                                   <?php 
include "config/config.php";
 $username=$_SESSION['username'];
$sql=mysql_query("select * from kategori order by rand(), id_kategori  desc   ");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
                                        <a href="#"><?php echo "$datapost[kategori]"; ?></a>
										<?php }?>
                                </div>
                            </div>
                            <!--end: widget tags -->

                            
                        </div>
                    </div>
                    <!-- end: Sidebar-->
                </div>
            </div>
        </section>
        <!-- end: Content -->
        

    </div>
    <!-- end: Wrapper -->


<style>
div.gallery8 {
    margin: 0px;
    border: 1px solid #ccc;
    float: left;
    width: 500px;
	max-width: 100%;
	height: 270px;
	position: relative;
    
    
}

div.gallery8:hover {
    border: 1px solid #777;
}

div.gallery8 img {
     width: 500px;
	 	max-width: 100%;
	height: 270px;
	
	position: relative;
    
    
}

div.desc {
    padding: 0px;
    text-align: center;
}
</style>
