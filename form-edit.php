<?php

include 'includes/bdd.inc.php'; 
    $id=$_GET['edit'];

    $req = $bdd->prepare('SELECT * FROM graines WHERE id=' . $id);
    $req->execute();
    $donnees = $req->fetch();
    //print_r($donnees);
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
                        
                        <h1>Ajouter</h1>
                        <form method="POST" action="treatment.php"enctype="multipart/form-data">
                            <div class="form-group">
                                <label for="exampleInputEmail1">nom</label>
                                <input type="text"  class="form-control" id="nom" name="nom" aria-describedby="emailHelp" value="<?= $donnees['nom'] ?>">
                                
                            <div class="form-group">
                                <label for="exampleInputEmail1">famille de la plante</label>
                                <input type="text" class="form-control" id="famille" name="famille" aria-describedby="emailHelp"value="<?= $donnees['famille'] ?>">
                                <!--id	-nom	-periodeP	-periodeR	-conseil	-quantite	-visuelle	-famille-->
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">periode plantation</label>
                                <input type="number"  class="form-control" id="periodeP" name="periodeP" aria-describedby="emailHelp" value="<?= $donnees['periodeP'] ?>">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">periode de recolte</label>
                                <input type="number" class="form-control" id="periodeR" name="periodeR" aria-describedby="emailHelp" value="<?= $donnees['periodeR'] ?>">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">quantité</label>
                                <input type="number" class="form-control" id="quantite" name="quantite" aria-describedby="emailHelp" value="<?= $donnees['quantite'] ?>">
                                
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">conseil</label>
                                <input type="text" class="form-control" id="conseil" name="conseil" aria-describedby="emailHelp" value="<?= $donnees['conseil'] ?>">
                                
                            </div>
                            <div class="form-group">
                                    <label for="file">image</label>
                                    <input type="file" name="visuelle" class="form-control" id="visuelle" value="<?= $donnees['visuelle'] ?>"/>
                            </div>
                            <!-- <div class="form-group">
                                    <label for="file">image</label>
                                    <input type="file" name="visuelle" class="form-control" id="visuelle"/>
                            </div>-->

                            
                            
                            <!-- <input type="hidden"  name="form-edit"> -->
                            <input type="hidden" name="id" value="<?php echo $_GET['edit'];?>">
                            <!-- <button type="submit" class="btn btn-primary">ajouter</button> -->
                            <button type="submit" class="btn btn-primary" name="form-edit">Ajouter</button>                       
                        </form>
                    

                 </section>
                    
                    </div>
                </div>
            </div>

        <?php include_once './view/footer.html'; ?>

    </body>
</html>
