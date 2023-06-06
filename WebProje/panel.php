<?php
include("baglanti.php");
 
$sorgu=$db->prepare('SELECT AdSoyad, telefon,begeni,tarih,mail,yorum FROM siparissikayet');
$sorgu->execute();
$personellist=$sorgu-> fetchAll(PDO::FETCH_OBJ);//object olarak verilerimizi çekiyoruz.
 
?>
<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #660099;
  color: white;
}
</style>
</head>
<body>

<table id="customers">
  <tr>
    <th>Ad Soyad</th>
    <th>Telefon</th>
    <th>Beğeni</th>
    <th>Tarih</th>
    <th>Mail</th>
    <th>Yorum</th>
  </tr>
  <?php
			 foreach($personellist as $person){?>
			 
			 	<tr>
			 	<td><?= $person->AdSoyad ?></td>
			 	<td><?= $person->telefon ?></td>
         <td><?= $person->begeni ?></td>
         <td><?= $person->tarih ?></td>
         <td><?= $person->mail ?></td>
			 	<td><?= $person->yorum ?></td>
			    </tr>
				 
			 <?php } ?>
