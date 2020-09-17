<?php

    include 'includes/bdd.inc.php'; 

   

?>
<?php include_once './view/head.html'; ?>

<?php include_once './view/header.html'; ?>
     <div class="row">
    
                <div class="col-md-3">
                    <?php include_once './view/nav.html'; ?>
                </div>
                <div class="col-md-9">
                    <section>

                        <h2>Liste</h2>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">visuelle</th>
                                    <th scope="col">type materiel</th>
                                    <th scope="col">etat</th>
                                    <th scope="col">localisation</th>
                                    <th scope="col">quantite</th>
                                    <th scope="col">information</th>
                                    <th scope="col">marque</th>
                                </tr>
                            </thead>
                            <tbody>  
                              
                              
                                <?php
                                    $req = $bdd->prepare('SELECT * FROM simplonStock');
                                    $req->execute();
                                    echo '<tr>';
                                        while ($donnees = $req->fetch()){
                                ?>

                                <tr>
                                    <td><img src="img/<?php echo $donnees['visuelle']; ?>"/></td>
                                    
                                    <!-- <td><?php /*echo $donnees["visuelle"]*/ ?></td> -->
                                    <td><?php echo $donnees ["typeMateriel"] ?></td>
                                    <td><?php echo $donnees ["etat"] ?></td>
                                    <td><?php echo $donnees ["localisation"] ?></td>
                                    <td><?php echo $donnees ["quantite"] ?></td>
                                    <td><?php echo $donnees ["information"] ?></td>
                                    <td><?php echo $donnees ["marque"] ?></td>

                                    <td><a href="form-edit.php?edit=<?php echo $donnees['id'] ?>" role="button">Modifier</a></td>
                                    <td><a href="treatment.php?del=<?php echo $donnees['id'] ?>" role="button">Supprimer</a></td>                                   
                                    
                                </tr>
                                <?php } ?>
                             
                            
                                
                              
                          
                                
                               

                                 


                                 


                            </tbody>
                        </table>

                    </section>
                </div>
</div>
         
         