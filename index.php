<?php

include_once './includes/bdd.inc.php';

?>

<!DOCTYPE html>
<html lang="fr">

    <?php include_once './view/head.html'; ?>

    <body>

        <?php include_once './view/header.html'; ?>

        <div class="container-fluid">
            <div class="row">

                <div class="col-md-3">
                    <?php include_once './view/nav.html'; ?>
                </div>

                <div class="row">
                    <section>
                   
                        
                    <a class="btn btn-primary" href="form-add.php" role="button">Ajouter des données</a>

                    </section>
                    
                   
                </div>
            </div>
        </div>

        <?php include_once './view/footer.html'; ?>

    </body>
</html>
