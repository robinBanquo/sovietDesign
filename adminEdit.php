<!DOCTYPE html>
<html lang="fr">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>Bibliothèque petits loups</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/adminEdit.css"/>
</head>

<?php
$books = [];
for($x=0; $x<10; $x++) {
    $books[$x] =
        array(
            'img' => './img/couv/img'. ($x+1) .'.jpg',
            'title' => 'harry potter n°'.$x,
            'category' => '2',
            'age' => '1',
            'author' => 'mr machin',
            'year' => '200'.$x,
            'editor' => 'editions sociale',
            'synopsis' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab architecto atque commodi debitis deserunt distinctio doloremque, eveniet id illo ipsam laboriosam maiores natus pariatur quam, quas quia reprehenderit temporibus vel?',
        );
}
if(isset($_GET['id']) && $books[$_GET['id']])
{
    $book = $books[$_GET['id']];
}
        else{
    $book = array(
        'img' => '',
        'title' => '',
        'category' => '',
        'age' => '',
        'author' => '',
        'year' => '',
        'editor' => '',
        'synopsis' => '',
    );
}
?>

<body>

<div class="background">

</div>
<section class=" container">
    <form action="" >
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <img src="<?=$book['img']?>" alt=""><br><br>
                    <label for="img" class="control-label">Première de Couverture</label>

                    <input type="file" name="icone" id="img" />
                </div>

            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label for="title" class="control-label">Titre</label>
                    <input type="text" value="<?= $book['title'] ?>" class="col-xs-12" id="title">
                </div>
                <div class="form-group">
                    <label for="author" class="control-label">Auteur</label>
                    <input type="text" value="<?= $book['author'] ?>" class="col-xs-12" id="author">
                </div>
                <div class="form-group">
                    <label for="year" class="control-label">Année d'édition</label>
                    <input type="text" value="<?= $book['year'] ?>" class="col-xs-12" id="year">
                </div>
                <div class="form-group">
                    <label for="editor" class="control-label">Editeur</label>
                    <input type="text" value="<?= $book['editor'] ?>" class="col-xs-12" id="editor">
                </div>
                <div class="form-group">
                    <label for="synopsis" class="control-label">Description</label>
                    <textarea  rows="6" class="col-xs-12" id="synopsis">
                       <?= $book['synopsis'] ?>
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="age" class="control-label">Age</label>
                    <select class="form-control" id="age">
                        <option>0-3</option>
                        <option>3-6</option>
                        <option>6-11</option>
                        <option>11-17</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="category" class="control-label">catégorie</label>
                    <select class="form-control" id="category">
                        <option>Aventure</option>
                        <option>Contes</option>
                        <option>livres éducatifs</option>
                        <option>Bandes dessinées</option>
                        <option>livres pour tout petits</option>
                    </select>
                </div>
            </div>
        </div>
        <br>
        <div class="form-group">
            <button type="submit" class="btn btn-default">Editer/Ajouter Livre</button>
        </div>
    </form>
</section>


<?php
include './template/footer.php';
include './template/foot.php';
?>
</body>
</html>