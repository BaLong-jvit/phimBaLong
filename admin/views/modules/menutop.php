<?php
    $account=unserialize($_COOKIE['login_admin']);
?>
<div class="navbar">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link">
						<i class="fa fa-bars" onclick="collapseSidebar()"></i>
					</a>
				</li>
				<li class="nav-item">
					<a href="index.php">
					<img src="../public/image/admin/logo.png" alt="" class="logo"></a>
				</li>
			</ul>
			<form action="" class="navbar-search">
				<input type="text" name="Search" class="navbar-search-input" placeholder="What is your locking for...">
				<i class="fa fa-search"></i>
			</form>
			<ul class="navbar-nav">
				<li class="nav-item dropdown">
					<a class="nav-link">
						<i class="fa fa-bell dropdown-toggle remove-content" data-toggle="notification-menu"></i>
						<span class="navbar-badge">15</span>
					</a>
					<ul id="notification-menu" class="dropdown-menu notification-menu">
						<div class="dropdown-menu-header">
							<span> Notifications</span>
						</div>
						<div class="dropdown-menu-content overlay-scrollbar">
							<?php for ($i=0; $i < 7; $i++): ?>
								<li class="dropdown-menu-item">
									<a href="#" class="dropdown-menu-link">
										<div>
											<i class="fa fa-gift"></i>
										</div>
										<span>
											Lorem ipsum dolor sit amet consectetur adipisicing elit.
											<br>
											<span>15/07/2020</span>
										</span>							
									</a>
								</li>
								<li class="dropdown-menu-item">
									<a href="#" class="dropdown-menu-link">
										<div>
											<i class="fa fa-tasks" ></i>
										</div>
										<span>
											Lorem ipsum dolor sit amet consectetur adipisicing elit.
											<br>
											<span>15/07/2020</span>
										</span>							
									</a>
								</li>
							<?php endfor; ?>
						</div>
						<div class="dropdown-menu-footer">
							<span>View all notifications</span>
						</div>
					</ul>
				</li>
				<li class="nav-item">
					<div class="avt dropdown">
                        <div class="admin-account dropdown-toggle remove-content" data-toggle="user-menu">
                            <img src="../public/image/admin/account/default.png" alt="" class="dropdown-toggle" data-toggle="user-menu">
                            <?php echo $account['DisplayName']; ?> 
                        </div>
						
						<ul id="user-menu" class="dropdown-menu">
							<li class="dropdown-menu-item">
								<a href="#" class="dropdown-menu-link">
									<div>
									<i class="fa fa-user" aria-hidden="true"></i>
									</div>
									<span>Profile</span>
								</a>
							</li>
							<li class="dropdown-menu-item">
								<a href="#" class="dropdown-menu-link">
									<div>
									<i class="fa fa-cog" aria-hidden="true"></i>
									</div>
									<span>Setting</span>
								</a>
							</li>
							<li class="dropdown-menu-item">
								<a href="#" class="dropdown-menu-link">
									<div>
									<i class="fa fa-credit-card" aria-hidden="true"></i>
									</div>
									<span>Payment</span>
								</a>
							</li>
							<li class="dropdown-menu-item">
								<a href="#" class="dropdown-menu-link">
									<div>
									<i class="fa fa-spinner" aria-hidden="true"></i>
									</div>
									<span>Project</span>
								</a>
							</li>
							<li class="dropdown-menu-item">
								<a href="./views/components/logout.php" class="dropdown-menu-link">
									<div>
									<i class="fa fa-sign-out" aria-hidden="true"></i>
									</div>
									<span>Log out</span>
								</a>
							</li>
						</ul>
					</div>
				</li>
			</ul>
		</div>