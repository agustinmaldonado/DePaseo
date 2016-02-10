<aside class="main-sidebar">

	<!--barra lateral: el estilo se puede encontrar en sidebar.less  -->

	<section class="sidebar">

		<!-- Sidebar user panel (optional) -->
		<div class="user-panel">
			<div class="pull-left image">
				<img src="<?php echo base_url(); ?>resource/dist/img/avatar5.png"
					class="img-circle" alt="User Image">

			</div>
			<div class="pull-left info"> 
              <?php $usuario= $this->session->userdata('nombre')?>  <!--ACA MUESTRA EL NOMBRE DEL USUARIO EN SESION -->
				<p><?php echo $usuario ?></p>
				<!-- Status -->
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>


		<!-- /.search form -->

		<!-- Sidebar Menu -->
		<ul class="sidebar-menu">
			<li class="header">ADMINISTRACION</li>
			<!-- Optionally, you can add icons to the links -->



			<li class="treeview"><a href="#"><i class="fa fa-users fa-fw"></i> <span>Administrar
						clientes</span><i class="fa fa-angle-left pull-right"></i></a>
				<ul class="treeview-menu">
					<li><a
						href="<?php echo base_url(); ?>index.php/Abmclientes/altaViews">Alta</a></li>
					<li><a
						href="<?php echo base_url(); ?>index.php/Abmclientes/bajaViews">Baja
							- Modificacion</a></li>

				</ul></li>












		</ul>
		<!-- /.sidebar-menu -->
	</section>
	<!-- /.sidebar -->
</aside>