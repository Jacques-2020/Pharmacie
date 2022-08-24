<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>

<head> <?= $header; ?></head>

<!-- page content -->
<div class="right_col" role="main">
	<div class="">

		<div class="page-title">

			<div class="title_left">
				<h3> </h3>
			</div>

			<div class="title_center">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-center top_search">
					<?php echo form_open(site_url("donner/Cosmeherit/tafuta")); ?>
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
				<?= form_close(); ?> <br><br>

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
									<th>Stock</th>
									<!-- <th>Qte-V</th>
									<th>Qte-R</th> -->
									<th>Date-Fab</th>
									<th>Date-Exp</th>
									<th>Date-Creation</th>
									<!-- <th>Action</th> -->
									<!-- <th></th>  -->
								</tr>
							</thead>
							<tbody>

								<tr class="table table-success">
								<tr title="<?= $pd->stock < 20 ? 'Le stock est inférieur à 20, penser au réapprovisionnement' : '' ?>" class="<?= $pd->stock < 20 ? 'bg-danger' : '' ?>">
									<td><?= $i ?></td>
									<td><?= $pd->Nom_Article; ?></td>
									<td><?= $pd->Code_Article; ?></td>
									<td><?= $pd->Prix_F; ?></td>
									<td><?= $pd->stock; ?></td>
									<!-- <td><?= $pd->qte_v; ?></td>
									<td><?= $pd->Qte_R; ?></td> -->
									<td><?= $pd->Date_F; ?></td>
									<td><?= $pd->Date_P; ?></td>
									<td><?= $pd->DateCreation; ?></td>
									
									<!-- <td><a href="Supprimer?idpharma=<?= "$pd->idpharma" ?>"><i class="fa fa-trash red" onClick="return confirm('Voulez-vous Supprimer ?');"></i></a></td> -->
									<!-- <td><a href="Modifier?idpharma=<?= "$pd->idpharma" ?>"><i class="fa fa-trash success" onClick="return confirm('Voulez-vous Modifier ?');"></i> </a></td> -->
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

		</div><br><br><br><br><br><br><br><br><br>

		<div class="clearfix"></div>

		<div class="row">
			<div class="col-md-12 col-sm-12">
				<div class="x_panel">
					<div class="x_title">
						<h2>Form validation <small>sub title</small></h2>
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
						<?= form_open(site_url("donner/Cosmeherit/Tyango")); ?>
						<p><code></code> <a href="form.html"></a>
						</p>
						<span class="section">Produits-Pharmacetique</span>

						<?php if ($this->session->message) { ?>
							<div class="field item form-group mt-3">
								<label class="col-form-label col-md-3 col-sm-3  label-align"><span class="required"></span></label>
								<div class="col-md-6 col-sm-6">
									<p class="font-weight-bold <?= $this->session->class ?>"><?= $this->session->message ?></p>
								</div>
							</div>
						<?php } ?>
						
						<div class="field item form-group">
							<label class="col-form-label col-md-3 col-sm-3  label-align">Nom de l'Article<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6">
								<input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nom" placeholder="Veuillez Saisir le Nom du produit pharmacetique " required="required" />
							</div>
						</div>

						<div class="field item form-group">
							<label class="col-form-label col-md-3 col-sm-3  label-align">Code-barre<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6">
								<input class="form-control" name="code" class='email' required="required" type="text" placeholder="Code-barre ...." />
							</div>
						</div>

						<div class="field item form-group">
							<label class="col-form-label col-md-3 col-sm-3  label-align">Prix-En Franc<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6">
								<input class="form-control" name="prixf" class='prixf' required="required" type="number" min="1" placeholder="Saisir le prix en franc ..." />
							</div>
						</div>

						<div class="field item form-group">
							<label class="col-form-label col-md-3 col-sm-3  label-align">Quantite-Total<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6">
								<input class="form-control" type="number" min="1" class='tel' name="qte" required='required' data-validate-length-range="text" placeholder="Quantite ...." />
							</div>
						</div>

						<div class="field item form-group">
							<!-- <label class="col-form-label col-md-3 col-sm-3  label-align">Quantiter-Vendu<span class="required">*</span></label> -->
							<div class="col-md-6 col-sm-6">
								<input class="form-control" name="qtev" class='mention' value="0" type="hidden" placeholder="Mention ...." />
							</div>
						</div>

						<div class="field item form-group">
							<!-- <label class="col-form-label col-md-3 col-sm-3  label-align">Quantiter-Rester<span class="required">*</span></label> -->
							<div class="col-md-6 col-sm-6">
								<input class="form-control" name="qter" class='email' value="0" type="hidden" placeholder="Saisir le Prix en Dollar" />
							</div>
						</div>

						<div class="field item form-group">
							<label class="col-form-label col-md-3 col-sm-3  label-align">Date-Fab<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6">
								<input class="form-control" class='date' type="date" name="datef" required='required'>
							</div>
						</div>

						<div class="field item form-group">
							<label class="col-form-label col-md-3 col-sm-3  label-align">Date-Exp<span class="required">*</span></label>
							<div class="col-md-6 col-sm-6">
								<input class="form-control" class='date' type="date" name="date" required='required'>
							</div>
						</div>
						

						<div class="ln_solid">
							<div class="form-group">
								<div class="col-md-6 offset-md-3">
									<button type='submit' class="btn btn-primary">Submit</button>
									<button type='reset' class="btn btn-success">Reset</button>
								</div>
							</div>
						</div>
						</form>
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
		M-Jacques Admin by <a href="https://colorlib.com">Concepteur</a>
	</div>
	<div class="clearfix"></div>
</footer>
<!-- /footer content -->
</div>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?= base_url(); ?>./Design/vendors/validator/multifield.js"></script>
<script src="<?= base_url(); ?>./Design/vendors/validator/validator.js"></script>

<script>
	// initialize a validator instance from the "FormValidator" constructor.
	// A "<form>" element is optionally passed as an argument, but is not a must
	var validator = new FormValidator({
		"events": ['blur', 'input', 'change']
	}, document.forms[0]);
	// on form "submit" event
	document.forms[0].onsubmit = function(e) {
		var submit = true,
			validatorResult = validator.checkAll(this);
		console.log(validatorResult);
		return !!validatorResult.valid;
	};
	// on form "reset" event
	document.forms[0].onreset = function(e) {
		validator.reset();
	};
	// stuff related ONLY for this demo page:
	$('.toggleValidationTooltips').change(function() {
		validator.settings.alerts = !this.checked;
		if (this.checked)
			$('form .alert').remove();
	}).prop('checked', false);
</script>

<!-- jQuery -->
<script src="<?= base_url(); ?>./Design/vendors/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="<?= base_url(); ?>./Design/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url(); ?>./Design/vendors/fastclick/lib/fastclick.js"></script>
<!-- NProgress -->
<script src="<?= base_url(); ?>./Design/vendors/nprogress/nprogress.js"></script>
<!-- validator -->
<!-- <script src="../vendors/validator/validator.js"></script> -->

<!-- Custom Theme Scripts -->
<script src="<?= base_url(); ?>./Design/build/js/custom.min.js"></script>

</body>

</html>
