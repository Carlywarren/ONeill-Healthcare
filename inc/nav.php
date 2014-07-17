<div class="navbar navbar-inverse navbar-fixed-top headroom" >
	<div class="container">
		<div class="navbar-header">
			<!-- Button for smallest screens -->
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
			<a class="navbar-brand" href="index.php"><img src="assets/images/logo.png" width="200px" alt="O'Neill Healthcare Logo"></a>
		</div>
		<div class="navbar-collapse collapse">
			<ul class="nav navbar-nav pull-right">

				<li class="<?php echo ($page == "home" ? "active" : "")?>"><a href="index.php">Home</a></li>

				<li class="<?php echo ($page =="about" ? "active" : "")?>"><a href="about.php">About</a></li>
				<li class="dropdown <?php echo ($page == "srv" ? "active" : "")?>">
					<a href="services.php" class="dropdown-toggle" data-toggle="dropdown">Services <b class="caret"></b></a>

					<ul class="dropdown-menu">
						<li class="<?php echo ($page =="rehab" ? "active" : "")?>"><a href="rehab-and-therapy.php">Rehab and Therapy</a></li>

						<li class="<?php echo ($page =="nursing" ? "active" : "")?>"><a href="skilled-nursing.php">Skilled Nursing</a></li>

						<li class="<?php echo ($page =="assistedliving" ? "active" : "")?>"><a href="assisted-living.php">Assisted Living</a></li>

						<li class="<?php echo ($page =="independentliving" ? "active" : "")?>"><a href="independent-living.php">Independent Living</a></li>

						<li class="<?php echo ($page =="memory" ? "active" : "")?>"><a href="memory-support.php">Memory Support</a></li>

						<li class="<?php echo ($page =="hospice" ? "active" : "")?>"><a href="hospice.php">Hospice</a></li>

						<li class="<?php echo ($page =="dialysis" ? "active" : "")?>"><a href="dialysis.php">Dialysis</a></li>
					</ul>

				</li>
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Locations <b class="caret"></b></a>
					<ul class="dropdown-menu">
						<li class="<?php echo ($page =="bb" ? "active" : "")?>"><a href="about.php"><a href="bradleybay.php">Bay Village Bradley Bay</a></li>
						<li><a href="centerridge.php">North Ridgeville Center Ridge</a></li>
						<li><a href="#">Lakewood</a></li>
						<li><a href="#">North Olmsted Wellington Place</a></li>
						<li><a href="#">Fairview Park</a></li>
					</ul>
				</li>
				<li class="<?php echo ($page == "contact" ? "active" : "")?>"><a href="contact.php">Contact</a></li>

			</ul>
		</div><!--/.nav-collapse -->
	</div>
</div> 