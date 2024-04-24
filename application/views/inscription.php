<?php

$this->load->view('templates/header');
// $this->load->view('templates/navbar');

?>

<div class="page-header align-items-start min-vh-100" loading="lazy">
    <!-- <span class="mask bg-gradient-dark opacity-6"></span> -->
    <div class="container my-auto">
      <div class="row">
        <div class="col-lg-4 col-md-8 col-12 mx-auto">
          <div class="card z-index-0 fadeIn3 fadeInBottom">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Créez votre propre compte</h4>
                <p class="text-white text-center">avant de pouvoir accéder à nos fonctionnalités</p>
              </div>
            </div>
            <div class="card-body">
              <form role="form" class="text-start">
                <div class="input-group input-group-outline my-3">
                  <label class="form-label">Email</label>
                  <input type="email" class="form-control">
                </div>
                <div class="input-group input-group-outline mb-3">
                  <label class="form-label">Password</label>
                  <input type="password" class="form-control">
                </div>
                
                <div class="text-center">
                  <button type="button" class="btn bg-gradient-primary w-100 my-4 mb-2">S'inscrire</button>
                </div>
                <p class="mt-4 text-sm text-center">
                  Vous avez un compte ? <a href="" class="text-bold">Connectez-vous</a>
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>

<?php

$this->load->view('templates/footer');

?>
