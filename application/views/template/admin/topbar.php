<!--- <nav class="navbar navbar-toggleable-md navbar-inverse fixed-top bg-inverse">
    <button class="navbar-toggler navbar-toggler-right hidden-lg-up" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#">Dashboard</a>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item active">
				<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Settings</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Profile</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#">Help</a>
			</li>
		</ul>
		<form class="form-inline mt-2 mt-md-0">
			<input class="form-control mr-sm-2" type="text" placeholder="Search">
			<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		</form>
	</div>
</nav> -->

	<div class="main-wrapper">
		<div class="app" id="app">
            <header class="header">
                <!--- <div class="header-block header-block-collapse hidden-lg-up"> 
					<button class="collapse-btn" id="sidebar-collapse-btn">
						<i class="fa fa-bars"></i>
					</button> 
				</div>
                <div class="header-block header-block-search hidden-sm-down">
                    <form role="search">
                        <div class="input-container"> <i class="fa fa-search"></i> <input type="search" placeholder="Search">
                            <div class="underline"></div>
                        </div>
                    </form>
                </div>
                <div class="header-block header-block-buttons">
                    <a href="https://github.com/modularcode/modular-admin-html" class="btn btn-sm header-btn"> <i class="fa fa-github-alt"></i> <span>View on GitHub</span> </a>
                    <a href="https://github.com/modularcode/modular-admin-html/stargazers" class="btn btn-sm header-btn"> <i class="fa fa-star"></i> <span>Star Us</span> </a>
                    <a href="https://github.com/modularcode/modular-admin-html/releases/download/v1.0.1/modular-admin-html-1.0.1.zip" class="btn btn-sm header-btn"> <i class="fa fa-cloud-download"></i> <span>Download .zip</span> </a>
                </div> -->
                <div class="header-block header-block-nav">
                    <ul class="nav-profile">
                        <li class="notifications new">
                            <!-- <a href="" data-toggle="dropdown"> <i class="fa fa-bell-o"></i> 
								<sup>
									<span class="counter">8</span>
								</sup> 
							</a> -->
							<div class="dropdown-menu notifications-dropdown-menu">
                                 <!-- <ul class="notifications-container">
                                   <li>
                                        <a href="" class="notification-item">
                                            <div class="img-col">
                                                <div class="img" style="background-image: url('assets/faces/3.jpg')"></div>
                                            </div>
                                            <div class="body-col">
                                                <p> <span class="accent">Zack Alien</span> pushed new commit: <span class="accent">Fix page load performance issue</span>. </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="notification-item">
                                            <div class="img-col">
                                                <div class="img" style="background-image: url('assets/faces/5.jpg')"></div>
                                            </div>
                                            <div class="body-col">
                                                <p> <span class="accent">Amaya Hatsumi</span> started new task: <span class="accent">Dashboard UI design.</span>. </p>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="" class="notification-item">
                                            <div class="img-col">
                                                <div class="img" style="background-image: url('assets/faces/8.jpg')"></div>
                                            </div>
                                            <div class="body-col">
                                                <p> <span class="accent">Andy Nouman</span> deployed new version of <span class="accent">NodeJS REST Api V3</span> </p>
                                            </div>
                                        </a>
                                    </li>
                                </ul>-->
                                <footer>
                                    <ul>
                                        <li> 
											<a href="">	View All </a> 
										</li>
                                    </ul>
                                </footer>
                            </div>
                        </li>
                        <li class="profile dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                <div class="img" style="background-image: url('<?php echo base_url(); ?>assets/modular-admin/img/rsz_1phet.png')"> </div> 
								<span class="name">
								    เพชร เฉยเฉย
								</span> 
							</a>
                            <div class="dropdown-menu profile-dropdown-menu" aria-labelledby="dropdownMenu1">
                                 <a class="dropdown-item" href="#"> <i class="fa fa-user icon"></i> Profile </a>
                                <a class="dropdown-item" href="#"> <i class="fa fa-gear icon"></i> Settings </a>
                                <a class="dropdown-item" href="#"> <i class="fa fa-gear icon"></i> Change Password </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo site_url('Login/logout'); ?>"> <i class="fa fa-power-off icon"></i> Logout </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </header>