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

                <div class="col-md-9">
                    <section>
                    <form method="post" action="treatment.php"  >
                        <h1>Ajouter</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">nom</label>
                            <input type="text"  class="form-control" id="nom" name="nom" aria-describedby="emailHelp" placeholder="nom de la plante">
                             
                        <div class="form-group">
                            <label for="exampleInputEmail1">famille de la plante</label>
                            <input type="text" class="form-control" id="famille" name="famille" aria-describedby="emailHelp" placeholder="famille de la plante">
                            <!--id	-nom	-periodeP	-periodeR	-conseil	-quantite	-visuelle	-famille-->
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">periode plantation</label>
                            <input type="number"  class="form-control" id="periodeP" name="periodeP" aria-describedby="emailHelp" placeholder="07/03/2019">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">periode de recolte</label>
                            <input type="number" class="form-control" id="periodeR" name="periodeR" aria-describedby="emailHelp" placeholder="07/03/2019">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">quantité</label>
                            <input type="number" class="form-control" id="quantité" name="quantite" aria-describedby="emailHelp" placeholder="4">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">conseil</label>
                            <input type="text" class="form-control" id="conseil" name="conseil" aria-describedby="emailHelp" placeholder="conseil">
                            
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">visuelle</label>
                            <input type="text" class="form-control" id="conseil" name="visuelle" aria-describedby="emailHelp" placeholder="visuelle">

                            
                        </div> -->
                        <div class="form-group">
                                <label for="file">image</label>
                                <input type="file" name="visuelle" class="form-control" id="visuelle"/>
                        </div>

                        
                        
                        <input type="hidden"  name="form-add">
                        <button type="submit" class="btn btn-primary">ajouter</button>
                       
                    </form>
                    </section>
                </div>
            </div>
        </div>

        <?php include_once './view/footer.html'; ?>

    </body>
</html>
