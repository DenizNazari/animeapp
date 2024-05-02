	
		<nav id="sidebar" class="sidebar">
			<a class="sidebar-brand" href="index.php">
				<svg>
					<use xlink:href="#ion-ios-pulse-strong"></use>
				</svg>
				ANIBASE
			</a>
			<div class="sidebar-content">
				<div class="sidebar-user">

					<div class="fw-bold"><?php echo $_SESSION["user_name"]?></div>

				</div>

				<ul class="sidebar-nav">
					<li class="sidebar-header">
						Main
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="admin_panel.php">
							<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">DATA</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="admin_animes_reguests.php">
							<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">ANIMES REGUESTS</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="admin_animes.php">
							<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">ANIMES</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="admin_characters.php">
							<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">CHARACTERS</span>
						</a>
					</li>


					<li class="sidebar-item">
						<a class="sidebar-link" href="admin_USER_PAGE.PHP">
						<i class="align-middle me-2 fas fa-fw fa-list"></i> <span class="align-middle">USER PROFILE PICTURE</span>
						</a>
					</li>



				</ul>
			</div>
		</nav>		