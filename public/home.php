
<link rel= "stylesheet" href="asset/vendors/css/connexion.css">

<?= require '../front/header.php'; ?>



<!-- Background image -->
<div
    class="p-5 text-center bg-image"
    style="
      background-image: url('https://learnenglish.britishcouncil.org/sites/podcasts/files/RS8068_GettyImages-866440974-hig.jpg');
      height: 400px;
      margin-top: 58px;
    "
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.6);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">BIENVEBUE</h1>
          <h4 class="mb-3">CESI STAGE</h4>
          <a class="btn btn-outline-light btn-lg" href="<?=  $router->generate('login');?>" role="button"
          >Connexion</a
          >
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->



<main class="mt-5">
      <div class="container">
        <!--Section: Content-->
        <section>
          <div class="row">
            <div class="col-md-6 gx-5 mb-4">
              <div class="bg-image hover-overlay ripple shadow-2-strong rounded-5" data-mdb-ripple-color="light">
                <img src="image/stage.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
            </div>

            <div class="col-md-6 gx-5 mb-4">
              <h4><strong>Le site qui vous facilitera la vie </strong></h4>
              <p class="text-muted">
              Aujourd'hui, les étudiants effectuent leurs recherches de stage en entreprise en activant leurs réseaux personnels et professionnels (linkedIn, anciennes promotions, etc.), en postulant à des offres.
              Pour ce faire ce site web rendra les choses simples car il regroupe tout en 1.
              
              </p>
              <p><strong>Comment cela fonctionne?</strong></p>
              <p class="text-muted">
              Afin de rendre cette étape de recherche de stage plus facile et pratique,
              il serait nécessaire de disposer d'un site web qui regroupe différentes offres de stage,
              et qui permettra de stocker les données des entreprises ayant déjà pris un stagiaire, 
              ou qui en recherchent un.
              </p>
            </div>
          </div>
        </section>
        <!--Section: Content-->

        <hr class="my-5" />

        <!--Section: Content-->
        <section class="text-center">
          <h4 class="mb-5"><strong>Facilis consequatur eligendi</strong></h4>

          <div class="row">
            <div class="col-lg-4 col-md-12 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="image/page2.png"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Un stage</h5>
                  <p class="card-text">
                    Vous cherchez un stage?! C'est par ici.
                  </p>
                  <a href="#!" class="btn btn-primary">Commencer</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="image/ce.jpg"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Une entreprise</h5>
                  <p class="card-text">
                    Ici vous trouverez l'entreprise qui correspond a vos besoins.
                  </p>
                  <a href="#!" class="btn btn-primary">Commencer</a>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 mb-4">
              <div class="card">
                <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                  <img
                    src="image/pp.png"
                    class="img-fluid"
                  />
                  <a href="#!">
                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                  </a>
                </div>
                <div class="card-body">
                  <h5 class="card-title">Card title<s/h5>
                  <p class="card-text">
                    Some quick example text to build on the card title and make up the bulk of the
                    card's content.
                  </p>
                  <a href="#!" class="btn btn-primary">commencer</a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!--Section: Content-->

                  </button>
                </div>
              </form>
            </div>
          </div>
        </section>
        <!--Section: Content-->
      </div>
    </main>
    <!--Main layout-->
    <?php   require '../front/foot.php';  ?>

