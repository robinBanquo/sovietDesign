<!DOCTYPE html>
<html lang="fr">
<?php
include './template/head.php';
?>
    <body>
        <header>
            <?php
            include './template/header.php';
            ?>
        </header>
        <div class="i-margin">

        </div>
        <main>

        <!-- inclure ici tout les elements du conteneur principal -->
        <div class="">
            <!-- selecteur our naviguer sur la page en fonction des ages -->
            <nav class="i-menu">
                <?php
                include_once "./dataExemple/dataGenerator.php";
                // include_once './dataExemple/initialize.php';
                $data = new Data(40,1);
                $ageTable = $data->Age();
                //affiche les differentes catégories d'age de manière dynamique
                foreach ($ageTable as $age)
                    {
                        echo '<a class="i_menu-age" href="#i-' . $age . '">'. $age.' ans</a>';
                    }
                 ?>
            </nav>
        </div>
            <div class="i-central">
                <?php
                    foreach ($ageTable as $age) {
                        //création de chaque conteneur de livres classés par age
                        echo '<div class="i-age" id="i-' . $age . '">';
                        echo '<h2 class="i-age-title">' . $age . ' ans</h3>';
                        // affichage de chaque livre
                        $books = $data->BooksByAge($age, 12);//on utilise la methode qui permet de nous sortir $n livres selon l'age au hazard
                        foreach ($books as $book)  {
                            ?>
                            <div class="i-book">
                                <div class="i-visible">
                                    <img src="<?= $book['img'] ?>" alt=" première de couverture de <?= $book['title']?>">
                                    <h3 class="i-book-title"><?= $book['title'] ?></h3>
                                </div>
                                <div class="i-invisible">
                                    <h3 class="i-book-title"><?= $book['title'] ?></h3>
                                    <p class="i-book-author"><?= $book['author'] ?></p>
                                    <p class="i-book-description"><?= $book['description'] ?></p>
                                    <a class ="i-linktoshow" href="./show.php?id=<?=$book['id']?>">Voir fiche détaillée</a>
                                </div>
                            </div>
                            <?php
                        }
                        echo '</div>';
                    }
                 ?>
            </div>
        </main>
        <footer>
        <?php
        include './template/footer.php';
        ?>
        </footer>
        <?php
        include './template/foot.php';
        ?>
    </body>
</html>
