<?php

 
include_once './includes/bdd.inc.php';
/*id	-nom	-periodeP	-periodeR	-conseil	-quantite	-visuelle	-famille*/
 


if(isset($_POST["form-add"]))
{
  $_POST['nom'];
  $_POST['periodeP'];
  $_POST['periodeR'];
  $_POST['conseil'];
  $_POST['quantite'];
  $_POST['visuelle'];
  $_POST['famille'];
  $req = $bdd->prepare("INSERT INTO graines(nom,periodeP,periodeR,conseil,quantite,famille,visuelle) VALUES(:nom,:periodeP,:periodeR,:conseil,:quantite,:famille,:visuelle)");
  $req->execute(array(
  'nom' => $_POST['nom'],
  'periodeP' =>$_POST['periodeP'],
  'periodeR' =>$_POST['periodeR'],
  'conseil' =>$_POST['conseil'],
  'famille' =>$_POST['famille'],
  'quantite'=>$_POST['quantite'],
  'visuelle'=>$_POST['visuelle'],
  ));
}
elseif(isset($_GET["del"]))
{
  $query=$bdd->prepare('DELETE FROM graines WHERE id= ?');
  $query->execute(array($_GET['del']));
  $query->closeCursor();

}

elseif(isset($_POST["form-edit"]))
{
  $req = $bdd->prepare('UPDATE graines SET nom=:new_nom,periodeP=:new_periodeP,periodeR=:new_periodeR,conseil=:new_conseil,quantite=:new_quantite,visuelle=:new_visuelle,
  famille=:new_famille WHERE id=:id');
  $req->execute(array(
      'new_nom'=>$_POST['nom'],
      'new_periodeP'=>$_POST['periodeP'],
      'new_periodeR'=>$_POST['periodeR'],
      'new_conseil'=>$_POST['conseil'],
      'new_quantite'=>$_POST['quantite'],
      'new_visuelle'=>$_POST['visuelle'],
      'new_famille'=>$_POST['famille'],
      'id'=>$_POST['id']
  ));
}

/*id	-nom	-periodeP	-periodeR	-conseil	-quantite	-visuelle	-famille*/


header("Location: list.php");
// exit();
