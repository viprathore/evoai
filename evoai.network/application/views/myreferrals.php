<div class="dash-body">
	<?php echo $this->load->view('layout/custom_header.php'); ?>               
	<section class="dashboard-section">	
		<div class="wrapper">
			<div class="row row-offcanvas row-offcanvas-left">
				<!-- sidebar -->
				<?php echo $this->load->view('sidebar.php');?>
				<!-- /sidebar -->
				<!-- main right col -->
				<div class="column col-sm-9 main-dashcontent" id="main">   
					<h2 class="pro-heading">
						<?= @$title; ?>
					</h2>
					<div class="row clearfix mb-70">
						<div class="ref-sec col-md-6 col-sm-6">							
						<label>Referral Link:</label><br>							
							<div class="input-group">
								<input type="text" onclick="copyTextAdd();" class="form-control walletAddress" value="<?php echo base_url();?>registration?e=<?= $links ?>" placeholder="https://www.evoai.network/">
								<span onclick="copyTextAdd();" class="input-group-addon">Copy</span>
							</div>														
						</div>
						<div class="col-md-6 col-sm-6">
							<h3>Total referral Bonus : <span id="ref_bonus_count"></span> EVOT</h3>
						</div>
					</div>						
					<!-- Referral User -->
					<div class="row clearfix">
						<div class="col-md-6 col-sm-8">
							<div class="table-responsive">
								<table class="table refusers">
									<tr>
										<td align="center"><h2>Referral user</h2></td>
									</tr>
									<tr>
										<td align="center"><h2><?= count($user_list); ?></h2></td>
									</tr>
									<tr>
										<td align="center"><h2>Referrals</h2></td>
									</tr>
								</table>
							</div>
						</div>							
					</div>
					<!--//-->
					<!-- userlist-->
					<div class="row clearfix" id="Evt-calc">
						<div class="col-md-12">
							<h2>Displaying I User</h2>
							<div class="table-responsive mt-20">
								<table class="table table-bordered users-list">
									<thead>
										<tr>
											<th align="center">NAME</th>
											<th align="center">USERNAME</th>
											<th align="center">EMAIL</th>
											<th align="center">REFERRAL BONUS</th>
										</tr>
									</thead>
									<tbody>
										<?php
											if($user_list != '')
											{
												foreach($user_list as $res)
												{
													?>
														<tr>
															<td>
																<?= $res->username ?>
															</td>
															<td>
																<?php
																	$user_name = explode('@', $res->email );
																	echo $user_name[0];
																?>
															</td>
															<td>
																<?= $res->email ?>
															</td>
															<td>
																<script>
																	var eth_add = '<?= $res->eth_address ?>';
																	if(eth_add)
																	{
																		web3 = new Web3(new Web3.providers.HttpProvider("https://mainnet.infura.io/v3/baf22b6c2cd84003aa418a653eacecfa"));
																		let tokenAddress = "0x5dE805154A24Cb824Ea70F9025527f35FaCD73a1";
																		let walletAddress = "<?= $res->eth_address ?>";

																		// The minimum ABI to get ERC20 Token balance
																		let minABI = [
																		  // balanceOf
																		  {
																			"constant":true,
																			"inputs":[{"name":"_owner","type":"address"}],
																			"name":"balanceOf",
																			"outputs":[{"name":"balance","type":"uint256"}],
																			"type":"function"
																		  },
																		  // decimals
																		  {
																			"constant":true,
																			"inputs":[],
																			"name":"decimals",
																			"outputs":[{"name":"","type":"uint8"}],
																			"type":"function"
																		  }
																		];

																		// Get ERC20 Token contract instance
																		let contract = web3.eth.contract(minABI).at(tokenAddress);
																		let bonus_value = '<?php echo @$evot_details->bonus; ?>';
																		// Call balanceOf function
																		contract.balanceOf(walletAddress, (error, balance) => {
																		  // Get decimals
																		  contract.decimals((error, decimals) => {
																			// calculate a balance
																			balance = balance.div(10**decimals);
																			var user_balance = balance;
																			var ref_bonus = (user_balance * bonus_value/100).toFixed(2);
																			$("#code_<?= $res->id ?>").text(ref_bonus);
																		  });
																		});
																		
																		/*
																		$.ajax({
																			url: 'https://api.etherscan.io/api?module=account&action=tokenbalance&contractaddress=0x5dE805154A24Cb824Ea70F9025527f35FaCD73a1&address=<?= $res->eth_address ?>&tag=latest&apikey=XT1TNTQ6NWDKJDVB76FIGWQU2VAJHEKTYV',
																			type: 'POST',
																			dataType: 'json',
																			cache: false,
																			success: function(responce){ 
																				var user_balance = responce.result;
																				var ref_bonus = (user_balance * 5/100).toFixed(2);
																				$("#code_<?= $res->id ?>").text(ref_bonus);
																			}
																		});
																		*/
																	}
																</script>
																<span class="ref_bonus_count" id="code_<?= $res->id ?>">0.00</span>
															</td>
														</tr>
													<?
												}
											}
											else
											{	
												?>
													<tr>
														<td colspan="4">
															No record available
														</td>
													</tr>
												<?
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<!--//-->
				</div>
				<!-- /main -->
			</div>
		</div>
	</section>
</div>
<script>
	/* ref_bonus_count */
	$(function() {
		$("#ref_bonus_count").text(sumColumn(4));
	});

	function sumColumn(index) {
		var total = 0;
		$("td:nth-child(" + index + ")").each(function() {
			total += parseFloat($(this).text(), 10) || 0;
		});  
		total = (total * 5/100).toFixed(2);
		return total;
	}
</script>