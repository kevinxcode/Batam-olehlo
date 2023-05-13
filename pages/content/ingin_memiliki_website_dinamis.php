

        <!-- Page title -->
        <section id="page-title" data-parallax-image="homepages/slide2.jpg">
            <div class="container">
                <div class="page-title">
                    <h1>Our Contact </h1>
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
                        
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="text-uppercase">Get In Touch</h3>
								<hr>
                                <strong><u>INGIN MEMILIKI WEBSITE Kami solusinya</u></strong><br>
Kami Memiliki puluhan project website dengan harga bersaing <br>Website saat ini sudah merupakan identitas suatu perusahaan. Tampilan dan content/isi dalam website akan memberikan kesan mendalam kepada pengunjungnya. Untuk itu kita harus membuat langkah-langkah strategis dalam pengembangan website.<br>
<hr>

<strong><u>Pengembangan content</u></strong><br>
<br>
Setelah pembuatan website, langkah selanjutnya adalah mengembangkan content.
Pengembangan content ini bisa dilakukan di article.
Jenis content/halaman yang perlu dikembangkan ada 2 macam : content untuk mengkomunikasikan produk/jasa perusahaan dan content untuk memberikan pengetahuan/wawasan kepada pengunjung.
Content untuk memberikan wawasan kepada pengunjung ini perlu untuk melahirkan prospek dan pelanggan baru. Konsep content ini antara lain
a. Content yang mengidentifikasi masalah yang dihadapi prospek<br>
b. Content yang memberikan solusi mengenai masalah tersebut<br>
c. Content yang memberikan informasi mengenai produk/jasa kita dapat memberikan solusi atas masalah tersebut<br>
d. Content mengenai keuntungan memakai produk/jasa kita dibandingkan dengan yang ditawarkan pesaing<br>
e. Ajakan untuk mengambil keputusan memakai produk/jasa kita<br>
<br>
<hr>
                                <div class="m-t-30">
                                    
                                    
                                </div>
                            </div>

                            <div class="col-md-6">
                                <h3 class="text-uppercase">Development About</h3>
								<hr>
                                <div class="row">
                                    <div class="col-md-8">
                                        <address>
						  <strong><u>Pembuatan / Pengembangan Website </u></strong><br>
<br>
Kesan pertama kali saat pengguna mengunjungi website Anda sangat mempengaruhi penilaian mereka ke website secara keseluruhan. Apakah pengguna terkesan atau tidak setelah mengunjungi situs tergantung pada tata letak dan visual. Hal ini yang membuat tahap pengembangan web menjadi salah satu kunci paling penting dalam membangun kesuksesan citra online Anda.
<br>
<hr>



<strong><u>INGIN MEMILIKI WEBSITE HUBUNGI  : </u></strong><br>

												<div class="table-responsive">
													<table class="table table-bordered table-striped">
													  <colgroup>
														<col class="col-xs-1">
														<col class="col-xs-7">
													  </colgroup>
													  <thead>
														<tr>
														  <th></th>
														  <th></th>
														</tr>
													  </thead>
													  <tbody>
														<tr>
														  <td>
															<code>Alamat :</code>
														  </td>
														  <td> Batam Center
Batam - Kepulauan Riau, Indonesia</td>
														</tr>
														<tr>
														  <td>
															<code>Telepon / wa :</code>
														  </td>
														  <td>telp / wa : 0815 4127 7051 / telp :  0812 7606 6615</td>
														</tr> 
														<tr>
														  <td>
															<code>Email:</code>
														  </td>
														  <td>kevinalnizar@gmail.com</td>
														</tr>
														
														
														
													  </tbody>
													</table>
                                    </div>
                                    </div>
                                    <hr>
                                </div>
                                <!-- Google map sensor -->
                                
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
$sql=mysql_query("select * from berita order by rand(), id_berita  desc limit 7  ");$no=0;
while($datapost=mysql_fetch_array($sql)){$no++?>
                                    <div class="post-thumbnail-entry">
                                        <img alt="" src="user_images/<?PHP echo $datapost['userPic'];?>">
                                        <div class="post-thumbnail-content">
                                            <a href="read_more&userName=<?php echo $datapost['userName']; ?>"><?php echo $datapost['userName']; ?></a>
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
