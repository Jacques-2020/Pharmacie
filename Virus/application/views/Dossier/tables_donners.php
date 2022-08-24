<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>PHARMACIE</title>

	<!-- Bootstrap -->
	<link href="<?= base_url(); ?>./cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link href="<?= base_url(); ?>./Design/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="<?= base_url(); ?>./Design/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<!-- NProgress -->
	<link href="<?= base_url(); ?>./Design/vendors/nprogress/nprogress.css" rel="stylesheet">
	<!-- iCheck -->
	<link href="<?= base_url(); ?>./Design/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	<!-- Datatables -->

	<link href="<?= base_url(); ?>./Design/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>./Design/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>./Design/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>./Design/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
	<link href="<?= base_url(); ?>./Design/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="<?= base_url(); ?>./Design/build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
	<div class="container body">
		<div class="main_container">
			<div class="col-md-3 left_col">
				<div class="left_col scroll-view">
					<div class="navbar nav_title" style="border: 0;">
						<a href="<?= site_url('Login/Salacompte'); ?>" class="site_title"><i class="fa fa-paw"></i> <span>Administrateur</span></a>
					</div>

					<div class="clearfix"></div>

					<!-- menu profile quick info -->
					<div class="profile clearfix">
						<div class="profile_pic">
							<img src="<?= base_url(); ?>Design/production/images/user.png" alt="..." class="img-circle profile_img">
						</div>
						<div class="profile_info">
							<span>Bienvenue</span>
							<h2><?= $this->session->NomAdmin; ?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>Admin</h3>
							<ul class="nav side-menu">
								<li><a><i class="fa fa-home"></i> Pharmacie <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">

									</ul>
								</li>
								<li><a><i class="fa fa-laptop"></i>Insertion des Produits <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">

										<li><a href="<?= site_url('donner/Cosmeherit/Tyango'); ?>">Entrer-Produits</a></li>
									</ul>
								</li>

								<li><a><i class="fa fa-desktop"></i> Tables des Produits <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= site_url('donner/Table_Cosme/Tindas'); ?>">Table-Produits</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-user"></i>Espace-Admin<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= site_url('donner/LaboAdmin/EspaceAds'); ?>">Les Administrateurs</a></li>
										<!-- <li><a href="tables_dynamic.html">Table Dynamic</a></li> -->
									</ul>
								</li>

							</ul>
						</div>


					</div>
					<!-- /sidebar menu -->

					<!-- /menu footer buttons -->
					<div class="sidebar-footer hidden-small">
						<a data-toggle="tooltip" data-placement="top" title="Settings">
							<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="FullScreen">
							<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Lock">
							<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
						</a>
						<a data-toggle="tooltip" data-placement="top" title="Logout" href="<?= site_url("Login/Salacompte"); ?>">
							<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
						</a>
					</div>
					<!-- /menu footer buttons -->
				</div>
			</div>

			<!-- top navigation -->
			<div class="top_nav">
				<div class="nav_menu">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>
					<nav class="nav navbar-nav">
						<ul class=" navbar-right">
							<li class="nav-item dropdown open" style="padding-left: 15px;">
								<a href="javascript:;" class="user-profile dropdown-toggle" aria-haspopup="true" id="navbarDropdown" data-toggle="dropdown" aria-expanded="false">
									<img src="<?= base_url(); ?>Design/production/images/user.png" alt=""><?= $this->session->NomAdmin; ?>
								</a>
								<div class="dropdown-menu dropdown-usermenu pull-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="javascript:;"> Profile</a>
									<a class="dropdown-item" href="javascript:;">
										<span class="badge bg-red pull-right">50%</span>
										<span>Paramettre</span>
									</a>
									<a class="dropdown-item" href="javascript:;">Help</a>
									<a class="dropdown-item" href="<?= site_url("Login/Salacompte"); ?>"><i class="fa fa-sign-out pull-right"></i> Verrouillez</a>
								</div>
							</li>

							<li role="presentation" class="nav-item dropdown open">
								<a href="javascript:;" class="dropdown-toggle info-number" id="navbarDropdown1" data-toggle="dropdown" aria-expanded="false">
									<i class="fa fa-home"></i>
									<span class="badge bg-green"><?= count($cosmetique); ?></span>
								</a>
								<ul class="dropdown-menu list-unstyled msg_list" role="menu" aria-labelledby="navbarDropdown1">
									<!-- <li class="nav-item">
										<a class="dropdown-item">
											<span class="image"><img src="images/img.jpg" alt="Profile Image" /></span>
											<span>
												<span>Mr-<?= $this->session->NomAdmin; ?></span>
												<span class="time">...</span>
											</span>
											<span class="message">
												
											</span>
										</a>
									</li> -->

									<li class="nav-item">
										<div class="text-center">
											<a class="dropdown-item">
												<strong>See All Alerts</strong>
												<i class="fa fa-angle-right"></i>
											</a>
										</div>
									</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
			<!-- /top navigation -->

			<!-- page content -->
			<div class="right_col" role="main">
				<div class="">

					<div class="page-title">
						<div class="title_left">
							<h3><small></small></h3>
						</div>

						<div class="title_center">
							<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-center top_search">
								<?php echo form_open(site_url("donner/Table_Cosme/Tindas")); ?>
								<div class="input-group">
									<input type="search" name="search" class="form-control" placeholder="Saisir la Recherche...">

									<span class="input-group-btn">
										<button class="btn btn-secondary" type="submit">Recherche !</button>
									</span>
								</div>
								<div class="title_center">
									<span class="text-danger"><?= form_error('search'); ?></span>
								</div>

							</div>
							<?= form_close(); ?>

							<br><br>

							<?php
							if (count($recherche)) {
								$i = 1;
								foreach ($recherche as $pd) {
							?> <br><br>
									<hr>
									<!-- <div class="container">
                  <h6>Les tableaux Bootstrap</h6> -->
									<!-- <table class="table table-bordered"> -->

									<table class="table table-bordered">
										<thead>
											<tr>
												<th>#</th>
												<th>Nom-Produit</th>
												<th>Code-Barre</th>
												<th>Prix- Fc</th>
												<th>Stocks</th>
												<!-- <th>Qte-V</th>
												<th>Total Vente</th> -->
												<th>Date-Fab</th>
												<th>Date-Exp</th>
												<th>Date-Creation</th>
												<!-- <th>Vente</th> -->
												<th>Sup</th>
												<th>Mod</th>
											</tr>
										</thead>
										<tbody>

											<tr class="table table-success">
											<tr title="<?= $pd->stock < 20 ? 'Le stock est inférieur à 20, penser au réapprovisionnement' : '' ?>" class="<?= $pd->stock < 20 ? 'bg-danger' : '' ?>">
												<td><?= $i ?></td>
												<td><?= $pd->Nom_Article; ?></td>
												<td><?= $pd->Code_Article; ?></td>
												<td><?= $pd->Prix_F; ?> FC</td>
												<td><?= $pd->stock; ?></td>
												<!-- <td><?= $pd->qte_v; ?></td>
												<td><?= $pd->qte_v * $pd->Prix_F; ?> FC</td> -->
												<td><?= $pd->Date_F; ?></td>
												<td><?= $pd->Date_P; ?></td>
												<td><?= $pd->DateCreation; ?></td>
												<!-- <td>
													<button class="btn btn-success vente" stock='<?= $pd->stock; ?>' article="<?= $pd->Nom_Article ?>" value="<?= $pd->idpharma; ?>"><i class="fa fa-plus-circle success"></i> vente </button>
												</td> -->
												<td><a href="Supprimer?idpharma=<?= "$pd->idpharma" ?>"><i class="fa fa-trash red" onClick="return confirm('Voulez-vous Supprimer ?');"></i></a></td>
												<td><a href="Modifiers?idpharma=<?= "$pd->idpharma" ?>"><i class="fa fa-trash success" onClick="return confirm('Voulez-vous Modifier ?');"></i> </a></td>
												
											</tr>
										</tbody>
									</table>
									<!-- </div>  -->
							<?php
								}
								$i++;
							}
							?>
						</div>

					</div>
				</div><br><br><br><br><br><br><br><br>

				<div class="clearfix">

					<div class="col-md-12 col-sm-12 ">
						<div class="x_panel">

							<div class="x_title">
								<h2>Espace<small>DES PRODUITS</small></h2>
								<ul class="nav navbar-right panel_toolbox">
									<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
									</li>
									<li class="dropdown">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
										<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
											<a class="dropdown-item" href="#">Settings 1</a>
											<a class="dropdown-item" href="#">Settings 2</a>
										</div>
									</li>
									<li><a class="close-link"><i class="fa fa-close"></i></a>
									</li>
								</ul>
								<div class="clearfix"></div>
							</div>


							<div class="x_content">
								<div class="row">
									<div class="col-sm-12">
										<div class="card-box table-responsive">
											<p class="text-muted font-13 m-b-30">

											</p>


											<table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
												<thead>
													<tr>
														<th>#</th>
														<th>Nom-Produit</th>
														<th>Code-Barre</th>
														<th>Prix- Fc</th>
														<th>Stock</th>
														<!-- <th>Qte-V</th>
														<th>Total Vente</th> -->
														<th>Date-Fab</th>
														<th>Date-Exp</th>
														<th>Date-Creation</th>
														<!-- <th>Vente</th> -->
														<th>Sup</th>
														<th>Mod</th>
													</tr>
												</thead>

												<tbody>
													<?php
													$i = 1;
													foreach ($cosmetique as $cm) {
													?>
														<tr title="<?= $cm->stock < 20 ? 'Le stock est inférieur à 20, penser au réapprovisionnement' : '' ?>" class="<?= $cm->stock < 20 ? 'bg-danger' : '' ?>">
															<td><?= $i ?></td>
															<td><?= $cm->Nom_Article; ?></td>
															<td><?= $cm->Code_Article; ?></td>
															<td><?= $cm->Prix_F; ?> FC</td>
															<td><?= $cm->stock; ?></td>
															<!-- <td><?= $cm->qte_v; ?></td>
															<td><?= $cm->qte_v * $cm->Prix_F; ?> FC</td> -->
															<td><?= $cm->Date_F; ?></td>
															<td><?= $cm->Date_P; ?></td>
															<td><?= $cm->DateCreation; ?></td>
															<!-- <td>
																<button class="btn btn-success vente" stock='<?= $cm->stock; ?>' article="<?= $cm->Nom_Article ?>" value="<?= $cm->idpharma; ?>"><i class="fa fa-plus-circle success"></i> vente </button>
															</td> -->
															<td><a href="Supprimer?idpharma=<?= "$cm->idpharma" ?>"><i class="fa fa-trash red" onClick="return confirm('Voulez-vous Supprimer ?');"></i></a></td>
															<td><a href="Modifiers?idpharma=<?= "$cm->idpharma" ?>"><i class="fa fa-trash success" onClick="return confirm('Voulez-vous Modifier ?');"></i> </a></td>
														</tr>
													<?php
														$i++;
													}
													?>
												</tbody>
											</table>

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	<!-- /page content -->

	<!-- footer content -->
	<footer>
		<div class="pull-right">
			Mr-Jacques - Admin by <a href="https://colorlib.com">Concepteur</a>
		</div>
		<div class="clearfix"></div>
	</footer>
	<!-- /footer content -->
	</div>
	</div>

	<!-- jQuery -->
	<script src="<?= base_url(); ?>./Design/vendors/jquery/dist/jquery.min.js"></script>
	<!-- Bootstrap -->
	<script src="<?= base_url(); ?>./Design/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
	<!-- FastClick -->
	<script src="<?= base_url(); ?>./Design/vendors/fastclick/lib/fastclick.js"></script>
	<!-- NProgress -->
	<script src="<?= base_url(); ?>./Design/vendors/nprogress/nprogress.js"></script>
	<!-- iCheck -->
	<script src="<?= base_url(); ?>./Design/vendors/iCheck/icheck.min.js"></script>
	<!-- Datatables -->
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/jszip/dist/jszip.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/pdfmake/build/pdfmake.min.js"></script>
	<script src="<?= base_url(); ?>./Design/vendors/pdfmake/build/vfs_fonts.js"></script>

	<!-- Custom Theme Scripts -->
	<script src="<?= base_url(); ?>./Design/build/js/custom.min.js"></script>

</body>

</html>
