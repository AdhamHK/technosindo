<?php
function deteksihalaman($alamat)
{
	$current_file_name = basename($_SERVER['REQUEST_URI'],'.php');
    if ($current_file_name == $alamat)
	echo 'class="current-page"';
}
?>   
   <div class="container">
            <div class="header">
				<div class="navbar">
                    <div style="margin-left:-38px;" class="navbar-inner">
						<div style="border-bottom:1px solid #eaeaea;" class="span12">
							<ul class="nav pull-left">
								<?php if(Yii::app()->user->isGuest){?><li><a href="#login_form" id="login_pop">Login</a></li>
								<?php } else {?>
								<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><img src="<?php $file=User::model()->findByAttributes(array('Email'=>Yii::app()->user->name)); echo Yii::app()->theme->baseUrl;?>/img/client/<?php echo $file->Avatar;?>" width="16" height="16" title="" alt="Me" class="img-circle">&nbsp;&nbsp;<?php echo $file->FullName;?></a>
								<ul class="dropdown-menu">
									<?php if(Yii::app()->user->isAdmin()){?>
										<li class="dropdown-submenu"><a href="#"><i class="icon-tasks"></i> Kelola</a>
											<ul class="dropdown-menu">
											  <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=user/index">Tabel User</a></li>
											  <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=level/index">Tabel Level</a></li>
											  <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=order/index">Tabel Order</a></li>
											  <li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=rekaplayananinfo/index">Layanan Info</a></li>
											 </ul>
										</li>
									<?php } elseif(Yii::app()->user->isMember()){?>
										<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=user/profil&id=<?php echo Yii::app()->user->name;?>"><i class="icon-user"></i> My Profil</a></li>
										<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=order/order"><i class="icon-shopping-cart"></i> Order</a></li>
									<?php } ?>
								<li><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/logout"><i class="icon-remove-sign"></i> Logout</a></li>
								</ul>
								</li>
								<?php }?>
								<?php if(Yii::app()->user->isGuest){?><li><a href="#sign_form" id="join_pop">Signup</a></li><?php } ?>
							</ul>
							<ul class="nav pull-right">
								<li style="padding: 15px 20px 10px 20px;"><i class="icon-envelope-alt"></i>Info@technosindo.com</li>
							</ul>
						</div>
						<div class="span12">
                            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </a>
							<a class="brand" href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/index">Technosindo</a>
                            <div class="nav-collapse collapse">
                                <ul class="nav pull-right">
                                    <li <?php deteksihalaman("index")?>><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/index"><i class="icon-home"></i><br />Home</a></li>
                                    <li <?php deteksihalaman("portfolio")?>><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/portfolio"><i class="icon-camera"></i><br />Portfolio</a></li>
                                    <li <?php deteksihalaman("about")?>><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/about"><i class="icon-user"></i><br />About</a></li>
                                    <li <?php deteksihalaman("contact")?>><a href="<?php echo Yii::app()->request->baseUrl;?>/index.php?r=site/contact"><i class="icon-envelope-alt"></i><br />Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
		
		<!-- lempar ke model login -->
		<?php 
			$loginvar = new LoginForm; 
			if(isset($_POST['LoginForm']))
			{
				$loginvar->attributes=$_POST['LoginForm'];
				$id=User::model()->findByAttributes(array('Email'=>$loginvar->username));
				if($loginvar->validate() && $loginvar->login())
				{
					$this->redirect(Yii::app()->user->returnUrl);
				}
				elseif($id->isActive != 1)
				{
					$this->redirect(array('site/denied&id='.$id->id.''));
				}

			}
		?>		
		
		<!-- lempar ke model daftar -->
		<?php 
			$registervar=new User;
			if(isset($_POST['User']))
			{
				$registervar->attributes=$_POST['User'];
				$kodeaktivasi=User::model()->buatkode();
				$registervar->isActive=0;
				$registervar->ActivateCode=$kodeaktivasi;
				$registervar->Avatar= $registervar->Password.'.png';
				
				if($registervar->save())
				{
					$mailer = Yii::createComponent('application.extensions.mailer.EMailer');
					$mailer->IsSMTP();
					$mailer->IsHTML(true);
					$mailer->SMTPAuth = true;
					$mailer->SMTPSecure = "ssl";
					$mailer->Host = "smtp.gmail.com";
					$mailer->Port = 465;
					$mailer->Username = "admntechnosindo@gmail.com";
					$mailer->Password = 'adm1ntechn0';
					$mailer->From = "Technosindo";
					$mailer->FromName = "Admin Technology Solution Indonesia";
					$mailer->AddAddress($registervar->Email);
					$isi='Hai '.$registervar->FullName.'<br/> 
					Anda telah melakukan register dengan :<br/>
					Username  :'.$registervar->Email.'<br/>
					Klik link berikut untuk aktifasi akun anda <br/>
					<a href="http://localhost/technosindo/index.php?r=site/aktivasi&id='.$registervar->ActivateCode.'">http://localhost/technosindo/index.php?r=site/aktivasi&id='.$registervar->ActivateCode.'</a>';
					$mailer->Subject = "Confirmation.";
					$mailer->Body = $isi;
					$mailer->Send();
					$this->redirect(array('site/konfirmasi&id='.$registervar->id.''));
				}
			}
		?>
		
		<!-- popup form #1 -->	
        <a href="#" class="overlay" id="login_form"></a>
		<?php include('poplogin.php')?>

        <!-- popup form #2 -->
        <a href="#" class="overlay" id="sign_form"></a>
		<?php include('popsignup.php')?>
				
			<!-- Dropdown 
		    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon-tasks"></i><br />Service</a>
				<ul class="dropdown-menu">
					<li><a href="#">Web Developing</a></li>
					<li><a href="#">App Developing</a></li>
				</ul>
			</li> -->
									
