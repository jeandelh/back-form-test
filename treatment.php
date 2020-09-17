<?php

 
include_once './includes/bdd.inc.php';

 


if(isset($_POST["form-add"]))
{
  $_POST['typeMateriel'];
  $_POST['etat'];
  $_POST['localisation'];
  $_POST['quantite'];
  $_POST['information'];
  $_POST['marque'];
  $_POST['visuelle'];
  $req = $bdd->prepare("INSERT INTO simplonstock(typeMateriel,etat,localisation,quantite,information,visuelle,marque) VALUES(:typeMateriel,:etat,:localisation,:quantite,:information,:visuelle,:marque)");
  $req->execute(array(
  'typeMateriel' => $_POST['typeMateriel'],
  'etat' =>$_POST['etat'],
  'localisation' =>$_POST['localisation'],
  'quantite' =>$_POST['quantite'],
  'information' =>$_POST['information'],
  'marque'=>$_POST['marque'],
  'visuelle'=>$_POST['visuelle'],
  ));
}
elseif(isset($_GET["del"]))
{
  $query=$bdd->prepare('DELETE FROM simplonstock WHERE id= ?');
  $query->execute(array($_GET['del']));
  $query->closeCursor();

}

elseif(isset($_POST["form-edit"]))
{
  
  $_POST['typeMateriel'];
  $_POST['etat'];
  $_POST['localisation'];
  $_POST['quantite'];
  $_POST['information'];
  $_POST['marque'];
  $_POST['visuelle'];
  $req = $bdd->prepare("UPDATE simplonstock SET typeMateriel=:typeMateriel,etat=:etat,localisation=:localisation,quantite=:quantite,information=:information,visuelle=:visuelle,marque=:marque");
  $req->execute(array(
  'typeMateriel' => $_POST['typeMateriel'],
  'etat' =>$_POST['etat'],
  'localisation' =>$_POST['localisation'],
  'quantite' =>$_POST['quantite'],
  'information' =>$_POST['information'],
  'marque'=>$_POST['marque'],
  'visuelle'=>$_POST['visuelle'],
  ));
 
 
}



header("Location: list.php");
// exit();
