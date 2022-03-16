<aside class="col-lg-3">
    <!-- Champ de recherche: https://getbootstrap.com/docs/5.0/forms/input-group/ -->
    <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Rechercher un article..." aria-label="Rechercher un article..." aria-describedby="basic-addon2">
        <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">Allez</button>
        </div>
    </div>

    <!-- Catégories: https://getbootstrap.com/docs/5.0/components/card/#list-groups -->
    <div class="card">
        <h3 class="card-header">Catégories</h3>
        <ul class="list-group list-group-flush">

            <?php foreach($dataCategoriesList as $indexCategory => $category): ?>
            <li class="list-group-item">
                <a href="index.php?page=category&id=<?php echo $indexCategory ; ?>">
                    <?php echo $category->name ; ?>
                </a>
            </li>
            <?php endforeach; ?>



        </ul>
    </div>

    <!-- Auteurs: https://getbootstrap.com/docs/5.0/components/card/#list-groups -->
    <div class="card">
        <h3 class="card-header">Auteurs</h3>
        <ul class="list-group list-group-flush">

            <?php foreach ($dataAuthorsList as $indexAuthor => $author) : ?>
            <li class="list-group-item"><a href="index.php?page=author&id=<?php echo $indexAuthor ; ?>"><?php echo $author->name ; ?></a></li>
            <?php endforeach; ?>

        </ul>
    </div>

</aside>