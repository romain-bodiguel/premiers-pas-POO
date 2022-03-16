<!-- Mon container (avec une max-width) dans lequel mon contenu va être placé: https://getbootstrap.com/docs/5.0/layout/containers -->
<div class="container">
    <!-- Je crée une nouvelle ligne dans ma grille virtuelle: https://getbootstrap.com/docs/5.0/layout/grid/-->
    <div class="row">

      <!-- Par défaut (= sur mobile) mon element <main> prend toutes les colonnes (=12)
        MAIS au dela d'une certaine taille, il n'en prendra plus que 9
        https://getbootstrap.com/docs/5.0/layout/grid/#grid-options -->
      <main class="col-lg-9">

        <!-- Je dispose une card: https://getbootstrap.com/docs/5.0/components/card/ -->
        <article class="card">
          <div class="card-body">
            <h2 class="card-title"><?= $articleToDisplay->title ?></h2>
            <p class="infos">
              Posté par <a href="#" class="card-link"><?= $articleToDisplay->author ?></a> le <time datetime="<?= $articleToDisplay->date ?>"><?= $articleToDisplay->getDateFr() ?></time> dans <a href="#"
                class="card-link">#<?= $articleToDisplay->category ?></a>
            </p>
            <p class="card-text"><?= $articleToDisplay->content ?></p>
          </div>
        </article>

        <!-- Je met un element de navigation: https://getbootstrap.com/docs/5.0/components/pagination/ -->
        <nav aria-label="Page navigation example">
          <ul class="pagination justify-content-between">
            <li class="page-item"><a class="page-link" href="index.html"><i class="fa fa-arrow-left"></i> Retour à l'accueil</a></li>
          </ul>
        </nav>

      </main>

      <!-- inclusion de la navigation de droite -->
      <?php require 'nav-right.tpl.php'; ?>
    </div><!-- /.row -->