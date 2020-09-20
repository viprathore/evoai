<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
                <img src="<?php echo base_url();?>evoai/public/admin/webroot/admin/dist/img/avatar3.png" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Hello, 
					<?php 
						echo $this->user;
					?>
				</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu">
			<?php
				if($this->admin_id == 1)
				{
					?>
						<li class="<?php echo ($this->uri->segment(2)=='dashboard')?'active':''?>">
							<a href="<?php echo base_url();?>admin/dashboard">
								<i class="fa fa-dashboard"></i> <span>Dashboard</span>
							</a>
						</li>			
						<li class="<?php echo ($this->uri->segment(2)=='evot_bonus_value')?'active':''?>">
							<a href="<?php echo base_url();?>admin/evot_bonus_value">
								<i class="fa fa-money"></i> <span>Evot Bonus Value</span>
							</a>
						</li>			
						<li class="<?php echo ($this->uri->segment(2)=='users')?'active':''?>">	
							<a href="<?php echo base_url();?>admin/users">
								<i class="fa fa-users"></i> <span>Users</span>
							</a>	
						</li>	
								
						<li class="<?php echo ($this->uri->segment(2)=='support')?'active':''?>">
							<a href="<?php echo base_url();?>admin/support">
								<i class="fa fa-support"></i> <span>Support</span>
							</a>
						</li>
						<li class="<?php echo ($this->uri->segment(2)=='adminaccessrole')?'active':''?>">
							<a href="<?php echo base_url();?>admin/adminaccessrole">
								<i class="fa fa-user"></i> <span>Admin Access Role</span>
							</a>
						</li>
					<?php
				}
				$admin_detaiss = $this->db->get_where('admin', array('admin_id'=>$this->admin_id))->row();
				if($admin_detaiss)
				{
					$admin_role = unserialize($admin_detaiss->admin_role);
					if(in_array('Announcement', $admin_role))
					{
						?>
							<!-- Announcements -->
							<li class="treeview <?php echo ($this->uri->segment(2)=='announcements' || $this->uri->segment(3)=='category')?'active':''?>">
								<a href="#">
									<i class="fa fa-th-list"></i> <span>Announcements</span>
									<i class="fa pull-right fa-angle-left"></i>
								</a>
								<ul class="treeview-menu" >
									<li class="<?php echo ($this->uri->segment(2)=='announcements' && $this->uri->segment(3)!='category')?'active':''?>">
										<a href="<?php echo base_url();?>admin/announcements">
											<i class="fa fa-bullhorn"></i> <span>Announcements</span>
										</a>
									</li>
									<li class="<?php echo ($this->uri->segment(3)=='category')?'active':''?>">
										<a href="<?php echo base_url();?>admin/announcements/category">
											<i class="fa fa-bullhorn"></i> <span>Category</span>
										</a>
									</li>
								</ul>
							</li>	
							<!--//-->
						<?php
					}
					if(in_array('Blog', $admin_role))
					{
						?>
							<!-- Blog -->
							<li class="treeview <?php echo ($this->uri->segment(2)=='admin_comments' || $this->uri->segment(2)=='admin_posts' || $this->uri->segment(2)=='admin_cats')?'active':''?>">
								<a href="#">
									<i class="fa fa-th-list"></i> <span>Blog</span>
									<i class="fa pull-right fa-angle-left"></i>
								</a>
								<ul class="treeview-menu" >
									<li class="<?php echo ($this->uri->segment(2)=='admin_posts')?'active':''?>">
										<a href="<?php echo base_url();?>admin/admin_posts">
											<i class="fa fa-envelope"></i> <span>Blog</span>
										</a>
									</li>	
									<li class="<?php echo ($this->uri->segment(2)=='admin_cats')?'active':''?>">
										<a href="<?php echo base_url();?>admin/admin_cats">
											<i class="fa fa-list-ul"></i> <span>Category</span>
										</a>
									</li>	
									<li class="<?php echo ($this->uri->segment(2)=='admin_comments')?'active':''?>">
										<a href="<?php echo base_url();?>admin/admin_comments">
											<i class="fa fa-comment"></i> <span>Comments</span>
										</a>
									</li>					
								</ul>
							</li>	
							<!--//-->			
						<?php
					}					
				}
			?>				
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>