<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

        
       
        <!-- Slider -->
        <div class="slider-container">
            <div class="container">
                <div class="row">
                    <div class="col-sm-10 col-sm-offset-1 slider">
                        <div class="flexslider">
                            <ul class="slides">				
								<?php
								//print_r($pilihan_produk);
								foreach ($pilihan_produk as $nilai) {
								?>
								<li data-thumb="<?php echo site_url($nilai['path']);?>">
                                    <img src="<?php echo site_url($nilai['path']);?>">
                                    <div class="flex-caption">
                                    	<?php echo $nilai['deskripsi'];?>
                                    </div>
                                </li>
								<?php
								}	
								?>
                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Presentation -->
        <div class="presentation-container">
        	<div class="container">
        		<div class="row">
	        		<div class="col-sm-12 wow fadeInLeftBig">
	            		<h1><span class="violet">rencanaweddingku, </span> pilih kebutuhan pernikahan sesuai dengan keuangan anda</h1>
	            		<p>Produk kita terbaik dengan harga terjangkau</p>
	            	</div>
            	</div>
        	</div>
        </div>

        <!-- Services -->
        <div class="services-container">
	        <div class="container">
	            <div class="row">
	            	<div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-eye"></i></div>
		                    <h3>Undangan</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
		                    <a class="big-link-1" href="services.html">Read more</a>
		                </div>
					</div>
					<div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-table"></i></div>
		                    <h3>Souvenir</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
		                    <a class="big-link-1" href="services.html">Read more</a>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="service wow fadeInUp">
		                    <div class="service-icon"><i class="fa fa-magic"></i></div>
		                    <h3>Seserahan</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
		                    <a class="big-link-1" href="services.html">Read more</a>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="service wow fadeInDown">
		                    <div class="service-icon"><i class="fa fa-print"></i></div>
		                    <h3>Pelaminan</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et...</p>
		                    <a class="big-link-1" href="services.html">Read more</a>
		                </div>
	                </div>
	            </div>
	        </div>
        </div>

        <!-- Latest work -->
        <div class="work-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 work-title wow fadeIn">
		                <h2>Our Latest Work</h2>
		            </div>
	            </div>
	            <div class="row">
	            	<div class="col-sm-3">
		                <div class="work wow fadeInUp">
		                    <img src="<?php echo site_url('assets/img/portfolio/work1.jpg');?>" alt="Lorem Website" data-at2x="<?php echo site_url('assets/img/portfolio/work1.jpg');?>">
		                    <h3>Lorem Website</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="assets/img/portfolio/work1.jpg"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
	                </div>
	                <div class="col-sm-3">
		                <div class="work wow fadeInDown">
		                    <img src="<?php echo site_url('assets/img/portfolio/work2.jpg');?>" alt="Ipsum Logo" data-at2x="<?php echo site_url('assets/img/portfolio/work2.jpg');?>">
		                    <h3>Ipsum Logo</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="<?php echo site_url('assets/img/portfolio/work2.jpg');?>"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-3">
		                <div class="work wow fadeInUp">
		                    <img src="<?php echo site_url('assets/img/portfolio/work3.jpg');?>" alt="Dolor Prints" data-at2x="<?php echo site_url('assets/img/portfolio/work3.jpg');?>">
		                    <h3>Dolor Prints</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="<?php echo site_url('assets/img/portfolio/work3.jpg');?>"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
		            </div>
		            <div class="col-sm-3">
		                <div class="work wow fadeInDown">
		                    <img src="<?php echo site_url('assets/img/portfolio/work4.jpg');?>" alt="Sit Amet Website" data-at2x="<?php echo site_url('assets/img/portfolio/work4.jpg');?>">
		                    <h3>Sit Amet Website</h3>
		                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor...</p>
		                    <div class="work-bottom">
		                        <a class="big-link-2 view-work" href="<?php echo site_url('assets/img/portfolio/work4.jpg');?>"><i class="fa fa-search"></i></a>
		                        <a class="big-link-2" href="portfolio.html"><i class="fa fa-link"></i></a>
		                    </div>
		                </div>
		            </div>
	            </div>
	        </div>
        </div>

        <!-- Testimonials -->
        <div class="testimonials-container">
	        <div class="container">
	        	<div class="row">
		            <div class="col-sm-12 testimonials-title wow fadeIn">
		                <h2>Testimonials</h2>
		            </div>
	            </div>
	            <div class="row">
	                <div class="col-sm-10 col-sm-offset-1 testimonial-list">
	                	<div role="tabpanel">
	                		<!-- Tab panes -->
	                		<div class="tab-content">
	                			<div role="tabpanel" class="tab-pane fade in active" id="tab1">
	                				<div class="testimonial-image">
	                					<img src="<?php echo site_url('assets/img/testimonials/1.jpg');?>" alt="" data-at2x="<?php echo site_url('assets/img/testimonials/1.jpg');?>">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur..."<br>
		                                	<a href="#">Lorem Ipsum, dolor.co.uk</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab2">
	                				<div class="testimonial-image">
	                					<img src="<?php echo site_url('assets/img/testimonials/2.jpg');?>" alt="" data-at2x="<?php echo site_url('assets/img/testimonials/2.jpg');?>">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
		                                	ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
		                                	lobortis nisl ut aliquip ex ea commodo consequat..."<br>
		                                	<a href="#">Minim Veniam, nostrud.com</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab3">
	                				<div class="testimonial-image">
	                					<img src="<?php echo site_url('assets/img/testimonials/3.jpg');?>" alt="" data-at2x="<?php echo site_url('assets/img/testimonials/3.jpg');?>">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et. 
		                                	Lorem ipsum dolor sit amet, consectetur..."<br>
		                                	<a href="#">Lorem Ipsum, dolor.co.uk</a>
		                                </p>
	                                </div>
	                			</div>
	                			<div role="tabpanel" class="tab-pane fade" id="tab4">
	                				<div class="testimonial-image">
	                					<img src="<?php echo site_url('assets/img/testimonials/1.jpg');?>" alt="" data-at2x="<?php echo site_url('assets/img/testimonials/1.jpg');?>">
	                				</div>
	                				<div class="testimonial-text">
		                                <p>
		                                	"Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip 
		                                	ex ea commodo consequat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit 
		                                	lobortis nisl ut aliquip ex ea commodo consequat..."<br>
		                                	<a href="#">Minim Veniam, nostrud.com</a>
		                                </p>
	                                </div>
	                			</div>
	                		</div>
	                		<!-- Nav tabs -->
	                		<ul class="nav nav-tabs" role="tablist">
	                			<li role="presentation" class="active">
	                				<a href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab"></a>
	                			</li>
	                			<li role="presentation">
	                				<a href="#tab4" aria-controls="tab4" role="tab" data-toggle="tab"></a>
	                			</li>
	                		</ul>
	                	</div>
	                </div>
	            </div>
	        </div>
        </div>

       