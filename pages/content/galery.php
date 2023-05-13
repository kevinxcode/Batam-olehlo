

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
        <section id="page-content">
          
<div class="container">
                <div class="text-center m-b-40">
                    <h2 class="text-medium font-pacifico text-colored "><img src="homepages/bakery/images/heading-icon-left.png" alt=""> Our Galery <img src="homepages/bakery/images/heading-icon-right.png" alt=""></h2>
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
        $rpp = 18; // jumlah record per halaman
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
                    <div class="grid-item" Align="center"><?php  $text = $data[userName];  echo str_replace("-", " ", $text);?>
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
				<div class="box-tools pull-right">
            <div><?php echo paginate_one($reload, $page, $tpages); ?></div>
        </div>
                <!-- end: Gallery -->

                



            </div>
        </section>
        <!-- end: Content -->

     

    </div>
    <!-- end: Wrapper -->

    