<!DOCTYPE html>
<html lang="fr">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>Bibliothèque petits loups</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/adminList.css"/>
</head>
<body>
<div class="background">

</div>
<section class=" container">
    <form class="form-inline">
        <div class="form-group">
            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="entrez votre recherche">
        </div>
        <button type="submit" class="btn btn-default">recherche</button>
    </form>
    <br>
    <table class="table admin_list">
        <tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Auteur</th>
            <th>Année</th>
            <th>Actions</th>
        </tr>
        <?php
        for ($x=0; $x<8; $x++) {
            ?>
            <tr>
                <td><?= $x ?></td>
                <td>titre <?= $x?></td>
                <td>auteur <?= $x?></td>
                <td>200<?= $x?></td>
                <td><a href="./adminEdit.php?id=<?= $x ?>">Editer la fiche</a>
                    <br>
                    <a href="" class="danger">Supprimer la fiche</a>
                </td>
            </tr>
            <?php
        }
        ?>
    </table>
    <a href="adminEdit.php" class="btn btn-default">Ajouter un livre</a>
</section>


<?php
include './template/footer.php';
include './template/foot.php';
?>
</body>
</html>