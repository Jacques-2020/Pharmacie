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
    <link href="<?= base_url()?>./Design/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?= base_url()?>./Design/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?= base_url()?>./Design/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?= base_url()?>./Design/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?= base_url()?>./Design/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <?= form_open(site_url("Login/Authens"));?>
              <h1>Compte Admin</h1>
              <div>
                <input type="text" name="nom" class="form-control" placeholder="Email Admin ... !" required/>
              </div>
              <span class="text-danger"><?= form_error('nom');?></span>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Mot de Passe ... !" required/>
              </div>
              <span class="text-danger"><?= form_error('password');?></span>
              <div>
                <input type="hidden" name="etat" value="0">
              </div>
              <strong><span class="text-danger"><?= $this->session->flashdata('error');?></span></strong>
              <div>
                <input type="submit" class="btn btn-success" value="Log In">
                <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
                <a class="reset_pass" href="#">Lost your password?</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Super Administrateur ?
                  <a href="#signup" class="to_register"> Créer Compte </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> PHARMACIE</h1>
                  <p>©2021 All Rights Reserved. M-Jacques! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            <?= form_close()?>
          </section>
        </div>

        <div id="register" class="animate form registration_form">
          <section class="login_content">
            <?= form_open_multipart(site_url("Login/Salacompte"));?>
              <h1>Créer Compte Admin</h1>
              <div>
                <input type="text" name="nom" class="form-control" placeholder="Nom Admin .... !" required/>
              </div>
              <span class="text-danger"><?= form_error("nom");?></span>
              <div>
                <input type="email" name="mail" class="form-control" placeholder="Email Admin ....!" required/>
              </div>
              <span class="text-danger"><?= form_error("mail");?></span>
              <div>
                <input type="password" name="password" class="form-control" placeholder="Password ....!" required/>
              </div>
              <span class="text-danger"><?= form_error("password");?></span>
              <div>
                <input type="hidden" name="etat" class="form-control" value="0" required="" required/>
              </div>
              <hr>
              <div class="col-md-8">
                <input type="submit" class="btn btn-primary" name="" id="" value="Submit">
                <a class="btn btn-success submit" href="<?= site_url("Login/Salacompte");?>">Login</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">Already a member ?
                  <a href="#signin" class="to_register"> Log in </a>
                </p>

                <div class="clearfix"></div>
                <br />

                <div>
                  <h1><i class="fa fa-paw"></i> PHARMACIE</h1>
                  <p>©2021 All Rights Reserved. M-Jacques! is a Bootstrap 3 template. Privacy and Terms</p>
                </div>
              </div>
            <?= form_close();?>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
