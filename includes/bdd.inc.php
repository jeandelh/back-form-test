<?php 
    try 
    {
       $bdd = new PDO('mysql:host=localhost;dbname=jdelhay', 'root', '');
    }
    catch (Exception $e)
    {
        die($e->getMessage());
    }
?>