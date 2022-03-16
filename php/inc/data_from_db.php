<?php


$dsn = 'mysql:dbname=oblog;host=localhost;charset=UTF8' ;
$user = 'oblog' ;
$password = 'oblog' ;

try {
    $pdoDBConnexion = new PDO($dsn, $user, $password, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING
    ]);
} catch (PDOException $exception) {
    // Kint::dump($exception);
    exit("Site temporairement non disponible");
}




// Les catégories
$dataCategoriesList = [];

// requete SQL
$sql = "SELECT * FROM category" ;

// preparation de la requete
$pdoStatement = $pdoDBConnexion->query($sql);

// lecture ligne par ligne des résultats de notre requete
while ($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)) {
    $idCategory = $row["id"];
    $nameCategory = $row["name"];

    $dataCategoriesList[$idCategory] = new Category($nameCategory);
}



// Les auteurs
$dataAuthorsList = [];

// requete SQL
$sql = "SELECT * FROM author ORDER BY name" ;

// preparation de la requete
$pdoStatement = $pdoDBConnexion->query($sql);

// lecture ligne par ligne des résultats de notre requete
while ($row = $pdoStatement->fetch(PDO::FETCH_ASSOC)) {
    $idAuthor = $row["id"];
    $nameAuthor = $row["name"];

    $dataAuthorsList[$idAuthor] = new Author($nameAuthor);
}





// Les différents articles sous forme d'objet
$dataArticlesList = [];

// ecrire notre requete sql
$sql = 'SELECT * FROM post';

// preparation de la requete
$pdoStatement = $pdoDBConnexion->query($sql);

// récupération des lignes de notre table sous forme de tableau associatif 
$resultsPosts = $pdoStatement->fetchAll(PDO::FETCH_ASSOC);

// boucle pour peupler notre tableau $dataArticlesList avec les 
// données issues de notre BDD
foreach ($resultsPosts as $post) {
    // ID du post (article)
    $id = $post['id'];

    // récupère l'ID de l'auteur de l'article
    $idAuthor = $post["author_id"] ;
    // On va lire dans el tableau $dataAuthorsList
    // l'index qui dans notre cas est égale à l'id de l'auteur
    // pour récupérer l'objet Author
    $author = $dataAuthorsList[$idAuthor];
    // récupère le nom de l'auteur dans notre objet Author avec sa propriété name
    $nameAuthor = $author->name;


    // on fait la même opération pour récupérer le nom de la category
    $idCategory = $post["category_id"];
    $category = $dataCategoriesList[$idCategory];
    $nameCategory = $category->name;

    $dataArticlesList[$id] = new Article(
        $post["title"],
        $post["content"],
        $nameAuthor,
        $post["published_date"],
        $nameCategory
    );
}
