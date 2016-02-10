<header class="main-header">

	<!-- Logo -->
	<a href="#" class="logo"> <!-- mini logo for sidebar mini 50x50 pixels -->
		<span class="logo-mini"><b>DPS</b></span> <!-- logo for regular state and mobile devices -->
		<span class="logo-lg"><b>DePaseo</b></span>
	</a>

	<!-- Header Navbar -->
	<nav class="navbar navbar-static-top" role="navigation">

		<!-- boton activador del sidebar-->
		<a href="#" class="sidebar-toggle" data-toggle="offcanvas"
			role="button"> <span class="sr-only">Toggle navigation</span>
		</a>

		<!-- Navbar Right Menu -->
		<div class="navbar-custom-menu">
			<ul class="nav navbar-nav">
				<!-- User Account Menu -->
				<li class="dropdown user user-menu">
					<!-- Menu Toggle Button --> <a href="#" class="dropdown-toggle"
					data-toggle="dropdown"> <!-- The user image in the navbar--> <img
						src="<?php echo base_url(); ?>resource/dist/img/avatar5.png"
						class="user-image" alt="User Image"> <!-- hidden-xs hides the username on small devices so only the image appears. -->
						<span class="hidden-xs"><?php echo $usuario= $this->session->userdata('nombre')?></span>
				</a>
					<ul class="dropdown-menu">
						<!-- The user image in the menu -->
						<li class="user-header"><img
							src="<?php echo base_url(); ?>resource/dist/img/avatar5.png"
							class="img-circle" alt="User Image">

						  <?php $usuario= $this->session->userdata('nombre')?>  <!--ACA MUESTRA EL NOMBRE DEL USUARIO EN SESION -->
							<p><?php echo $usuario ?></p></li>
						<!-- Menu Body -->

						<!-- Menu Footer-->
						<li class="user-footer">

							<div class="pull-right">
								<a
									href="<?php echo base_url(); ?>index.php/usuarios/cerrar_sesion"
									class="btn btn-primary btn-flat">cerrar sesión</a>
							</div>
						</li>
					</ul>
				</li>
				<!-- Control Sidebar Toggle Button -->
				<li><a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
				</li>
			</ul>
		</div>
	</nav>
</header>