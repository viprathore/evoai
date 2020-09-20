<?php
	//$nodeURL = 'http://evoai.tech:7000/login';
	$nodeURL = 'https://www.evoai.network:7000/login';
	$Ref_beta_role = $this->session->userdata('Ref_beta_role');	
	$Ref_UserEmail = $this->session->userdata('Ref_UserEmail');	
?>
<div class="column col-sm-3" id="sidebar">
	<ul class="nav" id="menu"> 
		<li id="Dashboard">
			<a href="<?php echo base_url('dashboard');?>">
				<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-home.png"></i> 
				<span class="collapse in">Dashboard</span>
			</a>
		</li>
		<li id="Wallet">
			<?php				
				if($Ref_beta_role == 1)
				{
					?>
						<form action="<?php echo $nodeURL; ?>" method="post" accept-charset="utf-8">								             
							<button type="submit">
								<input type="hidden" name="uIdc" class="form-control hidden" value="<?php echo base64_encode($this->Ref_UserID); ?>">
								<input type="hidden" name="dirn" class="form-control hidden" value="<?php echo 'wallet'; ?>">
								<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-wallet.png"></i> 
								<span class="collapse in">Wallet</span>
							</button>
						</form>         			
					<?php
				}
				else					
				{
					?>
						<a href="#">	
							<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-wallet.png"></i> 
							<span class="collapse in">Wallet</span>
							<i class="pull-right"><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-padlock.png"></i>
						</a>         			
					<?php
				}
			?>
		</li>
		<li id="Live_Trades">
			<?php
				//if($Ref_beta_role == 1)
				if($Ref_UserEmail == 'nicholas@tensai-solutions.co.uk' || $Ref_UserEmail == 'EVOAINETWORK@GMAIL.COM' || $Ref_UserEmail == 'bharatchhabra13@gmail.com' || $Ref_UserEmail == 'pavs94@gmail.com' || $Ref_UserEmail == 'sergeym610@gmail.com')
				{
					?>
						<form action="<?php echo $nodeURL; ?>" method="post" accept-charset="utf-8">									             
							<button type="submit">
								<input type="hidden" name="uIdc" class="form-control hidden" value="<?php echo base64_encode($this->Ref_UserID); ?>">
								<input type="hidden" name="dirn" class="form-control hidden" value="<?php echo 'live_trades'; ?>">
								<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-livetrade.png"></i> 
								<span class="collapse in">Live trades</span>
							</button>
						</form>
					<?php
				}
				else
				{
					?>
						<a href="#">
							<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-livetrade.png"></i> 
							<span class="collapse in">Live trades</span>
							<i class="pull-right"><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-padlock.png"></i>					
						</a>
					<?php
				}
			?>
		</li>
		<li id="Evabot">
			<?php
				if($Ref_beta_role == 1)
				{
					?>
						<form action="<?php echo $nodeURL; ?>" method="post" accept-charset="utf-8">									             
							<button type="submit">
								<input type="hidden" name="uIdc" class="form-control hidden" value="<?php echo base64_encode($this->Ref_UserID); ?>">
								<input type="hidden" name="dirn" class="form-control hidden" value="<?php echo 'evabot'; ?>">
								<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-chart.png"></i>
								<span class="collapse in">Evabot</span>
							</button>
						</form> 
					<?php
				}
				else
				{
					?>
						<a href="#">
							<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-chart.png"></i>
							<span class="collapse in">Evabot</span>
							<i class="pull-right"><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-padlock.png"></i>					
						</a> 
					<?php
				}
			?>
		</li>
		<li id="Evobot">
			<?php
				//if($Ref_beta_role == 2)
				if($Ref_UserEmail == 'nicholas@tensai-solutions.co.uk' || $Ref_UserEmail == 'EVOAINETWORK@GMAIL.COM' || $Ref_UserEmail == 'bharatchhabra13@gmail.com' || $Ref_UserEmail == 'pavs94@gmail.com' || $Ref_UserEmail == 'sergeym610@gmail.com')
				{
					?>
						<form action="<?php echo $nodeURL; ?>" method="post" accept-charset="utf-8">									             
							<button type="submit">
								<input type="hidden" name="uIdc" class="form-control hidden" value="<?php echo base64_encode($this->Ref_UserID); ?>">
								<input type="hidden" name="dirn" class="form-control hidden" value="<?php echo 'evobot'; ?>">
								<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-chart.png"></i> 
								<span class="collapse in">Evobot</span>
							</button>
						</form> 
					<?php
				}
				else
				{
					?>
						<a href="#">	
							<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-chart.png"></i> 
							<span class="collapse in">Evobot</span>
							<i class="pull-right padlock-sec"><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-padlock.png"></i>					
						</a> 
					<?php
				}
			?>
		</li>
		<li id="Eve">
			<?php
				//if($Ref_beta_role == 2)
				if($Ref_UserEmail == 'nicholas@tensai-solutions.co.uk' || $Ref_UserEmail == 'EVOAINETWORK@GMAIL.COM' || $Ref_UserEmail == 'bharatchhabra13@gmail.com' || $Ref_UserEmail == 'pavs94@gmail.com' || $Ref_UserEmail == 'sergeym610@gmail.com')
				{
					?>
						<form action="<?php echo $nodeURL; ?>" method="post" accept-charset="utf-8">									             
							<button type="submit">
								<input type="hidden" name="uIdc" class="form-control hidden" value="<?php echo base64_encode($this->Ref_UserID); ?>">
								<input type="hidden" name="dirn" class="form-control hidden" value="<?php echo 'eve'; ?>">
								<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-chart.png"></i>
								<span class="collapse in">Eve</span>
							</button>
						</form> 
					<?php
				}
				else
				{
					?>
						<a href="#">	
							<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-chart.png"></i>
							<span class="collapse in">Eve</span>
							<i class="pull-right padlock-sec"><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-padlock.png"></i>					
						</a> 
					<?php
				}
			?>
		</li>
		<li id="Exchange">
			<?php
				//if($Ref_beta_role == 2)
				if($Ref_UserEmail == 'nicholas@tensai-solutions.co.uk' || $Ref_UserEmail == 'EVOAINETWORK@GMAIL.COM' || $Ref_UserEmail == 'bharatchhabra13@gmail.com' || $Ref_UserEmail == 'pavs94@gmail.com' || $Ref_UserEmail == 'sergeym610@gmail.com')
				{
					?>
						<form action="<?php echo $nodeURL; ?>" method="post" accept-charset="utf-8">									             
							<button type="submit">
								<input type="hidden" name="uIdc" class="form-control hidden" value="<?php echo base64_encode($this->Ref_UserID); ?>">
								<input type="hidden" name="dirn" class="form-control hidden" value="<?php echo 'exchange'; ?>">
								<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-exchange.png"></i> 
								<span class="collapse in">Exchange</span>
							</button>
						</form> 
					<?php
				}
				else
				{
					?>
						<a href="#">	
							<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-exchange.png"></i> 
							<span class="collapse in">Exchange</span>
							<i class="pull-right padlock-sec"><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-padlock.png"></i>					
						</a> 
					<?php
				}
			?>
		</li>
		<li id="Academy">
			<?php
				if($Ref_beta_role == 1)
				{
					?>
						<a href="<?php echo base_url('academy');?>">
							<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/academy2.png"></i> 
							<span class="collapse in">Academy</span>
						</a>
					<?php
				}
				else
				{
					?>
						<a href="#">
							<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/academy2.png"></i> 
							<span class="collapse in">Academy</span>
							<i class="pull-right padlock-sec"><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-padlock.png"></i>
						</a>
					<?php
				}
			?>
		</li>
		<li id="Profile">
			<a href="<?php echo base_url('profile');?>">
				<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-profile.png"></i> 
				<span class="collapse in">Profile</span>
			</a>
		</li>
		<li id="Support">
			<a href="<?php echo base_url('support');?>">
				<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-support.png"></i> 
				<span class="collapse in">Support</span>
			</a>
		</li>
		<li id="Announcements">
			<a href="<?php echo base_url('clientAnnouncements');?>">
				<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-announce.png"></i> 
				<span class="collapse in">Announcements</span>
			</a>
		</li>                
		<li id="My_referrals">
			<a href="<?php echo base_url('myreferrals');?>">
				<i><img src="<?php echo base_url();?>evoai/public/webroot/frontend/images/icon-referral.png"></i> 
				<span class="collapse in">My Referrals</span>
			</a>
		</li>              		
	</ul>
</div>