<?php

try{
    $db=new PDO("mysql:host=localhost; dbname=ordu; charset=utf8","root","");
}
catch(PDOException $mesaj){
   echo  $mesaj->getMessage();
}

?>