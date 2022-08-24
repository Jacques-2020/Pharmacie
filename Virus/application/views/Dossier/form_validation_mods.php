<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<head> <?= $header;?></head>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="page-title">
            <div class="title_left">
              <h3>Espace de Modification des Produits </h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Go!</button>
                  </span>
                </div>
              </div>
            </div>
          </div>
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
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i
                          class="fa fa-wrench"></i></a>
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
                <?php
                  $i=1;
                  foreach($article as $art)
                  {
                ?>
                <div class="x_content">
                  <?= form_open(site_url("donner/Cosmeherit/Modifiers"));?>
                    <p>For alternative validation library <code>parsleyJS</code> check out in the <a
                        href="form.html">form page</a>
                    </p>
                    <span class="section">Produits-Pharmacetique</span ><strong><span class="text-danger"><?= $i;?></span></strong>
                    <div><input type="hidden" name="idart" value="<?= $art->idpharma;?>"></div>
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Nom de l'Article<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" data-validate-length-range="6" data-validate-words="2" name="nommod" value="<?= $art->Nom_Article;?>" placeholder="ex. produit cosmetique " required="required" />
                      </div>
                    </div>
                    
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Code-barre<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="codemod" class='email' required="required" type="text" value="<?= $art->Code_Article;?>" placeholder="Code-barre ...."/></div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Prix-En Franc<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" name="modprixf" class='prixf' required="required" type="text" value="<?= $art->Prix_F;?>" placeholder="Saisir le prix en Franc ..."/></div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Qte-T<span class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" class='tel' name="modqte" required='required' type="text" value="<?= $art->stock;?>" data-validate-length-range="text" placeholder="Quantite ...."/></div>
                    </div>
                     
                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Date-Fab<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" class='date' type="date" value="<?= $art->Date_F;?>" name="moddatef" required='required'></div>
                    </div>

                    <div class="field item form-group">
                      <label class="col-form-label col-md-3 col-sm-3  label-align">Date-Exp<span
                          class="required">*</span></label>
                      <div class="col-md-6 col-sm-6">
                        <input class="form-control" class='date' type="date" name="moddatep" value="<?= $art->Date_P;?>" required='required'></div>
                    </div>
                    
                    
                    <div class="ln_solid">
                      <div class="form-group">
                        <div class="col-md-6 offset-md-3">
                        <input type="submit" name="modifier" class="btn btn-primary" value="Modifier">
                    <!-- <button type='submit' name="modifier" class="btn btn-primary">Modifier</button> -->
                    <button type='reset' class="btn btn-success">Reset</button>
                        </div>
                      </div>
                    </div>
                  <?= $i++; form_close()?>
                </div>
                <?php
                  }
                ?>
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
  <script src="<?= base_url();?>./Design/vendors/validator/multifield.js"></script>
  <script src="<?= base_url();?>./Design/vendors/validator/validator.js"></script>

  <script>
    // // initialize a validator instance from the "FormValidator" constructor.
    // // A "<form>" element is optionally passed as an argument, but is not a must
    // var validator = new FormValidator({ "events": ['blur', 'input', 'change'] }, document.forms[0]);
    // // on form "submit" event
    // document.forms[0].onsubmit = function (e) {
    //   var submit = true,
    //     validatorResult = validator.checkAll(this);
    //   console.log(validatorResult);
    //   return !!validatorResult.valid;
    // };
    // // on form "reset" event
    // document.forms[0].onreset = function (e) {
    //   validator.reset();
    // };
    // // stuff related ONLY for this demo page:
    // $('.toggleValidationTooltips').change(function () {
    //   validator.settings.alerts = !this.checked;
    //   if (this.checked)
    //     $('form .alert').remove();
    // }).prop('checked', false);
  </script>

  <!-- jQuery -->
  <script src="<?= base_url();?>./Design/vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="<?= base_url();?>./Design/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!-- FastClick -->
  <script src="<?= base_url();?>./Design/vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="<?= base_url();?>./Design/vendors/nprogress/nprogress.js"></script>
  <!-- validator -->
  <!-- <script src="../vendors/validator/validator.js"></script> -->

  <!-- Custom Theme Scripts -->
  <script src="<?= base_url();?>./Design/build/js/custom.min.js"></script>

</body>

</html>









