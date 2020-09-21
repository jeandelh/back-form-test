<?php

include 'includes/bdd.inc.php'; 
    $id=$_GET['edit'];

    $req = $bdd->prepare('SELECT * FROM simplonstock WHERE id=' . $id);
    $req->execute();
    $donnees = $req->fetch();
    // print_r($donnees);
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
                        <h1>modifier</h1>
                        <div class="form-group">
                            <label for="exampleInputEmail1">type matériel</label>
                            <input type="text"  class="form-control" id="typeMateriel" name="typeMateriel" aria-describedby="emailHelp" value="<?= $donnees['typeMateriel'] ?>">
                            
                        <div class="form-group">
                            <label for="exampleInputEmail1">état</label>
                            <input type="text" class="form-control" id="etat" name="etat" aria-describedby="emailHelp" value="<?= $donnees['etat'] ?>">
                           
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">localisation</label>
                            <input type="text"  class="form-control" id="localisation" name="localisation" aria-describedby="emailHelp">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">quantite</label>
                            <input type="number" class="form-control" id="quantite" name="quantite" aria-describedby="emailHelp" placeholder="ex:1">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">information</label>
                            <input type="text" class="form-control" id="information" name="information" aria-describedby="emailHelp" placeholder="ex:bouton power derrière écran">
                            
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">marque</label>
                            <input type="text" class="form-control" id="marque" name="marque" aria-describedby="emailHelp" placeholder="ex:asus">
                            
                        </div>
                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">visuelle</label>
                            <input type="text" class="form-control" id="conseil" name="visuelle" aria-describedby="emailHelp" placeholder="visuelle">

                            
                        </div> -->
                        <div class="form-group">
                                <label for="file">image</label>
                                <input type="file" name="visuelle" class="form-control" id="visuelle"/>
                        </div>

                        
                        
                        <input type="hidden"  name="form-edit">
                        <button type="submit" class="btn btn-primary">modifier</button>
                       
                    </form>
                    </section>
                </div>
            </div>
        </div>

        <?php include_once './view/footer.html'; ?>

    </body>
</html>

