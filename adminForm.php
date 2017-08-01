<!DOCTYPE html>
<html lang="fr">
<head>
    <meta content="text/html; charset=utf-8" http-equiv="content-type">
    <title>Bibliothèque petits loups</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./css/adminForm.css"/>
</head>
    <body>
        <div class="background">

        </div>

        <section class="admin_connect">
            <form action="" class="form-horizontal col-sm-6 col-sm-offset-3" role="form">
                <h3>Connexion Administrateur</h3>
                <div class="form-group">
                    <div class="col-sm-9">
                        <input type="text" id="login" class="form-control">
                    </div>
                    <label for="login" class="col-sm-3 control-label">login</label>
                </div>
                <div class="form-group">
                    <div class="col-sm-9">
                         <input type="password" id="password" class="form-control">
                    </div>
                    <label for="password" class="col-sm-3 control-label">password</label>
                </div>
                <div class="form-group">
                        <button type="submit" class="btn btn-default">se connecter</button>
                </div>
            </form>
        </section>


        <?php
        include './template/footer.php';
        include './template/foot.php';
        ?>
    </body>
</html>