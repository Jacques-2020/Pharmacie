<?php defined('BASEPATH')OR exit('No direct script access allowed');?>

  <head>
    <?= $header;?>
  </head>

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Tables <small></small></h3>
              </div>

              <div class="title_right">
                <div class="col-md-5 col-sm-5   form-group pull-right top_search">
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

            <div class="row" style="display: block;">
              

              <div class="clearfix"></div>

              


             
              <div class="clearfix"></div>

              <div class="col-md-12 col-sm-12  ">
                <div class="x_panel">
                  <div class="x_title">
                    <h2> <small></small></h2>
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

                    <p><code></code> </p>

                    <div class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th>
                              <input type="checkbox" id="check-all" class="flat">
                            </th>
                            <th class="column-title"># </th>
                            <th class="column-title">Nom-Admin</th>
                            <th class="column-title">Email-Admin</th>
                            <th class="column-title">Mot-de-Passe</th>
                            <th class="column-title">Etat-de-Compte</th>
                            <th class="column-title">Date-Creation</th>
                            <!-- <th class="column-title no-link last"><span class="nobr">Action</span>
                            <th class="column-title no-link last"><span class="nobr">Action</span> -->
                            </th>
                            <th class="bulk-actions" colspan="7">
                              <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
                            </th>
                          </tr>
                        </thead>
                        <?php
                          $i=1;
                          foreach($compte as $c)
                          {
                        ?>
                        <tbody>
                          <tr class="even pointer">
                            <td class="a-center ">
                              <input type="checkbox" class="flat" name="table_records">
                            </td>
                            <td class=" "><?= $i;?></td>
                            <td class=" "><?= $c->NomAdmin;?></td>
                            <td class=" "><?= $c->EmailAdmin;?></i></td>
                            <td class=" "><?= $c->MotdepasseAdmin;?></td>
                            <td class=" "><?= $c->Etatcompte;?></td>
                            <td class="a-right a-right "><?= $c->DateCreation;?></td>
                            <!-- <td><a href="Supprimer?idadmin=<?= "$c->idadmin"?>"><i class="fa fa-trash red" onClick="return confirm('Voulez-vous Supprimer ?');"></i></a></td>
                            <td><a href="Modifier?idadmin=<?= "$c->idadmin"?>"><i class="fa fa-trash success" onClick="return confirm('Voulez-vous Modifier ?');"></i> </a></td> -->
                          </tr>
                        
                          
                        </tbody>
                        <?php
                         $i++;
                          }
                         
                        ?>
                      </table>
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
            M-Jacques - Bootstrap Admin Template by <a href="https://colorlib.com">Mbiya</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="<?= base_url()?>./Design/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
   <script src="<?= base_url()?>./Design/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url()?>./Design/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="<?= base_url()?>./Design/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="<?= base_url()?>./Design/vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="<?= base_url()?>./Design/build/js/custom.min.js"></script>
  </body>
</html>
