   <!-- Footer -->
        <footer id="footer" class="footer-light">
            <div class="footer-content">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <!-- Footer widget area 1 -->
                            <div class="widget  widget-contact-us" style="background-image: url('images/world-map-dark.png'); background-position: 50% 20px; background-repeat: no-repeat">
                                <h4>Tentang Batam olehlo</h4>
                                <ul class="list-icon">
                                    <li><i class="fa fa-map-marker"></i> 
                                        <br> Adress : Komp. Ruko Tunas Bizpark Blok. B No. 23A Tunas Industrial Park, Batam Center </li>
                                    <li><i class="fa fa-phone"></i>Telpon</li>
                                    <li><i class="fa fa-envelope"></i> <a href="mailto:first.last@example.com">Email</a> </li>
                                    <li>
                                        <br>
                                        <i class="fa fa-clock-o"></i><b> JAM KERJA : SETIAP HARI <strong>07.00 - 22.00</strong>
                                       
                                </ul>
                                <!-- Social icons -->
                                <div class="social-icons social-icons-border float-left m-t-20">
                                    <ul>
                                        <li class="social-rss"><a href="#"><i class="fa fa-rss"></i></a></li>
                                        <li class="social-facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="social-twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="social-vimeo"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                                        <li class="social-youtube"><a href="#"><i class="fa fa-youtube"></i></a></li>
                                        <li class="social-pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                        <li class="social-gplus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                                <!-- end: Social icons -->
                            </div>
                            <!-- end: Footer widget area 1 -->
                        </div>
                        <div class="col-md-2">
                            <!-- Footer widget area 2 -->
                            <div class="widget">
                                <h4>Menu </h4>
                                <ul class="list-icon list-icon-arrow">
                                    <li><a href="index.php">Oleonista</a></li>
                                    <li><a href="about_us">Tantang Awak</a></li>
                                    <li><a href="galery">Galery</a></li>
                                    <li><a href="corner">Corner Kita</a></li>
                                    <li><a href="contact">Contact US</a></li>
                                    <li><a href="ingin_memiliki_website_dinamis">Ingin Memiliki Website ? KLIK</a></li>
                                 
                                </ul>
                            </div>
                            <!-- end: Footer widget area 2 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 3 -->
                            <div class="widget">
                                <h4>Latest Post</h4>
                                <div class="post-thumbnail-list">
								<?php 
include "config/config.php";
 $username=$_SESSION['username'];
$sql=mysql_query("select * from berita order by rand(), id_berita  desc limit 3  ");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
                                    <div class="post-thumbnail-entry">
                                        <div class="post-thumbnail-content">
                                            <a href="read_more&userName=<?php echo $datapost['userName']; ?>"><?php  $text = $datapost[userName];  echo str_replace("-", " ", $text);?></a>
                                            <span class="post-date"><i class="fa fa-clock-o"></i> <?php echo $datapost['tanggal']; ?></span> </div>
                                    </div>
                                     <?php }?>
                                </div>
                            </div>
                            <!-- end: Footer widget area 3 -->
                        </div>
                        <div class="col-md-3">
                            <!-- Footer widget area 4 -->
                            <div class="widget widget-tweeter" data-username="ardianmusliu" data-limit="2">
                                <h4>Sosial Media </h4>
                            </div>
                            <!-- end: Footer widget area 4 -->
                        </div>
                    </div>
                </div>
            </div>
           
        </footer>
        <!-- end: Footer -->

 <div class="copyright-content">
                <div class="container">
                    <div class="copyright-text text-center">&copy; 2018 . All Rights Reserved   <a href="fadeshare.com" target="_blank">Fadeshare.com</a> </div>
                </div>
            </div>
			
			 <!-- Go to top button -->
    <a id="goToTop"><i class="fa fa-angle-up top-icon"></i><i class="fa fa-angle-up"></i></a>
    <!--Plugins-->
    <script src="js/jquery.js"></script>
    <script src="js/plugins.js"></script>

    <!--Template functions-->
    <script src="js/functions.js"></script>

    