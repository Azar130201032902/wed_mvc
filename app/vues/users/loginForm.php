<?php
/*
  ./app/vues/users/index.php
  Variable disponible:
    /
 */
?>
<div class="col-lg-8 mb-5 mb-lg-0">
    <div class="blog_left_sidebar">
      <div class="row">
          <div class="col-12">
              <h2 class="contact-title">Connexion au backoffice</h2>
          </div>
          <div class="col-12">
              <form class="form-contact contact_form" action="" method="post" id="contactForm" novalidate="novalidate">
                  <div class="row">
                      <div class="col-sm-6">
                          <div class="form-group">
                              <input class="form-control valid" name="pseudo" id="name" type="text" placeholder="Entrer votre pseudo">
                          </div>
                      </div>
                      <div class="col-sm-6">
                          <div class="form-group">
                              <input class="form-control valid" name="password" id="email" type="password" placeholder="Entrer votre mot de passe">
                          </div>
                      </div>
                  </div>
                  <div class="form-group mt-3">
                      <button type="submit" class="button button-contactForm boxed-btn">Connexion</button>
                  </div>
              </form>
          </div>
      </div>
    </div>
</div>
