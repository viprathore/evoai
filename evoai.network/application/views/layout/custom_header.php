	<div class="spinner-wrapper">
		<div class="spinner">
			<img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/preloader-black.gif" alt="" class="img-responsive center-block">
		</div>
	</div>
	<div id='toTop'>
		<i class="fa fa-angle-up"></i>
	</div>		
	<section class="header dash-header" id="top">
		<div>
			<div class="row clearfix">
				<!-- Logo -->
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-6 hidden-xs">
					<div>
					<a href="<?php echo base_url();?>">
						<img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/logo_web.png" alt="" class="img-responsive" >			
					</a>
					</div>
				</div>
				<!--//-->
				<!--NAvigation-->
				<div class="col-xs-12 visible-xs">
					<nav class="navbar navbar-default">
					  <div class="container-fluid">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
							<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>	
							<a href="<?php echo base_url();?>" class="navbar-brand">
								<img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/logo_web.png" alt="" class="img-responsive" >			
							</a>				      
					    </div>
					    <!-- Collect the nav links, forms, and other content for toggling -->
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					      <ul class="nav navbar-nav">
					        <li class="active"><a href="<?php echo base_url('dashboard');?>">Dashboard</a></li>
					        <li>
					        	<a href="<?php echo base_url('wallet');?>">Wallet</a>
					        </li>
					        <li>
					        	<a href="<?php echo base_url('liveTrades');?>">Live Trades</a>
					        </li>
					        <li>
					        	<a href="<?php echo base_url('evabot');?>">Evabot</a>
					        </li>
					        <li>
					        	<a href="<?php echo base_url('evobot');?>">Evobot</a>
					        </li>
					        <li>
					        	<a href="<?php echo base_url('eve');?>">Eve</a>
					        </li>
					        <li>
					        	<a href="<?php echo base_url('exchange');?>">Exchange</a>
					        </li>
					        <li>
					        	<a href="<?php echo base_url('profile');?>">Profile</a>
					        </li>
					        <li>
					        	<a href="<?php echo base_url('support');?>">Support</a>
					        </li>
					        <li>
					        	<a href="<?php echo base_url('announcements');?>">Announcements</a>
					        </li>
					        <li>
					        	<a href="<?php echo base_url('myreferrals');?>">My Referrals</a>
					        </li>
					        <li>
					        	<a href="<?php echo base_url(); ?>helpSupport">Help & Support</a>
					        </li>
					        <li>
								<form action="<?php echo base_url('logout'); ?>" method="post">
									<button type="submit">Sign out</button>
								</form>
								</li>				        
					      </ul>
					    </div><!-- /.navbar-collapse -->
					  </div><!-- /.container-fluid -->
					</nav>
				</div>
				<!--//-->
				<div class="col-lg-1 col-md-1 hidden-xs hidden-sm hidden-xs">
					<a href="#" data-toggle="offcanvas" class="toggle-btn hidden-xs hidden-sm"><i class="fa fa-navicon fa-2x"></i></a>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-8 hidden-xs">
					<ul class="header-property row clearfix">
						<li class="col-lg-4 col-md-7 col-sm-7"><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/eth-iconM.png">&nbsp;&nbsp;<span class="font-purple">1 ETH</span> = <span class="liveUSD_price"></span> USD</li>
						<li class="col-lg-3 col-md-5 col-sm-5"><span class="font-purple">1 EVOT</span> = <span><?php echo @$evot_details->evot_value; ?> USD</span></li>
						<li class="my_bal box-shadow col-lg-5 col-md-12 col-sm-12">
							<div class="head">MY BALANCE</div>
							<div class="pull-left brd">
								<!--<span class="liveEVOT_balance">0</span>-->
                                <span id="header_evot_balance">0</span>
								<span class="font-purple">EVOT</span>
							</div> 
							<div class="pull-left">
								<!--<span class="liveETH_balance"></span>-->
                                <span id="header_eth_balance">0</span>
								<span class="font-purple">ETH</span>
							</div>
						</li>
					</ul>
				</div>
				<!-- My account -->		
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-4 hidden-xs">
					<ul class="header-property">
						<li class="dropdown user user-menu pull-right">

							<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">

								<img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/user-image.png" class="user-image" alt="User Image"><br>

								<span class="hidden-xs"><?php echo $this->Ref_UserName; ?></span>

							</a>

							<ul class="dropdown-menu">

								<!-- User image -->

								<li class="text-center">

									<img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/user-image.png" class="img-circle" alt="User Image">

								</li>

								<!-- Menu Footer-->

								<li><a href="<?php echo base_url(); ?>profile">Profile</a></li>

								<li><a href="<?php echo base_url(); ?>helpSupport">helpSupport</a></li>

								<li>
									<form action="<?php echo base_url('logout'); ?>" method="post">
										<button type="submit">Sign out</button>
									</form>
								</li>

							</ul>

						</li>

					</ul>
				</div>
				<!--//--> 		

			</div>      

		</div>

	</section> 