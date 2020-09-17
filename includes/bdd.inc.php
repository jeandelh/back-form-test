<?php 
    try 
    {
       $bdd = new PDO('mysql:host=localhost;dbname=materiel', 'root', '');
    }
    catch (Exception $e)
    {
        die($e->getMessage());
    }
?>