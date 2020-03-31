<?php

include_once './includes/bdd.inc.php';

$sql = $bdd->prepare("SELECT * FROM graines");
$sql->execute();

$graines = $sql->fetchAll(PDO::FETCH_ASSOC);
// echo '<pre>';
// print_r($apprenants);
// echo '</pre>';
?>

<!DOCTYPE html>
<html lang="fr">

    <?php include_once './view/head.html'; ?>

    <body >

        <?php include_once './view/header.html'; ?>

        <div class="container-fluid">
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
                                
                                foreach($graines as $line){
                                    echo "<tr>";
                                 
                                    echo "<td>".$line["visuelle"]."</td>";
                                    echo "<td>".$line["nom"]."</td>";
                                    echo "<td>".$line["periodeP"]."</td>";
                                    echo "<td>".$line["periodeR"]."</td>";
                                    echo "<td>".$line["conseil"]."</td>";
                                    echo "<td>".$line["quantite"]."</td>";
                                    echo "<td>".$line["famille"]."</td>";
                                    echo "<td><a href='form-edit.php?edit=".$line["id"]."' role='button'>Modifier</a></td>";
                                    echo "<td><a href='treatment.php?del=".$line["id"]."' role='button'>Supprimer</a></td>";
                                    echo "</tr>";
                                }
                            
                                ?> 
                                  
                                  <!-- <img src="./img/default.jpg"> -->
                                  
                            </tbody>
                        </table>

                    </section>
                </div>
            </div>
        </div>

        <?php include_once './view/footer.html'; ?>

    </body>
</html>
