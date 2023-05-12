<?php
// Connexion à la base de données
$db = new PDO("mysql:host=localhost;dbname=mydatabase", "username", "password");

// Récupération du nombre total d'articles dans la base de données
$query = $db->query("SELECT COUNT(*) AS total_articles FROM articles");
$result = $query->fetch();
$total_articles = $result['total_articles'];

// Définition du nombre d'articles par page
$articles_par_page = 10;

// Calcul du nombre total de pages nécessaires
$total_pages = ceil($total_articles / $articles_par_page);

// Récupération de la page courante
$page = isset($_GET['page']) ? $_GET['page'] : 1;

// Calcul de l'offset pour la requête SQL
$offset = ($page - 1) * $articles_par_page;

// Récupération des articles pour la page courante
$query = $db->prepare("SELECT * FROM articles LIMIT :offset, :articles_par_page");
$query->bindParam(':offset', $offset, PDO::PARAM_INT);
$query->bindParam(':articles_par_page', $articles_par_page, PDO::PARAM_INT);
$query->execute();
$articles = $query->fetchAll(PDO::FETCH_ASSOC);

// Affichage des articles
foreach ($articles as $article) {
    echo "<h2>".$article['title']."</h2>";
    echo "<p>".$article['content']."</p>";
}

// Affichage des liens de navigation vers les pages suivantes et précédentes
echo "<div class='pagination'>";
if ($page > 1) {
    echo "<a href='?page=".($page - 1)."'>Précédent</a>";
}
for ($i = 1; $i <= $total_pages; $i++) {
    if ($i == $page) {
        echo "<span class='current'>".$i."</span>";
    } else {
        echo "<a href='?page=".$i."'>".$i."</a>";
    }
}
if ($page < $total_pages) {
    echo "<a href='?page=".($page + 1)."'>Suivant</a>";
}
echo "</div>";
?>
