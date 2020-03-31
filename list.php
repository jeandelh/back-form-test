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
                                    <th scope="col">nom</th>
                                    <th scope="col">periode de plantation</th>
                                    <th scope="col">periode de recolte</th>
                                    <th scope="col">conseil</th>
                                    <th scope="col">quantite</th>
                                    <th scope="col">famille</th>
                                </tr>
                            </thead>
                            <tbody>  
                              
                              
                                <?php
                                    $req = $bdd->prepare('SELECT * FROM graines');
                                    $req->execute();
                                    echo '<tr>';
                                        while ($donnees = $req->fetch()){
                                ?>

                                <tr>
                                    <td><img src="img/<?php echo $donnees['visuelle']; ?>"/></td>
                                    <!-- <td><?php /*echo $donnees["visuelle"]*/ ?></td> -->
                                    <td><?php echo $donnees ["nom"] ?></td>
                                    <td><?php echo $donnees ["periodeP"] ?></td>
                                    <td><?php echo $donnees ["periodeR"] ?></td>
                                    <td><?php echo $donnees ["conseil"] ?></td>
                                    <td><?php echo $donnees ["quantite"] ?></td>
                                    <td><?php echo $donnees ["famille"] ?></td>

                                    <td><a href="form-edit.php?edit=<?php echo $donnees['id'] ?>" role="button">Modifier</a></td>
                                    <td><a href="treatment.php?del=<?php echo $donnees['id'] ?>" role="button">Supprimer</a></td>                                   
                                    
                                </tr>
                                <?php } ?>
                             
                            
                                
                                <!-- $reponse =$pdo->query('SELECT*FROM apprenants');
                                while ($donnees=$pseudo->fetch)
                                while ($donnees=$city->fetch)
                                while ($donnees=$cp->fetch)
                                {
                                     echo $donnees['pseudo']; 
                                
                                

                                
                                } -->
                          
                                
                               

                                 


                                 


                            </tbody>
                        </table>

                    </section>
                </div>
</div>
         
         