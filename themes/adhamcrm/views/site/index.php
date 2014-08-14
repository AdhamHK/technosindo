    <?php
	  $baseUrl = Yii::app()->theme->baseUrl; 
	  $cs = Yii::app()->getClientScript();
	  Yii::app()->clientScript->registerCoreScript('jquery');
	?>
		
		<!-- Slider -->
		<div class="topbg"><br/><br/></div>	
        <div class="slider">
            <div class="container">
                <div class="row">
					<div class="widget span7 offset1">
						<br/><br/><br/>
						<h3 style="color:#fff;font-size:38px;font-family:'Amatic SC';">"we are a small team</h3>
						<h3 style="color:#f8f8f8;font-size:86px;font-family:'Bubblegum Sans';margin-top:20px;"><b>WITH BIG IDEAS!</b></h3><br/>
                        <p style="color:#f8f8f8;font-size:20px;font-family:'Calibri';">Sekarang Anda Tak perlu Ragu untuk Bersaing di Dunia Digital</p>
                        <p style="color:#f8f8f8;font-size:14px;font-family:'Open Sans', sans-serif;">Kami adalah Technology Development Company yang membantu anda bersaing di dunia digital"<p>
						<br/><div class="tilt"><a href="https://play.google.com/store/apps/developer?id=Technosindo&hl=in" type="button" style="font-size:18px;font-family:'Calibri';" class="btn btn-default navbar-btn">CHECK THEM OUT!</a></div><br/>
                    </div>
					<div style="margin-left:10px;"class="widget span4">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="item active">
								<br/><div style="margin-left:10px;margin-bottom:-10px;"class="widget span4"><div class="tilt"><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/portfolio/"><img src="<?php echo $baseUrl;?>/img/slider/flickr/app1.png"></a></div></div>
							</div>
							<div class="item">
								<br/><div style="margin-left:10px;margin-bottom:-10px;"class="widget span4"><div class="tilt2"><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/portfolio/"><img src="<?php echo $baseUrl;?>/img/slider/flickr/app2.png"></a></div></div>
							</div>
							<div class="item">
								<br/><div style="margin-left:10px;margin-bottom:-10px;"class="widget span4"><div class="tilt"><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/portfolio/"><img src="<?php echo $baseUrl;?>/img/slider/flickr/app3.png"></a></div></div>
							</div>
							<div class="item">
								<br/><div style="margin-left:10px;margin-bottom:-10px;"class="widget span4"><div class="tilt2"><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/portfolio/"><img src="<?php echo $baseUrl;?>/img/slider/flickr/app4.png"></a></div></div>
							</div>
						</div>
					<div class="row">
						<a class="right carousel-control" href="#carousel-example-generic"  data-slide="next">
						<center><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/next.png"  alt="Me" class="img-circle" /></center>
						</a>
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
						<center><img src="<?php echo Yii::app()->theme->baseUrl;?>/img/prev.png" alt="Me" class="img-circle" /></center>
						</a>
					</div>
					</div>
					</div>
                </div>
            </div>
        </div>
		<div class="botbg"><br/><br/></div>

        <!-- Services -->
        <div class="what-we-do container">
		    <div class="portfolio-title">
                <h3>What We Do ?</h3>
            </div><br/>
            <div class="row">
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-comments-alt"></i>
                    </div>
                    <h4>Pelayanan Mudah</h4>
                    <p>Anda akan dilayani secara fast responded, komentar untuk order jasa, tulis kriteria anda and happy to Order !...</p>
                    <div class="tilt"><a href="#read_form" id="read_pop" type="button" style="font-size:18px;font-family:'Calibri';" class="btn btn-default navbar-btn">READ MORE</a></div>  
                </div>
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-globe"></i>
                    </div>
                    <h4>Web Developing</h4>
                    <p>Kami dapat membuat website, Develop and design, baik e-commerce yang berkaitan dengan kriteria Anda...</p>
                    <div class="tilt2"><a href="#" type="button" style="font-size:18px;font-family:'Calibri';" class="btn btn-default navbar-btn">READ MORE</a></div>
                </div>
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-table"></i>
                    </div>
                    <h4>Mobile Apps</h4>
                    <p>Kami juga membuat App mobile, based on Android, IOS atau Java baik Game Dev or software sesuai dengan kriteria anda...</p>
                    <div class="tilt"><a href="#" type="button" style="font-size:18px;font-family:'Calibri';" class="btn btn-default navbar-btn">READ MORE</a></div>
                </div>
                <div class="service span3">
                    <div class="icon-awesome">
                        <i class="icon-thumbs-up"></i>
                    </div>
                    <h4>High Quality</h4>
                    <p>Kami berfokus pada kenyamanan anda, secara kualitas baik pelayanan maupun hasil dari developing...</p>
                    <div class="tilt2"><a href="#" type="button" style="font-size:18px;font-family:'Calibri';" class="btn btn-default navbar-btn">READ MORE</a></div>
                </div>
            </div>
        </div>

        <!-- Latest Work -->
        <div class="portfolio container">
            <div class="portfolio-title">
                <h3>Portfolio</h3>
            </div>
            <div class="row">
                <div class="work span3">
                    <img src="<?php echo $baseUrl;?>/img/portfolio/calgary.png" alt="">
                            <h4>Calgary Logo</h4>
                            <p>Desain Logo untuk Calgary Science School</p>
                    <div class="icon-awesome">
                        <a href="<?php echo $baseUrl;?>/img/portfolio/calgary.png" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/portfolio"><i class="icon-share"></i></a>
                    </div>
                </div>
                <div class="work span3">
                    <img src="<?php echo $baseUrl;?>/img/portfolio/calgary.png"  alt="">
                            <h4>Calgary Logo</h4>
                            <p>Desain Logo untuk Calgary Science School</p>
                    <div class="icon-awesome">
                        <a href="<?php echo $baseUrl;?>/img/portfolio/calgary.png"  rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/portfolio"><i class="icon-share"></i></a>
                    </div>
                </div>
                <div class="work span3">
                    <img src="<?php echo $baseUrl;?>/img/portfolio/calgary.png" alt="">
                            <h4>Calgary Logo</h4>
                            <p>Desain Logo untuk Calgary Science School</p>
                    <div class="icon-awesome">
                        <a href="<?php echo $baseUrl;?>/img/portfolio/calgary.png" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/portfolio"><i class="icon-share"></i></a>
                    </div>
                </div>
                <div class="work span3">
                    <img src="<?php echo $baseUrl;?>/img/portfolio/calgary.png" alt="">
                            <h4>Calgary Logo</h4>
                            <p>Desain Logo untuk Calgary Science School</p>
                    <div class="icon-awesome">
                        <a href="<?php echo $baseUrl;?>/img/portfolio/calgary.png" rel="prettyPhoto"><i class="icon-search"></i></a>
                        <a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/portfolio"><i class="icon-share"></i></a>
                    </div>
                </div>
            </div>
        </div><br/>

        <!-- Testimonials -->
		<br/><div class="topbg"><br/><br/></div>	
		<div class="page-title">
            <div class="container">
                <div class="row">
					<div class="testimonials-title">
						<h3>Testimony</h3>
					</div>
                </div>
            </div>
        </div>
		<div class="botbg"><br/><br/></div>
		
        <div class="testimonials container">
            <div class="row">
                <div class="testimonial-list span12">
                    <div class="tabbable tabs-below">
                        <div class="tab-content">
                            <div class="tab-pane active" id="A">
                                <img src="<?php echo $baseUrl;?>/img/client/ucup123.png" width="128" height="72" title="" alt="ucup" class="img-circle">  
								<br/><br/>
								<p style="font-size:17px;font-family:'Candara';">&nbsp;&nbsp;&nbsp;"Layanannya Cepat dan Memuaskan, Website Saya jadi sangat menarik berkat sentuhan technosindo. Fast Response banget,<br/>&nbsp;&nbsp;&nbsp;Kreatif lagi ide-idenya. Good Job!!!"
								<br/><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=user/profil&id=aloysiusoky@gmail.com" class="red"><b>&nbsp;&nbsp;&nbsp;Aloysius Oky</b></a>
								</p>
							</div>
                            <div class="tab-pane" id="B">
                                <img src="<?php echo $baseUrl;?>/img/client/ranirahayuni.png" width="128" height="64" title="" alt="rani" class="img-circle">
								<br/><br/>
								<p style="font-size:17px;font-family:'Candara';">&nbsp;&nbsp;&nbsp;"Layanannya Cepat dan Memuaskan, Website Saya jadi sangat menarik berkat sentuhan technosindo. Fast Response banget,<br/>&nbsp;&nbsp;&nbsp;Kreatif lagi ide-idenya. Good Job!!!"
								<br/><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=user/profil&id=ranirahay94@gmail.com" class="red"><b>&nbsp;&nbsp;&nbsp;Rani Rahayuni</b></a>
								</p>
							</div>
                            <div class="tab-pane" id="C">
								<img src="<?php echo $baseUrl;?>/img/client/handiko.png" width="128" height="64" title="" alt="handiko" class="img-circle">
								<br/><br/>
								<p style="font-size:17px;font-family:'Candara';">&nbsp;&nbsp;&nbsp;"Layanannya Cepat dan Memuaskan, Website Saya jadi sangat menarik berkat sentuhan technosindo. Fast Response banget,<br/>&nbsp;&nbsp;&nbsp;Kreatif lagi ide-idenya. Good Job!!!"
								<br/><a href="https://twitter.com/handikoo" class="red"><b>&nbsp;&nbsp;&nbsp;Handiko Rahmat</b></a>
								</p>
							</div>
                            <div class="tab-pane" id="D">
								<img src="<?php echo $baseUrl;?>/img/client/friska.png" width="128" height="64" title="" alt="friska" class="img-circle">
								<br/><br/>
								<p style="font-size:17px;font-family:'Candara';">&nbsp;&nbsp;&nbsp;"Layanannya Cepat dan Memuaskan, Website Saya jadi sangat menarik berkat sentuhan technosindo. Fast Response banget,<br/>&nbsp;&nbsp;&nbsp;Kreatif lagi ide-idenya. Good Job!!!"
								<br/><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=user/profil&id=sjakurullah_asj@yahoo.com" class="red"><b>&nbsp;&nbsp;&nbsp;Friska Asj</b></a>
								</p>
							</div>
                        </div>
                       <ul class="nav nav-tabs">
                           <li class="active"><a href="#A" data-toggle="tab"></a></li>
                           <li class=""><a href="#B" data-toggle="tab"></a></li>
                           <li class=""><a href="#C" data-toggle="tab"></a></li>
                           <li class=""><a href="#D" data-toggle="tab"></a></li>
                       </ul>
                   </div>
                </div>
            </div>
        </div>

