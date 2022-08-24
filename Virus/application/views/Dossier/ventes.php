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
							<h2>Mr-<?= $this->session->NomAdmin; ?></h2>
						</div>
					</div>
					<!-- /menu profile quick info -->

					<br />

					<!-- sidebar menu -->
					<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
						<div class="menu_section">
							<h3>General</h3>
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
										<li><a href="<?= site_url('donner/Table_Cosme/Tinda'); ?>">Table-Produits</a></li>
									</ul>
								</li>
								<li>
									<a><i class="fa fa-shopping-bag"></i> Ventes <span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= site_url('donner/Table_Cosme/ventes'); ?>">Liste ventes</a></li>
									</ul>
								</li>
								<li><a><i class="fa fa-user"></i>Espace-Admin<span class="fa fa-chevron-down"></span></a>
									<ul class="nav child_menu">
										<li><a href="<?= site_url('donner/LaboAdmin/EspaceAd'); ?>">Les Administrateurs</a></li>
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

			<div class="right_col" role="main">

				<div class="clearfix">

					<div class="col-md-12 col-sm-12 ">
						<div class="x_panel">

							<div class="x_title">
								<h2>Espace<small>Des Ventes</small></h2>
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
											<table id="datatable-buttons" class="table table-striped table-bordered" style="width:100%">
												<thead>
													<tr>
														<th>#</th>
														<th>Nom-Produit</th>
														<th>Code-Barre</th>
														<th>Stock</th>
														<th>Prix- Fc</th>
														<th>Qte-V</th>
														<th>Total-Vente</th>
														<th>Date-Vente</th>
														<th>Facture</th>
													</tr>
												</thead>
												<tbody>
													<?php
													$i = 1;
													foreach ($vente as $cm) {
													?>

														<tr>
															<td><?= $i ?></td>
															<td><?= $cm->Nom_Article; ?></td>
															<td><?= $cm->Code_Article; ?></td>
															<td><?= $cm->stock; ?></td>
															<td><?= $cm->Prix_F; ?> FC</td>
															<td><?= $cm->qte_v; ?></td>
															<td><?= $cm->Prix_F * $cm->qte_v; ?> FC</td>
															<td><?= $cm->date; ?></td>
															<td>
																<button class="btn btn-success recu" date="<?= $cm->date ?>" article="<?= $cm->Nom_Article ?>" prix="<?= $cm->Prix_F; ?>" qte="<?= $cm->qte_v; ?>" total="<?= $cm->Prix_F * $cm->qte_v; ?> FC" value="<?= $cm->idvente ?>">
																	<i class="fa fa-print success"></i> Reçu
																</button>
															</td>
														</tr>
													<?php
														$i++;
													}
													?>
												</tbody>
											</table>
										</div>
										<h3 class="text-muted font-13 m-b-30 pl-3 mt-3">
											TOTAL VENTES DU JOUR : <?= $vente_jour ?>
										</h3>

									</div>
								</div>
							</div>
						</div>
					</div>



				</div>
			</div>
		</div>
	</div>
	<div class="modal fade" id="mdl-recu" tabindex="-1" role="dialog" aria-labelledby="firefoxModalLabel" aria-hidden="true" data-backdrop='static'>
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="firefoxModalLabel">Impression Reçu</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
				</div>
				<div class="modal-body font-weight-bold text-dark" id="print-zone">
					<div class="p-12 text-right">
						<h5>Facture N° : <span num-fac></span> </h5>
					</div>
					<div class="p-12 text-center">
						<h3>Pharmacie</h3>
					</div>
					<div class="p-3">
						<table class="table table-borderless">
							<tr>
								<th>Libellée Produit</th>
								<th>P-Unit</th>
								<th>Pièces</th>
								
								<th>Totaux</th>
							</tr>
							<tr>
								<td article></td>
								<td prix></td>
								<td qte></td>
								<td total></td>
							</tr>
						</table>
					</div>
					<div class="p-3 text-center">
						<strong ><h3>Merci au Revoir !</h3> </strong> 
					</div>
					<div class="p-3 text-left">
						<!-- <h3>Pharmacie-Venus</h3> -->
						<h6>Date-Fact : <span date></span> </h6>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
					<button type="button" class="btn btn-primary btn-print"> <span class="fa fa-print"></span> Imprimer</button>
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
	<script src="<?= base_url(); ?>./Design/build/js/printThis.js"></script>
	<script>
		$(function() {
			$('.recu').click(function() {
				var btn = $(this);
				var modal = $('#mdl-recu');
				$('span[num-fac]', modal).html(btn.val());
				$('span[date]', modal).html(btn.attr('date'));
				$('td[article]', modal).html(btn.attr('article'));
				$('td[qte]', modal).html(btn.attr('qte'));
				$('td[total]', modal).html(btn.attr('total'));
				modal.modal();
			});
			$('.btn-print').click(function() {
				$('#print-zone').printThis();
			});
		})
	</script>

</body>

</html>
